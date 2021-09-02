<?php

namespace Ebay\Buy\Offer\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The type that defines the fields for the place proxy bid response.
 */
class PlaceProxyBidResponse extends AbstractModel
{
    /**
     * Identifier of the proxy bid created by the request. This indicates that the bid
     * was placed and is not used for anything else.
     *
     * @var string
     */
    public $proxyBidId = null;
}
