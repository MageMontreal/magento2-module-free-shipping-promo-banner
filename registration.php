<?php
/**
 * @author    Magemontreal <support@magemontreal.com>
 * @copyright 2021 Magemontreal. All Rights Reserved.
 */
declare(strict_types=1);

use Magento\Framework\Component\ComponentRegistrar;

ComponentRegistrar::register(
    ComponentRegistrar::MODULE,
    'MageMontreal_FreeShippingPromo',
    __DIR__
);
