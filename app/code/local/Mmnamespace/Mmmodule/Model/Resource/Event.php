<?php
/**
 *
 * Package: magentocore
 * Filename: Event.php
 * Author: solidstunna101
 * Date: 26/02/14
 * Time: 08:33
 *
 */

class Mmnamespace_Mmmodule_Model_Resource_Event extends Mage_Core_Model_Resource_Db_Abstract
{
    //initializes primary key in the table
    public function _construct()
    {
        $this->_init('mmmodule/event', 'event_id');
    }
}
