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
class Modules_Order_Setup_OrderAddress
{
    //put your code here
    function execute()
    {
        $setup=new Core_DataBase_Setup();   
        $setup->setTable("ec_order_address");
        if(!$setup->tableExists($setup->getTable()))
        {
            $setup->setDisplayValue("Order Address Details");
            $setup->addColumnName(array(
                "name"=>"id",
                "displayValue"=>"Order Address Id",
                "key"=>"unique",
                "default"=>NULL,
                "type"=>"bigint",
                "size"=>"11",
                "prmiary"=>1,
                "auto_increment"=>1            
            ));
            $setup->addColumnName(array(
                "name"=>"first_name",
                "displayValue"=>"First Name",            
                "default"=>false,                
                "type"=>"varchar",
                "size"=>"255"          
            ));
            $setup->addColumnName(array(
                "name"=>"last_name",
                "displayValue"=>" Last Name",                
                "type"=>"varchar",
                "size"=>"255"                
            ));   
            $setup->addColumnName(array(
                "name"=>"middel_name",
                "displayValue"=>"Middel Name",                
                "type"=>"varchar",
                "size"=>"255"                
            ));
            $setup->addColumnName(array(
                "name"=>"email",
                "displayValue"=>"Email Address",                
                "type"=>"varchar",
                "size"=>"255"                
            ));   
            $setup->addColumnName(array(
                "name"=>"phone_number",
                "displayValue"=>"Phone Number",                
                "type"=>"varchar",
                "size"=>"255"                
            ));
			$setup->addColumnName(array(
                "name"=>"ec_customer_id",
                "displayValue"=>"Customer Id",                
                "type"=>"int",
                "size"=>"11"                
            ));
            $setup->addColumnName(array(
                "name"=>"contry",
                "displayValue"=>"Contry",                
                "type"=>"varchar",
                "size"=>"255"                
            ));   			
            $setup->addColumnName(array(
                "name"=>"state",
                "displayValue"=>"State",                
                "type"=>"varchar",
                "size"=>"255"                
            ));   			
            $setup->addColumnName(array(
                "name"=>"city",
                "displayValue"=>"City",                
                "type"=>"varchar",
                "size"=>"255"                
            ));   			
            $setup->addColumnName(array(
                "name"=>"street",
                "displayValue"=>"Street",                
                "type"=>"varchar",
                "size"=>"255"                
            ));
            $setup->addColumnName(array(
                "name"=>"pin_code",
                "displayValue"=>"Pin Code",                
                "type"=>"int",
                "size"=>"11"                
            ));
			$setup->addColumnName(array(
                "name"=>"type",
                "displayValue"=>"Type of Billing",                
                "type"=>"varchar",
                "size"=>"255"                
            ));
			$setup->addColumnName(array(
                "name"=>"address_id",
                "displayValue"=>"Address Id",                
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
