<?php
/**
 *
 * Package: magentocore
 * Filename: Observer.php
 * Author: solidstunna101
 * Date: 26/02/14
 * Time: 10:29
 *
 */

class Mmnamespace_Mmmodule_Model_Observer {

    public function controllerActionPredispatch($observer){
        //die('running observer');

        //print to log file when an event happens
        $controllerAction = $observer->getEvent()->getControllerAction();

        Mage::log($controllerAction->getRequest()->getParams());
    }
}