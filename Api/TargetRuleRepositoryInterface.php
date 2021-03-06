<?php

/**
 * Acquia/CommerceManager/Api/TargetRuleRepositoryInterface.php
 *
 * Acquia Commerce Manager Target / Related Product Repository Interface
 *
 * All rights reserved. No unauthorized distribution or reproduction.
 */

namespace Acquia\CommerceManager\Api;

use Acquia\CommerceManager\Api\Data\TargetRuleProductsInterface;

/**
 * TargetRuleRepositoryInterface
 *
 * Acquia Commerce Manager Target / Related Product Repository Interface
 *
 * @api
 */
interface TargetRuleRepositoryInterface
{
    /**
     * getProductsByType
     *
     * Get a list of related products by target rule type for
     * a specific product SKU.
     *
     * @param string $sku Product SKU
     * @param string $type Link Type: ['related', 'upsell', 'crosssell', 'all']
     *
     * @return \Acquia\CommerceManager\Api\Data\TargetRuleProductsInterface $products
     */
    public function getProductsByType($sku, $type);

    /**
     * getTargetRulesEnabled
     *
     * Get an enabled status of the target rules module / API.
     *
     * The API / Target Rules module requires Magento EE.
     *
     * @return bool $enabled
     */
    public function getTargetRulesEnabled();
}
