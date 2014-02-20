<?php
/**
 *
 * Package: magentocore
 * Filename: HelloController.php
 * Author: solidstunna101
 * Date: 20/02/14
 * Time: 15:30
 *
 */

class Mmnamespace_Mmmodule_HelloController extends Mage_Core_Controller_Front_Action
{
    public function worldAction()
    {
        echo 'Hello, World from world action controller!';
    }
}