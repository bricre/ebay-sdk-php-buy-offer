<?php

namespace Ebay\Buy\Offer\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The type the defines the fields for the proxy bid information.
 */
class ProxyBid extends AbstractModel
{
    /**
     * The maximum amount the buyer is willing to pay for the item.
     *
     * @var \Ebay\Buy\Offer\Model\Amount
     */
    public $maxAmount = null;

    /**
     * Identifier of a specific proxy bid.
     *
     * @var string
     */
    public $proxyBidId = null;
}
