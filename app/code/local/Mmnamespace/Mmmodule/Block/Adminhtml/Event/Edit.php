<?php
/**
 *
 * Package: magentocore
 * Filename: Edit.php
 * Author: solidstunna101
 * Date: 26/02/14
 * Time: 14:31
 *
 */

class Mmnamespace_Mmmodule_Block_Adminhtml_Event_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
    public function __construct()
    {
        //creating components required to render the form
        $this->_objectId = 'event_id';
        $this->_blockGroup = 'mmmodule';
        $this->_controller = 'adminhtml_event';

        parent::__construct();
    }

    /**
     * Get edit form container header text
     *
     * @return string
     */
    public function getHeaderText()
    {
        return Mage::helper('mmmodule')->__('New Event');
    }

    public function getSaveUrl()
    {
        return $this->getUrl('*/event/save');
    }
}
