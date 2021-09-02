<?php

namespace Ebay\Buy\Offer\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The type the defines the field for the auction details.
 */
class Bidding extends AbstractModel
{
    /**
     * The date the auction will end.
     *
     * @var string
     */
    public $auctionEndDate = null;

    /**
     * An enumeration value that represents the current state of the auction, such as
     * ACTIVE or ENDED. If this value is ENDED and the value of highBidder is true,
     * this indicates the buyer has won the auction. For implementation help, refer to
     * <a
     * href='https://developer.ebay.com/api-docs/buy/offer/types/api:AuctionStatusEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $auctionStatus = null;

    /**
     * The number of proxy bids that have been placed for the auction.
     *
     * @var int
     */
    public $bidCount = null;

    /**
     * The amount of the highest bid, which is the current price of the item.
     *
     * @var \Ebay\Buy\Offer\Model\Amount
     */
    public $currentPrice = null;

    /**
     * The buyer's proxy bid, which is the maxAmount specified in the request.
     *
     * @var \Ebay\Buy\Offer\Model\ProxyBid
     */
    public $currentProxyBid = null;

    /**
     * Indicates if the buyer is the highest bidder. If the value is false, this
     * indicates that either the buyer has not bid on this item or has been out-bid. If
     * this value is true, this indicates the buyer is winning the auction and if the
     * value of auctionStatus is ENDED, this indicates the buyer has won the auction.
     *
     * @var bool
     */
    public $highBidder = null;

    /**
     * The eBay RESTful identifier of an item being bid on, which was submitted in the
     * request.
     *
     * @var string
     */
    public $itemId = null;

    /**
     * This indicates if the reserve price of the item has been met. A reserve price is
     * set by the seller and is the minimum amount the seller is willing to sell the
     * item for. If the highest bid is not equal to or higher than the reserve price
     * when the auction ends, the listing ends and the item is not sold. Note: This is
     * returned only for auctions that have a reserve price.
     *
     * @var bool
     */
    public $reservePriceMet = null;

    /**
     * The suggested bid amount for the next bid. Note: These are generated suggestions
     * and do not guarantee the buyer will win the bid. This means these suggestions do
     * not take into account the max bid amount of other bidders. The buyer can be
     * outbid even if they submit the highest suggested bid.
     *
     * @var \Ebay\Buy\Offer\Model\Amount[]
     */
    public $suggestedBidAmounts = null;
}
