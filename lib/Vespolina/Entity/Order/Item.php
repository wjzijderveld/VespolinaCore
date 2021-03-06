<?php
/**
 * (c) 2012 Vespolina Project http://www.vespolina-project.org
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Vespolina\Entity\Order;

use Vespolina\Exception\InvalidOptionsException;
use Vespolina\Entity\Order\ItemInterface;
use Vespolina\Entity\Pricing\PricingSetInterface;
use Vespolina\Entity\ProductInterface;

/**
 * Item is a class for items in an order
 *
 * @author Richard Shank <develop@zestic.com>
 */
class Item implements ItemInterface
{
    protected $name;
    protected $options;
    protected $parent;
    protected $pricingSet;
    protected $product;
    protected $quantity;
    protected $state;

    public function __construct(ProductInterface $product = null)
    {
        $this->product = $product;
    }

    /**
     * @inheritdoc
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @inheritdoc
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @inheritdoc
     */
    public function getOption($type)
    {
        if (isset($this->options[$type])) {
            return $this->options[$type];
        }

        return null;
    }

    /**
     * @inheritdoc
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @inheritdoc
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * @inheritdoc
     */
    public function setParent(OrderInterface $parent)
    {
        $this->parent = $parent;
    }

    /**
     * @inheritdoc
     */
    public function setPricing(PricingSetInterface $pricingSet)
    {
        $this->pricingSet = $pricingSet;
    }

    /**
     * @inheritdoc
     */
    public function getPricing()
    {
        return $this->pricingSet;
    }

    /**
     * @inheritdoc
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @inheritdoc
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @inheritdoc
     */
    public function getState()
    {
        return $this->state;
    }

    protected function clearOptions()
    {
        if (!$this->product->validateOptions(array())) {
            throw new InvalidOptionsException('This product requires options');
        }
        $this->options = array();
    }

    protected function setOptions(array $options)
    {
        if (!$this->product->validateOptions($options)) {
            throw new InvalidOptionsException('This combination of options is not valid for the product');
        }
        $this->options = $options;
    }

    protected function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    protected function setState($state)
    {
        $this->state = $state;
    }

    protected function setProduct($product)
    {
        $this->product = $product;
    }
}
