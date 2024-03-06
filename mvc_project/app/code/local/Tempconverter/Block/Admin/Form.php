<?php

class Tempconverter_Block_Admin_converter extends Core_Block_Template
{
    public function __construct()
    {
        $this->setTemplate("tempconverter/admin/form.phtml");
    }
    public function getConverterForm()
    {
        $tempModel = Mage::getModel('tempconverter/converter');
        $id = $this->getRequest()->getParams('id');
        if ($id != '') {
            $tempModel->load($id);
        }
        return $tempModel;
    }
}