<?php

$installer = $this;

$installer->startSetup();

$this->_conn->addColumn($this->getTable('catalog_eav_attribute'), 'used_for_filter_by', 'smallint');


$installer->endSetup(); 