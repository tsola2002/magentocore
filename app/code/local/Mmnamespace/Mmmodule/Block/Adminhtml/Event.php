<?php
/**
 *
 * Package: magentocore
 * Filename: Event.php
 * Author: solidstunna101
 * Date: 27/02/14
 * Time: 08:14
 *
 */

class Mmnamespace_Mmmodule_Block_Adminhtml_Event extends Mage_Adminhtml_Block_Widget_Grid_Container {


    public function __construct(){

        $this->_blockGroup = 'mmmodule';
        $this->_controller = 'adminhtml_event';
        $this->_headerText = Mage::helper('mmmodule')->__('Events');
        $this->_addButtonLabel = Mage::helper('mmmodule')->__('Add New Event');
        parent::__construct();
    }
}