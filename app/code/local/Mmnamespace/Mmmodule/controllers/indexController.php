<?php
/**
 *
 * Package: magentocore
 * Filename: indexController.php
 * Author: solidstunna101
 * Date: 20/02/14
 * Time: 15:30
 *
 */

class Mmnamespace_Mmmodule_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        //loading layout
        $this->loadLayout();

        //rendering loaded layout
        return $this->renderLayout();
    }
}