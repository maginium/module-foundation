<?php

declare(strict_types=1);

namespace Maginium\Foundation\Abstracts;

use Magento\Backend\App\Action\Context;
use Magento\Backend\Model\View\Result\Page;
use Magento\Backend\Model\View\Result\Redirect;
use Magento\Framework\App\ActionInterface;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\AuthorizationInterface;
use Magento\Framework\UrlInterface;
use Magento\Framework\View\Result\LayoutFactory;
use Magento\Framework\View\Result\PageFactory;
use Magento\Theme\Block\Html\Breadcrumbs;
use Maginium\Foundation\Concerns\Auth\HasAuthorization;
use Maginium\Foundation\Concerns\InteractsWithMessages;
use Maginium\Framework\Actions\Concerns\AsController;
use Maginium\Framework\Support\Collection;

/**
 * Abstract base controller for handling admin page actions.
 *
 * This class provides common functionality for all admin controllers, such as
 * setting page titles, active menu items, and generating page instances.
 * It also defines the abstract `handle()` method which must be implemented by
 * subclasses to provide specific logic for each controller.
 */
abstract class AdminController implements ActionInterface
{
    // Use the `AsController` trait to handle controller-related behaviors.
    use AsController;
    // Use the `HasAuthorization` trait to handle authorization.
    use HasAuthorization;
    // Use the `InteractsWithMessages` trait to manage and interact with messages.
    use InteractsWithMessages;

    /**
     * Default title of the page.
     *
     * @var string
     */
    protected string $title = 'Page Title';

    /**
     * Active menu identifier for the admin sidebar navigation.
     *
     * @var string
     */
    protected string $activeMenu = '';

    /**
     * Breadcrumb data for the current page.
     *
     * @var Collection
     */
    protected Collection $breadcrumbs;

    /**
     * Context instance providing access to the Magento backend context.
     *
     * @var Context
     */
    private Context $context;

    /**
     * Page result instance that contains the generated page.
     *
     * @var Page
     */
    private Page $page;

    /**
     * Page factory to generate page results.
     *
     * @var PageFactory
     */
    private PageFactory $pageFactory;

    /**
     * Interface for handling authorization checks.
     *
     * @var AuthorizationInterface
     */
    private AuthorizationInterface $authorization;

    /**
     * Factory for generating layout results.
     *
     * @var LayoutFactory
     */
    private LayoutFactory $resultLayoutFactory;

    /**
     * Interface for generating and manipulating URLs.
     *
     * @var UrlInterface
     */
    private UrlInterface $url;

    /**
     * Constructor for the AdminController.
     *
     * Initializes the context and page factory, and passes them to the parent
     * controller constructor.
     *
     * @param Context $context The context instance containing backend request data.
     */
    public function __construct(
        Context $context,
        LayoutFactory $resultLayoutFactory,
    ) {
        $this->context = $context;
        $this->resultLayoutFactory = $resultLayoutFactory;

        // Context Dependencies
        $this->url = $context->getUrl();
        $this->pageFactory = $context->getResultFactory();
        $this->authorization = $context->getAuthorization();
        $this->messageManager = $context->getMessageManager();
    }

    /**
     * Executes the controller action.
     *
     * This method is invoked when the controller action is called. It handles the
     * basic flow of page creation, title and menu setting, and delegates to
     * the specific `handle` method which must be implemented by child classes.
     *
     * @return Page|Redirect|ResponseInterface The generated page result object.
     */
    public function execute(): Page|Redirect|ResponseInterface
    {
        // Create the page instance
        $this->createPage();

        // Set the active menu for the page
        $this->setActiveMenu();

        // Set the page title
        $this->setPageTitle();

        // Set breadcrumbs
        $this->setBreadcrumbs();

        // Delegate the remaining handling logic to the child class
        return $this->handle();
    }

    /**
     * Handles the controller action.
     *
     * This is an abstract method that must be implemented by subclasses.
     * It provides the specific logic for each controller action.
     *
     * @return Page|Redirect|ResponseInterface The result of the specific controller action (usually a Page object).
     */
    abstract public function handle(): Page|Redirect|ResponseInterface;

    /**
     * Sets the title of the page.
     *
     * This method sets the title for the current page. If no title is provided,
     * the default title defined in the `$title` property will be used. The title
     * is prepended to the page configuration.
     *
     * @param string|null $title The title of the page to set (optional).
     *                            If not provided, the default `$title` is used.
     *
     * @return void
     */
    protected function setPageTitle(?string $title = null): void
    {
        // Use the provided title or fall back to the default title
        $this->page->getConfig()->getTitle()->prepend(__($title ?: $this->title));
    }

    /**
     * Sets the active menu for the admin page.
     *
     * This method sets the active menu item in the admin sidebar. If no menu
     * identifier is provided, the default menu defined in `$activeMenu` is used.
     *
     * @param string|null $menu The menu identifier to set as active (optional).
     *                           If not provided, the default `$activeMenu` is used.
     *
     * @return void
     */
    protected function setActiveMenu(?string $menu = null): void
    {
        // Use the provided menu or fall back to the default active menu
        $this->page->setActiveMenu($menu ?: $this->activeMenu);
    }

    /**
     * Sets breadcrumbs for the current page.
     *
     * This method utilizes the breadcrumbs property to add each breadcrumb to the layout.
     * If the optional flag is set to true, it adds a "Home" breadcrumb as the first item.
     * Each breadcrumb is added with a label, title, and an optional link.
     *
     * @param bool $includeHome Flag to determine if "Home" should be added as the first breadcrumb. Default is false.
     *
     * @return void
     */
    protected function setBreadcrumbs(bool $includeHome = true): void
    {
        // Retrieve the breadcrumbs block from the layout
        $layout = $this->resultLayoutFactory->create();

        /** @var Breadcrumbs $breadcrumb */
        $breadcrumb = $layout->getLayout()->getBlock('breadcrumbs');

        // If the includeHome is set to true, add a "Home" breadcrumb at the start
        if ($includeHome) {
            $breadcrumb->addCrumb('home', [
                'label' => __('Home'),
                'title' => __('Home'),
                'link' => $this->url->getUrl('adminhtml/dashboard'), // Link to the admin dashboard
            ]);
        }

        // Check if there are any breadcrumbs defined in the $this->breadcrumbs property
        $this->breadcrumbs->each(function($crumb, $key) use ($breadcrumb) {
            // Add each breadcrumb to the block
            $breadcrumb->addCrumb($key, [
                'label' => __($crumb['label']), // Set the label for the breadcrumb
                'title' => __($crumb['title']), // Set the title (used for hover-over tooltips)
                'link' => $crumb['link'] ?? null, // Set the link if provided, otherwise null
            ]);
        });
    }

    /**
     * Handles redirects after a successful action.
     * This method can be customized to redirect to a custom page or action.
     *
     * @param string $url The URL to redirect to.
     *
     * @return ResponseInterface
     */
    protected function redirect(string $url): ResponseInterface
    {
        return $this->_redirect($url);
    }

    /**
     * Creates the page object.
     *
     * This method uses the `PageFactory` to create an instance of the `Page`
     * object, which represents the content and configuration of the admin page.
     *
     * @return void
     */
    private function createPage(): void
    {
        // Create the page using the PageFactory
        $this->page = $this->pageFactory->create();
    }
}
