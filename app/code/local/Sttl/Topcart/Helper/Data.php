<?php
/**
 * SilverTouch Technologies Limited.
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the EULA
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.silvertouch.com/MagentoExtensions/LICENSE.txt
 *
 * @category   Sttl
 * @package    Sttl_Topcart
 * @copyright  Copyright (c) 2011 SilverTouch Technologies Limited. (http://www.silvertouch.com/MagentoExtensions)
 * @license    http://www.silvertouch.com/MagentoExtensions/LICENSE.txt
 */ 
class Sttl_Topcart_Helper_Data extends Mage_Core_Helper_Abstract {

    public function isEnable() {
        if ((bool) $this->isModuleOutputEnabled()) {
            return $this->_getUrl('checkout/cart');
        } else {
            return false;
        }
    }

}
