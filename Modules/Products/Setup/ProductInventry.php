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
class Modules_Products_Setup_ProductInventry
{
    //put your code here
    function execute()
    {
        $setup=new Core_DataBase_Setup();   
        $setup->setTable("ec_product_inventry");
        if(!$setup->tableExists($setup->getTable()))
        {
            $setup->setDisplayValue("Product Inventry Details");
            $setup->addColumnName(array(
                "name"=>"id",
                "displayValue"=>"Product Inventry Id",
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
                "name"=>"ec_warehouse_id",
                "displayValue"=>"Warehouse Id",            
                "default"=>NULL,                
                "type"=>"int",
                "size"=>"11"          
            ));
            $setup->addColumnName(array(
                "name"=>"name",
                "displayValue"=>"Name",            
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
                "name"=>"stock_status",
                "displayValue"=>"Stock Status",
				 "default"=>NULL,                
                "type"=>"tinyint",
                "size"=>"2"                
            ));   
            $setup->addColumnName(array(
                "name"=>"sort_oder",
                "displayValue"=>"Sort order",
				 "default"=>NULL,                
                "type"=>"bigint",
                "size"=>"20"                
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
