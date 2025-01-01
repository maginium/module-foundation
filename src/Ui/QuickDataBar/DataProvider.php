<?php

declare(strict_types=1);

namespace Maginium\Foundation\Ui\QuickDataBar;

use Magento\Framework\App\ResourceConnection;
use Magento\Framework\DB\Adapter\AdapterInterface;
use Magento\Framework\Pricing\PriceCurrencyInterface;

/**
 * Class DataProvider.
 *
 * Provides methods to interact with the database connection and format monetary values.
 * This class is used to fetch a database connection and format amounts using the Magento currency format.
 */
class DataProvider
{
    /**
     * @var ResourceConnection The resource connection object, used to interact with the database.
     */
    private ResourceConnection $resource;

    /**
     * @var PriceCurrencyInterface The currency formatter interface used to format amounts as currency.
     */
    private PriceCurrencyInterface $currency;

    /**
     * DataProvider constructor.
     *
     * Initializes the DataProvider with the required dependencies.
     *
     * @param  ResourceConnection  $resource  The resource connection object.
     * @param  PriceCurrencyInterface  $currency  The currency formatting interface.
     */
    public function __construct(
        ResourceConnection $resource,
        PriceCurrencyInterface $currency,
    ) {
        $this->resource = $resource;
        $this->currency = $currency;
    }

    /**
     * Returns the database connection.
     *
     * This method retrieves the connection instance from the resource object.
     *
     * @return AdapterInterface The database connection instance.
     */
    public function getConnection(): AdapterInterface
    {
        return $this->resource->getConnection();
    }

    /**
     * Formats a given amount into the appropriate currency format.
     *
     * This method takes a float value representing an amount of money and formats it according
     * to the current currency settings, such as decimal places and currency symbol.
     *
     * @param  float  $amount  The amount to format, represented as a float.
     *
     * @return string The formatted amount as a string, including the currency symbol and formatting.
     */
    public function format(float $amount): string
    {
        return (string)$this->currency->format($amount, false);
    }
}
