<?php

declare(strict_types=1);

namespace Maginium\Foundation\Abstracts;

use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ActionInterface;
use Magento\Framework\Controller\Result\Json;
use Magento\Framework\Controller\Result\Redirect;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\Controller\ResultInterface;
use Magento\Framework\View\Result\Page;
use Maginium\Foundation\Concerns\InteractsWithMessages;
use Maginium\Foundation\Enums\HttpStatusCodes;
use Maginium\Framework\Actions\Concerns\AsController;
use Maginium\Framework\Crud\Concerns\Authorization\HasAuthorization as HasAuthentication;
use Maginium\Framework\Response\Traits\ResponseBuilder;

/**
 * Abstract controller class for HTTP actions in the frontend.
 *
 * This class serves as a base controller for handling frontend HTTP requests. It
 * implements common logic for redirecting, rendering pages, and managing messages.
 * All controllers extending this class will have access to utility methods for
 * redirecting, rendering pages, and displaying success or error messages.
 */
abstract class HttpController implements ActionInterface
{
    // Use the AsController trait for additional functionality
    use AsController;
    // Use the `HasAuthentication` trait to handle authorization.
    use HasAuthentication;
    // Use the `InteractsWithMessages` trait to manage and interact with messages.
    use InteractsWithMessages;
    // Use the ResponseBuilder trait for additional functionality
    use ResponseBuilder;

    /**
     * The page handler property to store a page-related string.
     *
     * This property is used to store a string representing the page layout or
     * other identifiers that help determine which layout or template to render.
     *
     * @var string|null
     */
    protected ?string $pageHandler = null;

    /**
     * The page title property.
     *
     * This property stores the title to be displayed in the browser tab for the page.
     *
     * @var string|null
     */
    protected ?string $pageTitle = null;

    /**
     * The context instance.
     *
     * This is used to interact with the Magento framework context, including access
     * to request parameters, session, and other services.
     *
     * @var Context
     */
    private Context $context;

    /**
     * Page factory to generate page results.
     *
     * @var ResultFactory
     */
    private ResultFactory $resultFactory;

    /**
     * Constructor to initialize dependencies.
     *
     * @param Context $context
     */
    public function __construct(Context $context)
    {
        $this->resultFactory = $context->getResultFactory();
        $this->messageManager = $context->getMessageManager();
    }

    /**
     * Perform the controller action.
     *
     * This method delegates to the `handle()` method, which is required to be
     * implemented by the extending controller classes to handle their specific logic.
     *
     * @return ResultInterface
     */
    public function execute(): ResultInterface
    {
        return $this->handle();
    }

    /**
     * Render a page with the specified title and handler.
     *
     * This method creates a page result object using the page factory, sets
     * the title of the page, and optionally adds a layout handle. The page result
     * is then returned, allowing it to be rendered and sent to the client as the response.
     *
     * @param string|null $pageTitle   The title of the page to be displayed in the browser tab.
     * @param string|null $pageHandler The handler of the page to be rendered, optional.
     *
     * @return Page The page result object with the title and layout handle set.
     */
    protected function render(?string $pageTitle = null, ?string $pageHandler = null): Page
    {
        // Use the provided pageHandler and pageTitle if passed, otherwise fallback to class properties.
        $pageTitle ??= $this->pageTitle;
        $pageHandler ??= $this->pageHandler;

        // Create the page result using the page factory
        /** @var Page $resultPage */
        $resultPage = $this->resultFactory->create(ResultFactory::TYPE_PAGE);

        // Add the layout handle if provided
        if ($pageHandler) {
            // Loads the layout of $pageHandler file
            $resultPage->addHandle($pageHandler);
        }

        // Set the title of the page to the provided page title
        $resultPage->getConfig()->getTitle()->set($pageTitle);

        // Return the page result to be rendered
        return $resultPage;
    }

    /**
     * Handle the logic for the controller action.
     *
     * This method implements the specific logic for the controller action.
     * In this example, we are rendering a page and showing a success message.
     *
     * @return ResultInterface
     */
    abstract public function handle(): ResultInterface;

    /**
     * Return a JSON response with a structured payload, message, and HTTP status code.
     *
     * This method generates a JSON response with a status code, message, and additional data,
     * using the JsonFactory to create a structured and consistent response format.
     *
     * @param mixed $data The data to include in the JSON response.
     * @param string $message A message to accompany the response (default: "Success").
     * @param int $statusCode The HTTP status code to return (default: 200).
     * @param array $headers Optional headers to include in the response.
     *
     * @return Json The JSON result object.
     */
    protected function json(mixed $data, string $message = 'Success', int $statusCode = HttpStatusCodes::OK, array $headers = []): Json
    {
        // Initialize the response payload with the provided data, message, and status code
        $response = $this->response()
            ->setPayload($data)
            ->setMessage($message)
            ->setHeaders($headers)
            ->setStatusCode($statusCode);

        // Create the JSON response using the JsonFactory
        /** @var Json $resultJson */
        $resultJson = $this->resultFactory->create(ResultFactory::TYPE_JSON);

        // Set the structured data for the JSON response
        $resultJson->setData($response->toArray());

        // Set the HTTP status code
        $resultJson->setHttpResponseCode($statusCode);

        // Return the JSON response object
        return $resultJson;
    }

    /**
     * Redirect to a specific URL.
     *
     * This method creates a redirect response to the provided URL. It uses the
     * redirect factory to generate a redirect result, which can then be sent
     * back to the client to redirect them to the target URL.
     *
     * @param string $url The URL to redirect to.
     *
     * @return Redirect The redirect result.
     */
    protected function redirect(string $url): Redirect
    {
        // Create a new redirect response using the redirect factory
        /** @var Redirect $resultRedirect */
        $resultRedirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);

        // Set the target URL for the redirect
        $resultRedirect->setUrl($url);

        // Return the redirect result to be processed by Magento
        return $resultRedirect;
    }
}
