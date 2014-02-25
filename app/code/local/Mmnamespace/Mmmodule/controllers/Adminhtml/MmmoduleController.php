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
        $this->loadLayout();

        return $this->renderLayout();
    }
}
