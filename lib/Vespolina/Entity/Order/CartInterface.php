<?php
/**
 * (c) 2011-2012 Vespolina Project http://www.vespolina-project.org
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Vespolina\Entity\Order;

/**
 * CartInterface is a generic interface for shopping cart
 *
 * @author Daniel Kucharski <daniel@xerias.be>
 * @author Richard Shank <develop@zestic.com>
 */
interface CartInterface extends OrderInterface
{
    /**
     * Return the time this cart expires
     *
     * @return
     */
    function getExpiresAt();

    /**
     * Set the time that this cart expires
     *
     * @param DateTime $expiresAt
     */
    function setExpiresAt(\DateTime $expiresAt);

    /**
     * Get a follow up entity for the cart.
     * Eg.  this could be the sales order
     *
     * @return
     */
    function getFollowUp();

    /**
     * Set the follow up
     *
     * @return
     */
    function setFollowUp($followUp);

    /**
     * Return the payment instruction the cart
     *
     * @return payment instruction
     */
    function getPaymentInstruction();

    /**
     * Set a payment instruction for the cart
     *
     * @param $paymentInstruction
     */
    function setPaymentInstruction($paymentInstruction);

    /**
     * Return the pricing information for the cart
     *
     * @return mixed
     */
    function getPricing();

    /**
     * Set pricing information
     *
     * @abstract
     * @param $pricing
     */
    function setPricing($pricing);
    
    /**
     * Return the cart creation date
     *
     * @return
     */
    function getCreatedAt();

    /**
     * Set the cart creation date
     *
     * @param DateTime $createdAt
     */
    function setCreatedAt(\DateTime $createdAt);
    
    /**
     * Return the cart update date
     *
     * @return
     */
    function getUpdatedAt();

    /**
     * Set the cart update date
     *
     * @param DateTime $updatedAt
     */
    function setUpdatedAt(\DateTime $updatedAt);
}