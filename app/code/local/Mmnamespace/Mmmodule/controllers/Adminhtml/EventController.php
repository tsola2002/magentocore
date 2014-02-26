<?php
/**
 *
 * Package: magentocore
 * Filename: MmmoduleController.php
 * Author: solidstunna101
 * Date: 25/02/14
 * Time: 18:40
 *
 */

class Mmnamespace_Mmmodule_Adminhtml_EventController extends Mage_Adminhtml_Controller_Action
{
    //this function adds block content to main layout
    public function indexAction()
    {
        $this->loadLayout();
        $this->_setActiveMenu('mmmodule/events');

        $this->_addContent(
            $this->getLayout()->createBlock('mmmodule/adminhtml_event_edit')
        );

        return $this->renderLayout();
    }
}
