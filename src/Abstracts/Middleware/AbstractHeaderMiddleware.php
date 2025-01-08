<?php

declare(strict_types=1);

namespace Maginium\Foundation\Abstracts\Middleware;

use Magento\Store\Api\Data\StoreInterface;
use Maginium\Foundation\Exceptions\NotFoundException;
use Maginium\Framework\Config\Enums\ConfigDrivers;
use Maginium\Framework\Request\Interfaces\RequestInterface;
use Maginium\Framework\Response\Interfaces\ResponseInterface;
use Maginium\Framework\Support\Facades\Config;
use Maginium\Framework\Support\Facades\Log;
use Maginium\Framework\Support\Facades\Request;
use Maginium\Framework\Support\Facades\StoreManager;
use Maginium\Framework\Support\Php;
use Maginium\Framework\Support\Str;
use Maginium\Framework\Support\Validator;

/**
 * Abstract middleware class for handling headers in requests and responses.
 *
 * This middleware allows the addition and modification of headers for both
 * incoming requests and outgoing responses. It also provides utility methods
 * for determining the store context based on the request path.
 */
abstract class AbstractHeaderMiddleware extends AbstractMiddleware
{
    /**
     * Perform logic before processing the request.
     *
     * This method allows adding or modifying headers in the incoming request
     * before it is processed by the application.
     *
     * @param RequestInterface $request The incoming request.
     */
    protected function before($request): void
    {
        // Retrieve the header name in StudlyCase format.
        $name = Str::studly($this->getName(), true);

        // Retrieve the value to be set for the header.
        $value = $this->getValue();

        // Set or modify the header in the request.
        $request->setHeader($name, $value);
    }

    /**
     * Perform logic after processing the response.
     *
     * This method allows adding or modifying headers in the outgoing response
     * after it has been processed by the application.
     *
     * @param ResponseInterface $response The outgoing response.
     */
    protected function after($response): void
    {
        // Retrieve the header name in StudlyCase format.
        $name = Str::studly($this->getName(), true);

        // Retrieve the value to be set for the header.
        $value = $this->getValue();

        // Set or modify the header in the response.
        $response->setHeader($name, $value, true);
    }

    /**
     * Retrieves the name of the header to be added.
     *
     * The name is expected to be returned in a format suitable for HTTP headers.
     *
     * @return string|null The name of the header, or null if not applicable.
     */
    abstract protected function getName(): ?string;

    /**
     * Retrieves the value of the header to be added.
     *
     * This value will be set for the header in either the request or response.
     *
     * @return mixed The value of the header.
     */
    abstract protected function getValue(): mixed;

    /**
     * Retrieves the store based on the request path.
     *
     * Determines the store by analyzing the REST API URL path. If a valid store
     * code is provided, the corresponding store is returned. Otherwise, the
     * default store view is returned.
     *
     * @return StoreInterface The store instance.
     */
    protected function getStore(): StoreInterface
    {
        // Get the current request's URL path.
        $urlPath = Request::getPathInfo();

        // Split the URL path into parts using the directory separator.
        $urlParts = Php::explode(SP, trim($urlPath, SP));

        // Retrieve supported API versions from configuration.
        $apiVersions = Config::driver(ConfigDrivers::ENV)->getArray('API_VERSIONS');

        // Check if the second part of the URL contains a valid store code.
        if (! Validator::isEmpty($urlParts[1])) {
            // Convert the store code to lowercase for standardization.
            $storeCode = Str::lower($urlParts[1]);

            // If the store code is not 'api' or not a valid API version, use the default store view.
            if ($storeCode !== 'api' || ! Php::inArray($storeCode, $apiVersions)) {
                return StoreManager::getDefaultStoreView();
            }

            try {
                // Attempt to retrieve the store instance based on the store code.
                return StoreManager::getStore($storeCode);
            } catch (NotFoundException $e) {
                // Log a warning if the store code is invalid.
                Log::warning("Invalid store code provided: {$storeCode}. Using default store.");

                // Return the default store view in case of an exception.
                return StoreManager::getDefaultStoreView();
            }
        }

        // If no valid store code is found, use the default store view.
        return StoreManager::getDefaultStoreView();
    }
}
