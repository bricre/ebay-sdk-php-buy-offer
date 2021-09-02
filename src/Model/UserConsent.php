<?php

namespace Ebay\Buy\Offer\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The type that defines the fields for collecting the buyers consent.
 */
class UserConsent extends AbstractModel
{
    /**
     * The type that defines the fields for buyer consent to bid on adult-only items.
     * This field must be included in the placeProxyBid request and set to true if the
     * buyer is bidding on an adult-only item. For more information about adult-only
     * items on eBay, see Adult-Only items on eBay.
     *
     * @var bool
     */
    public $adultOnlyItem = null;
}
