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
class Modules_Products_Setup_Product
{
    //put your code here
    function execute()
    {
        $setup=new Core_DataBase_Setup();   
        $setup->setTable("ec_product");
        if(!$setup->tableExists($setup->getTable()))
        {
            $setup->setDisplayValue("Product  Details");
            $setup->addColumnName(array(
                "name"=>"id",
                "displayValue"=>"Product  Id",
                "prmiary"=>false,
                "key"=>"unique",
                "default"=>false,
                "type"=>"bigint",
                "size"=>"20",
                "prmiary"=>1,
                "auto_increment"=>1            
            ));
            $setup->addColumnName(array(
                "name"=>"name",
                "displayValue"=>"Name",            
                 "default"=>NULL,                
                "type"=>"varchar",
                "size"=>"255"          
            ));
            $setup->addColumnName(array(
                "name"=>"sku",
                "displayValue"=>"SKU", 
				 "default"=>NULL,               
                "type"=>"varchar",
                "size"=>"255"                
            ));  
			 $setup->addColumnName(array(
                "name"=>"price",
                "displayValue"=>"Price",
				 "default"=>NULL,                
                "type"=>"varchar",
                "size"=>"255"                
            )); 
			 $setup->addColumnName(array(
                "name"=>"quantity",
                "displayValue"=>"Quantity",
				"default"=>NULL,                
                "type"=>"int",
                "size"=>"11"                
            )); 
			 $setup->addColumnName(array(
                "name"=>"status",
                "displayValue"=>"Status",
				"default"=>NULL,                
                "type"=>"varchar",
                "size"=>"255"                
            )); 
			 $setup->addColumnName(array(
                "name"=>"short_description",
                "displayValue"=>"Short Description",
				"default"=>NULL,                
                "type"=>"text",             
            ));  
            $setup->addColumnName(array(
                "name"=>"long_description",
                "displayValue"=>"Long Description",                
                "default"=>NULL,
				"type"=>"longtext",         
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
