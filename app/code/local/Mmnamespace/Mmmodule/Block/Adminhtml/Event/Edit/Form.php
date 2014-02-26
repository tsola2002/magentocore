<?php
/**
 *
 * Package: magentocore
 * Filename: Form.php
 * Author: solidstunna101
 * Date: 26/02/14
 * Time: 14:34
 *
 */

class Mmnamespace_Mmmodule_Block_Adminhtml_Event_Edit_Form extends Mage_Adminhtml_Block_Widget_Form
{

    //this function will override the prepare form function add data forms/fieldset
    public function _prepareForm()
    {
        $form = new Varien_Data_Form(
            array('id' => 'edit_form', 'action' => $this->getData('action'), 'method' => 'post')
        );

        $fieldset = $form->addFieldset('base_fieldset', array('legend' => Mage::helper('mmmodule')->__('General Information'), 'class' => 'fieldset-wide'));

        $fieldset->addField('name', 'text', array(
            'name'      => 'name',
            'label'     => Mage::helper('mmmodule')->__('Event Name'),
            'title'     => Mage::helper('mmmodule')->__('Event Name'),
            'required'  => true
        ));

        $dateFormatIso = Mage::app()->getLocale()->getDateFormat(Mage_Core_Model_Locale::FORMAT_TYPE_SHORT);
        $fieldset->addField('start', 'date', array(
            'name'      => 'start',
            'format'    => $dateFormatIso,
            'image'     => $this->getSkinUrl('images/grid-cal.gif'),
            'label'     => Mage::helper('mmmodule')->__('Start Date'),
            'title'     => Mage::helper('mmmodule')->__('Start Date'),
            'required'  => true
        ));

        $fieldset->addField('end', 'date', array(
            'name'      => 'end',
            'format'    => $dateFormatIso,
            'image'     => $this->getSkinUrl('images/grid-cal.gif'),
            'label'     => Mage::helper('mmmodule')->__('End Date'),
            'title'     => Mage::helper('mmmodule')->__('End Date'),
            'required'  => true
        ));

        $form->setUseContainer(true);
        $this->setForm($form);
    }
}
