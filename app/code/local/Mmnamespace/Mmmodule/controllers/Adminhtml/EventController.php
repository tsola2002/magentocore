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

        /*$this->_addContent(
            $this->getLayout()->createBlock('mmmodule/adminhtml_event_edit')
 );*/

        $this->_addContent(
            $this->getLayout()->createBlock('mmmodule/adminhtml_event')
 );

        return $this->renderLayout();
    }

    public function saveAction()
    {
        //gathering form field parameters from the url
        $eventId = $this->getRequest()->getParam('event_id');
        $eventModel = Mage::getModel('mmmodule/event')->load($eventId);

        //save event to database
        if ( $data = $this->getRequest()->getPost() ) {
            try {
                $eventModel->addData($data)->save();
                Mage::getSingleton('adminhtml/session')->addSuccess(
                    $this->__("Your event has been saved!")
                );
            } catch ( Exception $e ) {
                Mage::getSingleton('adminhtml/session')->addError($e->getMessage());
            }
        }

        $this->_redirect('*/*/index');
    }
}
