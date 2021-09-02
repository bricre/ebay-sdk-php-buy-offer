<?php

namespace Ebay\Buy\Offer\Api;

use Ebay\Buy\Offer\Model\Bidding as BiddingModel;
use Ebay\Buy\Offer\Model\PlaceProxyBidRequest as PlaceProxyBidRequest;
use Ebay\Buy\Offer\Model\PlaceProxyBidResponse as PlaceProxyBidResponse;
use OpenAPI\Runtime\AbstractAPI as AbstractAPI;

class Bidding extends AbstractAPI
{
    /**
     * This method retrieves the bidding details that are specific to the buyer of the
     * specified auction. This must be an auction where the buyer has already placed a
     * bid. To retrieve the bidding information you use a user access token and pass in
     * the item ID of the auction. You can also retrieve general bidding details about
     * the auction, such as minimum bid price and the count of unique bidders, using
     * the Browse API getItem method. URLs for this method Production URL:
     * https://api.ebay.com/buy/offer/v1_beta/bidding/{item_id} Sandbox URL:
     * https://api.sandbox.ebay.com/buy/offer/v1_beta/bidding/{item_id} Restrictions
     * For a list of supported sites and other restrictions, see API Restrictions.
     *
     * @param string $item_id The eBay RESTful identifier of an item that you want the
     *                        buyer's bidding information. This ID is returned by the Browse and Feed API
     *                        methods. RESTful Item ID example: v1|2**********2|0 For more information about
     *                        item ID for RESTful APIs, see the Legacy API compatibility section of the Buy
     *                        APIs Overview. Restriction: The buyer must have placed a bid for this item.
     *
     * @return BiddingModel
     */
    public function get(string $item_id): BiddingModel
    {
        return $this->client->request('getBidding', 'GET', "bidding/{$item_id}",
            [
            ]
        );
    }

    /**
     * This method uses a user access token to place a proxy bid for the buyer on a
     * specific auction item. The item must offer AUCTION as one of the buyingOptions.
     * To place a bid, you pass in the item ID of the auction as a URI parameter and
     * the buyer's maximum bid amount (maxAmount ) in the payload. By placing a proxy
     * bid, the buyer is agreeing to purchase the item if they win the auction. After
     * this bid is placed, if someone else outbids the buyer a bid, eBay automatically
     * bids again for the buyer up to the amount of their maximum bid. When the bid
     * exceeds the buyer's maximum bid, eBay will notify them that they have been
     * outbid. To find auctions, you can use the Browse API to search for items and use
     * a filter to return only auction items. For example:
     * /buy/browse/v1/item_summary/search?q=iphone&amp;filter=buyingOptions:{AUCTION}
     * URLs for this method Production URL:
     * https://api.ebay.com/buy/offer/v1_beta/bidding/{item_id}/place_proxy_bid Sandbox
     * URL:
     * https://api.sandbox.ebay.com/buy/offer/v1_beta/bidding/{item_id}/place_proxy_bid
     * Restrictions For a list of supported sites and other restrictions, see API
     * Restrictions.
     *
     * @param string               $item_id The eBay RESTful identifier of an item you want to bid
     *                                      on. This ID is returned by the Browse and Feed API methods. RESTful Item ID
     *                                      Example: v1|2**********2|0 For more information about item ID for RESTful APIs,
     *                                      see the Legacy API compatibility section of the Buy APIs Overview.
     * @param PlaceProxyBidRequest $Model
     *
     * @return PlaceProxyBidResponse
     */
    public function placeProxyBid(string $item_id, PlaceProxyBidRequest $Model): PlaceProxyBidResponse
    {
        return $this->client->request('placeProxyBid', 'POST', "bidding/{$item_id}/place_proxy_bid",
            [
                'json' => $Model->getArrayCopy(),
            ]
        );
    }
}
