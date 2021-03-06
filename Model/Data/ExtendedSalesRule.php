<?php

/**
 * Acquia/CommerceManager/Model/Data/ExtendedSalesRule.php
 *
 * Acquia Commerce Manager Extended Sales / Cart Rule Data Model
 *
 * All rights reserved. No unauthorized distribution or reproduction.
 */

namespace Acquia\CommerceManager\Model\Data;

use Magento\SalesRule\Model\Data\Rule;

/**
 * ExtendedSalesRule
 *
 * Acquia Commerce Manager Extended Sales / Cart Rule Data Model
 */
class ExtendedSalesRule extends Rule implements \Acquia\CommerceManager\Api\Data\ExtendedSalesRuleInterface
{
    const KEY_DISCOUNT_DATA = 'product_discounts';

    /**
     * {@inheritDoc}
     */
    public function getProductDiscounts()
    {
        return ($this->_get(self::KEY_DISCOUNT_DATA));
    }

    /**
     * {@inheritDoc}
     */
    public function setProductDiscounts(array $discounts)
    {
        return ($this->setData(self::KEY_DISCOUNT_DATA, $discounts));
    }
}
