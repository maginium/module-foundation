<?php

declare(strict_types=1);

namespace Maginium\Framework\Crud\Concerns\Authorization;

use Magento\Authorization\Model\UserContextInterface;
use Maginium\Customer\Facades\Customer;
use Maginium\Foundation\Exceptions\Exception;
use Maginium\Framework\Support\Facades\Token;
use Maginium\Framework\Support\Php;
use Maginium\Framework\Support\Validator;

/**
 * Trait HasAuthorization
 * Handles authorization for customer users through header and session validation mechanisms.
 *
 * Provides utility methods for managing and verifying tokens.
 */
trait HasAuthentication
{
    /**
     * Get the Authorization token from the request headers.
     *
     * Retrieves the token from the Authorization header if present.
     * The token is expected to be in the format: 'Bearer <token>'.
     *
     * @return string|null Returns the token if present, otherwise null.
     */
    public function authorizationToken(): ?string
    {
        // Retrieve the 'Authorization' header from the request
        $authHeader = $this->header('Authorization');

        // If the header is a string and starts with 'Bearer ', process the token
        if (Validator::isString($authHeader) && str_starts_with($authHeader, 'Bearer ')) {
            // Split the header by space to extract the token
            $parts = explode(' ', $authHeader);

            // If the header is properly formatted, return the token (second part after 'Bearer')
            return Php::count($parts) === 2 ? $parts[1] : null;
        }

        // Return null if the header doesn't start with 'Bearer ' or the token is not present
        return null;
    }

    /**
     * Determine if the request contains a valid Authorization header.
     *
     * Checks whether the Authorization header is valid and the token is authentic.
     *
     * @return bool True if the token is valid, false otherwise.
     */
    public function hasValidAuthorization(): bool
    {
        // Retrieve the token from the Authorization header
        $authToken = $this->authorizationToken();

        // Return true if the token exists and is valid, false otherwise
        return $authToken && $this->isValidToken($authToken);
    }

    /**
     * Get the currently authenticated user based on the token.
     *
     * Retrieves the user associated with the provided authorization token. The user type is determined
     * from the token, and based on the user type, either a customer or admin user model is returned.
     *
     * @return mixed|null Returns the user model if the token is valid and the user exists, otherwise null.
     */
    public function currentUser()
    {
        // Retrieve the token from the Authorization header
        $authToken = $this->authorizationToken();

        // If the token exists, attempt to load and validate it
        if ($authToken) {
            try {
                // Load the token model using the Token facade
                $tokenModel = Token::loadByToken($authToken);

                if ($tokenModel) {
                    // Extract user ID and user type ID from the token
                    $userId = $tokenModel->getUserId();
                    $userTypeId = $tokenModel->getUserTypeId();

                    // Determine which user model to load based on user type ID (customer or admin)
                    return match ($userTypeId) {
                        UserContextInterface::USER_TYPE_CUSTOMER => Customer::loadById($userId), // Load customer model
                        UserContextInterface::USER_TYPE_ADMIN => User::loadById($userId), // Load admin model
                        default => throw Exception::make('Invalid user type in token.'), // Throw exception if user type is invalid
                    };
                }
            } catch (Exception $e) {
                // If an exception occurs, return null (could log the error here if needed)
                return;
            }
        }

        // Return null if no valid token is found
    }

    /**
     * Validate the user's session using the authorization token.
     *
     * Confirms that the user associated with the token is active and the session is valid.
     *
     * @return bool True if the session is valid and active, false otherwise.
     */
    public function isUserSessionValid(): bool
    {
        // Fetch the current user based on the authorization token
        $user = $this->currentUser();

        // Ensure that the user exists and is active, return true if valid, false otherwise
        return $user && $user->isActive();
    }

    /**
     * Invalidate the authorization token to log out the user.
     *
     * This method deactivates the current authorization token, effectively logging the user out.
     *
     * @return bool True if the token was successfully invalidated, false otherwise.
     */
    public function logoutUser(): bool
    {
        // Retrieve the token from the Authorization header
        $authToken = $this->authorizationToken();

        // If the token exists, attempt to invalidate it
        if ($authToken) {
            try {
                // Load the token model using the Token facade
                $tokenModel = Token::loadByToken($authToken);

                if ($tokenModel) {
                    // Invalidate the token, effectively logging the user out
                    $tokenModel->invalidate();

                    // Return true indicating the token was successfully invalidated
                    return true;
                }
            } catch (Exception $e) {
                // If an exception occurs (e.g., token not found or invalid), return false
                return false;
            }
        }

        // Return false if no token is found or the token cannot be invalidated
        return false;
    }

    /**
     * Check if the provided authorization token is valid.
     *
     * Verifies whether the given token exists and is active.
     *
     * @param string $token The token to validate.
     *
     * @return bool True if the token is valid, false otherwise.
     */
    private function isValidToken(string $token): bool
    {
        try {
            // Attempt to load the token using the Token facade
            $tokenModel = Token::loadByToken($token);

            // Return true if the token is found and has a valid ID (active)
            return $tokenModel && $tokenModel->getId();
        } catch (Exception $e) {
            // If an exception is thrown (e.g., token not found or invalid), return false
            return false;
        }
    }
}
