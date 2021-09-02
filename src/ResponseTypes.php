<?php

namespace Ebay\Buy\Offer;

use OpenAPI\Runtime\ResponseTypes as AbstractResponseTypes;

class ResponseTypes extends AbstractResponseTypes
{
    public static $types = [
        'getBidding' => [
            '200.' => 'Ebay\\Buy\\Offer\\Model\\Bidding',
        ],
        'placeProxyBid' => [
            '200.' => 'Ebay\\Buy\\Offer\\Model\\PlaceProxyBidResponse',
        ],
    ];
}
