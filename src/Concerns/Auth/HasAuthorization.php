<?php

declare(strict_types=1);

namespace Maginium\Foundation\Concerns\Auth;

use Magento\Framework\AuthorizationInterface;
use Magento\Framework\Exception\AuthorizationException;

/**
 * Trait HasAuthorization.
 *
 * Provides methods for handling authorization in admin controllers.
 * Ensures that admin users have the required permissions to access specific actions.
 */
trait HasAuthorization
{
    /**
     * Holds the instance of the authorization service, which is responsible for checking user permissions.
     *
     * @var AuthorizationInterface
     */
    protected $authorization;

    /**
     * Checks if the current user has the required ACL (Access Control List) permission.
     *
     * This method checks if the current user has the necessary permission to perform a specific action,
     * defined by the provided ACL resource.
     *
     * @param string $aclResource The ACL resource that the user needs permission for.
     *
     * @throws AuthorizationException If the user does not have permission.
     *
     * @return bool Returns `true` if the user is authorized, `false` otherwise.
     */
    public function authorize(string $aclResource): bool
    {
        // Check if the user has permission to perform the action based on the provided ACL resource.
        if (! $this->authorization->isAllowed($aclResource)) {
            // If the user does not have the required permission, trigger an error.
            $this->error(__('You do not have permission to perform this action.'));

            // Redirect the user to the default action page (usually the current controller's default action).
            $this->_redirect('*/*/');

            // Return false to indicate the authorization failed.
            return false;
        }

        // Return true if the user is authorized to perform the action.
        return true;
    }

    /**
     * Determines if the current user is allowed access without throwing an exception.
     *
     * This method allows for a non-exception-based check of user authorization.
     * It simply returns `true` if the user is authorized, and `false` otherwise.
     *
     * @param string $aclResource The ACL resource to check permissions for.
     * @param string|null $privilege Optional privilege to check for more granular permission control.
     *
     * @return bool Returns `true` if the user is allowed, `false` otherwise.
     */
    public function can(string $aclResource, $privilege = null): bool
    {
        // Return true if the user has permission to access the given resource, otherwise false.
        return $this->authorization->isAllowed($aclResource);
    }

    /**
     * Determines if the current user does not have the given abilities.
     *
     * This method checks if the user does not have permission for a particular resource.
     * It's the inverse of the `can()` method.
     *
     * @param iterable|string $abilities A single ability or a list of abilities to check for.
     * @param string|null $privilege Optional privilege to check for more granular control.
     *
     * @return bool Returns `true` if the user is not authorized for the given abilities, `false` otherwise.
     */
    public function cant($abilities, $privilege = null): bool
    {
        // Use the can method and return the opposite result. If `can()` returns false, `cant()` will return true.
        return ! $this->can($abilities, $privilege);
    }

    /**
     * Alias for `cant()` to ensure consistent naming convention.
     *
     * The `cannot()` method is essentially a synonym for `cant()`, providing an alternative name
     * for the same functionality, which can be more intuitive depending on the use case.
     *
     * @param iterable|string $abilities A single ability or a list of abilities to check for.
     * @param string|null $privilege Optional privilege to check for more granular control.
     *
     * @return bool Returns `true` if the user does not have permission for the abilities, `false` otherwise.
     */
    public function cannot($abilities, $privilege = null): bool
    {
        // Simply call `cant()` and return the same result.
        return $this->cant($abilities, $privilege);
    }
}
