<?php
/**
 * @by SwiftOtter, Inc., 2/2/17
 * @website https://swiftotter.com
 **/

namespace SwiftOtter\ShippingSurcharge\Api\Block\Product;

interface ShippingSurchargeAmountInterface
{
    public function hasSurcharge(): bool;
    public function getSurcharge(): string;
    public function getSurchargeLabel(): string;
    public function getSurchargeNote(): string;
}