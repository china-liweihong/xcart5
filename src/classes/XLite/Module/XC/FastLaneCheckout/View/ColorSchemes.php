<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\XC\FastLaneCheckout\View;

/**
 * Style adds
 *
 * @Decorator\Depend ("XC\ColorSchemes")
 */
abstract class ColorSchemes extends \XLite\View\AView implements \XLite\Base\IDecorator
{
    /**
     * Return theme common files
     *
     * @return array
     */
    protected function getThemeFiles($adminZone = null)
    {
        $list = parent::getThemeFiles($adminZone);

        if (!(is_null($adminZone) ? \XLite::isAdminZone() : $adminZone)) {
            $list[static::RESOURCE_CSS][] = 'modules/XC/FastLaneCheckout/color_schemes/' . \XLite\Core\Layout::getInstance()->getLayoutColor() . '.less';
        }

        return $list;
    }
}
