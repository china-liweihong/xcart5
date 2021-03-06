<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\CDev\GoSocial\View\FormField\Select;

/**
 * Facebook Like button layot styles selector
 */
class FBLayoutStyle extends \XLite\View\FormField\Select\Regular
{
    /**
     * getDefaultOptions
     *
     * @return array
     */
    protected function getDefaultOptions()
    {
        return array(
            'standard'     => 'standard',
            'button_count' => 'button',
            'box_count'    => 'box',
        );
    }
}
