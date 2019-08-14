<?php
    class Biztech_Customtoolbar_IndexController extends Mage_Core_Controller_Front_Action
    {
        public function indexAction()
        {
            $this->loadLayout();     
            $this->renderLayout();
        }
        public function fillattvaluesAction()
        {
            $att_code  = $this->getRequest()->getParam('att_code');
            $json = array();
            $att = Mage::getSingleton('eav/config')->getAttribute('catalog_product', $att_code);
            $options = $att->getSource()->getAllOptions();

            foreach($options as $option)
            {
                $json[] = array(
                    'lable' => $option['label'],
                    'value' => $option['value']
                );
            }
            $this->getResponse()->setBody(Zend_Json::encode($json));
        }

        
}