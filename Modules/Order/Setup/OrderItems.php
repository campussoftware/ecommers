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
class Modules_Order_Setup_OrderItems
{
    //put your code here
    function execute()
    {
        $setup=new Core_DataBase_Setup();   
        $setup->setTable("ec_order_items");
        if(!$setup->tableExists($setup->getTable()))
        {
            $setup->setDisplayValue("Order Items");
            $setup->addColumnName(array(
                "name"=>"id",
                "displayValue"=>"Order Items Id",
                "prmiary"=>false,
                "key"=>"unique",
                "default"=>NULL,
                "type"=>"bigint",
                "size"=>"11",
                "prmiary"=>1,
                "auto_increment"=>1            
            ));
            $setup->addColumnName(array(
                "name"=>"order_id",
                "displayValue"=>"Order Id",            
                //"default"=>false,                
                "type"=>"int",
                "size"=>"11"          
            ));
            $setup->addColumnName(array(
                "name"=>"product_id",
                "displayValue"=>"Product Id",                
                "type"=>"int",
                "size"=>"11"                
            ));   
            $setup->addColumnName(array(
                "name"=>"price",
                "displayValue"=>"Price",                
                "type"=>"double",
                "size"=>"20,2"                
            ));
            $setup->addColumnName(array(
                "name"=>"discount",
                "displayValue"=>"Discount",                
                "type"=>"int",
                "size"=>"11"                
            ));   
            $setup->addColumnName(array(
                "name"=>"sale_price",
                "displayValue"=>"Sale Price",                
                "type"=>"double",
                "size"=>"20,2"                
            ));   
            $setup->addColumnName(array(
                "name"=>"quantity",
                "displayValue"=>"Quantity",                
                "type"=>"int",
                "size"=>"11"                
            ));   
            $setup->addColumnName(array(
                "name"=>"tax",
                "displayValue"=>"Tax",                
                "type"=>"double",
                "size"=>"20,2"                
            ));   
            $setup->addColumnName(array(
                "name"=>"base_total",
                "displayValue"=>"Base Total",                
                "type"=>"double",
                "size"=>"20,2"                
            ));
            $setup->addColumnName(array(
                "name"=>"sub_total",
                "displayValue"=>"Sub Total",                
                "type"=>"double",
                "size"=>"20,2"                
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
