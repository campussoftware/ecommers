<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CoreAccess
 *
 * @author ramesh
 */
class Modules_Products_Setup_ProductCrossSales
{
    //put your code here
    function execute()
    {
        $setup=new Core_DataBase_Setup();   
        $setup->setTable("ec_product_cross_sales");
        if(!$setup->tableExists($setup->getTable()))
        {
            $setup->setDisplayValue("Product Cross Sales");
            $setup->addColumnName(array(
                "name"=>"id",
                "displayValue"=>"Product Cross Sles Id",
                "prmiary"=>false,
                "key"=>"unique",
                "default"=>false,
                "type"=>"bigint",
                "size"=>"20",
                "prmiary"=>1,
                "auto_increment"=>1            
            ));
			$setup->addColumnName(array(
                "name"=>"ec_product_group_id",
                "displayValue"=>"Product Group Id",            
                "default"=>NULL,                
                "type"=>"int",
                "size"=>"11"          
            ));
			$setup->addColumnName(array(
                "name"=>"ec_product_cross_sales_id",
                "displayValue"=>"Product Releated Id",            
                "default"=>NULL,                
                "type"=>"int",
                "size"=>"11"          
            ));  
            $setup->addColumnName(array(
                "name"=>"short_order",
                "displayValue"=>"Short Order",                
                "default"=>NULL,
				"type"=>"int", 
				"size"=>"11"           
            ));   
            $setup->addColumnName(array(
                "name"=>"createdby",
                "displayValue"=>"Created User Id",            
                "default"=>NULL,
                "type"=>"int",
                "size"=>"11"
            ));
            $setup->addColumnName(array(
                "name"=>"createdat",
                "displayValue"=>"Created Datetime",            
                "default"=>NULL,
                "type"=>"datetime"
            ));
            $setup->addColumnName(array(
                "name"=>"updatedby",
                "displayValue"=>"Updated User Id",            
                "default"=>NULL,
                "type"=>"int",
                "size"=>"11"
            ));
            $setup->addColumnName(array(
                "name"=>"updatedat",
                "displayValue"=>"Updated Datetime",            
                "default"=>NULL,
                "type"=>"datetime"
            ));
            $setup->create();
        }
    }
}
