<?php
/**
 *
 * Package: magentocore
 * Filename: Event.php
 * Author: solidstunna101
 * Date: 26/02/14
 * Time: 08:30
 *
 */

class Mmnamespace_Mmmodule_Model_Event extends Mage_Core_Model_Abstract
{
    //this function initializes resources to be used
    public function _construct()
    {
        $this->_init('mmmodule/event');
    }
}