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
class Modules_Order_Setup_Order
{
    //put your code here
    function execute()
    {
        $setup=new Core_DataBase_Setup();   
        $setup->setTable("ec_order");
        if(!$setup->tableExists($setup->getTable()))
        {
            $setup->setDisplayValue("Orders");
            $setup->addColumnName(array(
                "name"=>"id",
                "displayValue"=>"Order Id",
                "key"=>"unique",
                "default"=>NULL,
                "type"=>"bigint",
                "size"=>"11",
                "prmiary"=>1,
                "auto_increment"=>1            
            ));
            $setup->addColumnName(array(
                "name"=>"customer_id",
                "displayValue"=>"Customer Id",                         
                "type"=>"int",
                "size"=>"11"          
            ));
			$setup->addColumnName(array(
                "name"=>"auto_increment_id",
                "displayValue"=>"Auto Increment Id",                         
                "type"=>"int",
                "size"=>"11"          
            ));
			$setup->addColumnName(array(
                "name"=>"quart_id",
                "displayValue"=>"Quart Id",                
                "type"=>"int",
                "size"=>"11"                
            ));   			
            $setup->addColumnName(array(
                "name"=>"amount",
                "displayValue"=>"Amount",                
                "type"=>"double",
                "size"=>"20,2"                
            ));   
            $setup->addColumnName(array(
                "name"=>"status",
                "displayValue"=>"Status",                
                "type"=>"varchar",
                "size"=>"255"                
            ));
            $setup->addColumnName(array(
                "name"=>"comments",
                "displayValue"=>"Comments",                
                "type"=>"text",
                //"size"=>"255"                
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
