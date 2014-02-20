<?php
/**
 * app/code/local/MasteringMagento/Block/Welcome.php
 *
 *
 *
 *
 *
 * @category  Mmnamespace
 * @package   Mmmodule
 *
 */
class Mmnamespace_Mmmodule_Block_Welcome extends Mage_Core_Block_Template
{
    public function __construct()
    {
        parent::__construct();
        //setting the template that will be used for the block
        $this->setTemplate('mmmodule/welcome.phtml');
    }
}
