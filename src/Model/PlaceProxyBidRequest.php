<?php

namespace Ebay\Buy\Offer\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The type that defines the fields for placing a proxy bid.
 */
class PlaceProxyBidRequest extends AbstractModel
{
    /**
     * The amount of the proxy bid to be placed. This is the maximum amount the buyer
     * is willing to pay for the item. Note: Currency for the bid must be the currency
     * specified by the seller when listing the item. VAT (value added tax) does not
     * need to be added to the proxy bid amount even if VAT applies.
     *
     * @var \Ebay\Buy\Offer\Model\Amount
     */
    public $maxAmount = null;

    /**
     * Specifies whether the buyer wants to give their consent to bid on adult-only
     * items. For a buyer to bid on an adult-only item, you must collect their consent
     * using this field, and they must agree to the Terms of Use. For more information
     * about adult-only items on eBay, see Adult-Only items on eBay. Default: false.
     *
     * @var \Ebay\Buy\Offer\Model\UserConsent
     */
    public $userConsent = null;
}
