<?php
$installer = $this;
/* @var $installer Mage_Core_Model_Resource_Setup */

$installer->startSetup();

$installer->run("
	/*Table structure for table `agere_seo_block` */

    ALTER TABLE {$installer->getTable('agere_seo_block')}
    ADD COLUMN `category_id` int(10) unsigned NOT NULL AFTER `store_id`;
");

$installer->endSetup();