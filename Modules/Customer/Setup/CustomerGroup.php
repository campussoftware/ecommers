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
class Modules_Customer_Setup_CustomerGroup
{
    //put your code here
    function execute()
    {
        $setup=new Core_DataBase_Setup();   
        $setup->setTable("ec_customer_group");
        if(!$setup->tableExists($setup->getTable()))
        {
            $setup->setDisplayValue("Customer Group Details");
            $setup->addColumnName(array(
                "name"=>"id",
                "displayValue"=>"Customer Group Id",
                "prmiary"=>false,
                "key"=>"unique",
                "default"=>NULL,
                "type"=>"bigint",
                "size"=>"11",
                "prmiary"=>1,
                "auto_increment"=>1            
            ));
            $setup->addColumnName(array(
                "name"=>"name",
                "displayValue"=>"Name",            
                "default"=>false,                
                "type"=>"varchar",
                "size"=>"255"          
            ));
            $setup->addColumnName(array(
                "name"=>"code",
                "displayValue"=>" Code",                
                "type"=>"varchar",
                "size"=>"255"                
            ));   
            $setup->addColumnName(array(
                "name"=>"sort_oder",
                "displayValue"=>"sort order",                
                "type"=>"varchar",
                "size"=>"255"                
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
