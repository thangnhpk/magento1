<?php 
$setup = new Mage_Eav_Model_Entity_Setup('core_setup');

    $setup->addAttribute('sales_order', 'browser', array(
        'group'             => 'General',
        'label'             => 'Browser',
        'note'              => '',
        'type'              => 'string',    //backend_type
        'input'             => 'text', //frontend_input
        'frontend_class'    => '',
        'source'            => '',
        'backend'           => '',
        'frontend'          => '',
        'global'            => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_WEBSITE,
        'required'          => false,
        'visible_on_front'  => true,
        'apply_to'          => 'simple',
        'is_configurable'   => false,
        'used_in_product_listing'   => false,
        'sort_order'        => 5,
    ))
    ->addAttribute('sales_order', 'version', array(
        'group'             => 'General',
        'label'             => 'Version',
        'note'              => '',
        'type'              => 'string',    //backend_type
        'input'             => 'text', //frontend_input
        'frontend_class'    => '',
        'source'            => '',
        'backend'           => '',
        'frontend'          => '',
        'global'            => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_WEBSITE,
        'required'          => false,
        'visible_on_front'  => true,
        'apply_to'          => 'simple',
        'is_configurable'   => false,
        'used_in_product_listing'   => false,
        'sort_order'        => 5,
    ))
    ->addAttribute('sales_order', 'os_system', array(
        'group'             => 'General',
        'label'             => 'Browser',
        'note'              => '',
        'type'              => 'string',    //backend_type
        'input'             => 'text', //frontend_input
        'frontend_class'    => '',
        'source'            => '',
        'backend'           => '',
        'frontend'          => '',
        'global'            => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_WEBSITE,
        'required'          => false,
        'visible_on_front'  => true,
        'apply_to'          => 'simple',
        'is_configurable'   => false,
        'used_in_product_listing'   => false,
        'sort_order'        => 5,
    ));
?>