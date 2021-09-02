<?php

namespace Ebay\Buy\Offer\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The type that defines the fields for a monetary value and its currency.
 */
class Amount extends AbstractModel
{
    /**
     * The three-letter ISO 4217 code representing the currency of the amount in the
     * value field. For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/buy/offer/types/bas:CurrencyCodeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $currency = null;

    /**
     * The monetary amount.
     *
     * @var string
     */
    public $value = null;
}
