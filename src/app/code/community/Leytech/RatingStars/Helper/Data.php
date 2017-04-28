<?php
/**
 * @package    Leytech_RatingStars
 * @author     Chris Nolan (chris@leytech.co.uk)
 * @copyright  Copyright (c) 2017 Leytech
 * @license    https://opensource.org/licenses/MIT  The MIT License  (MIT)
 */

class Leytech_RatingStars_Helper_Data extends Mage_Core_Helper_Data
{

    const XML_PATH_SETTINGS_ENABLED = 'leytech_ratingstars/settings/enabled';
    const XML_PATH_SETTINGS_INCLUDE_JQUERY = 'leytech_ratingstars/settings/include_jquery';

    public function isEnabled()
    {
        return Mage::getStoreConfig(self::XML_PATH_SETTINGS_ENABLED);
    }

    public function getIncludeJquery()
    {
        return Mage::getStoreConfig(self::XML_PATH_SETTINGS_INCLUDE_JQUERY);
    }

    public function switchTemplate()
    {
        if(!$this->isEnabled()) {
            return 'review/form.phtml';
        }
        return 'leytech/ratingstars/form.phtml';
    }

}