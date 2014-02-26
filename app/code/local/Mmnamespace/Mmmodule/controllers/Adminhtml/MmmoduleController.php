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

class Mmnamespace_Mmmodule_Adminhtml_MmmoduleController extends Mage_Adminhtml_Controller_Action
{
    public function indexAction()
    {
        //instiatiate model class
        $event = Mage::getModel('mmmodule/event');

        //set data on model & save it
        //create new row in database
        $event->setName('Test Event')->save();

        //present succes message to the user & increment id by 1
        Mage::getSingleton('adminhtml/session')->addSuccess(
            'Event Saved. ID = ' . $event->getId()
        );

        $this->loadLayout();

        return $this->renderLayout();
    }
}
