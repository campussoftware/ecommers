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
class Modules_Order_Setup_OrderPayment
{
    //put your code here
    function execute()
    {
        $setup=new Core_DataBase_Setup();   
        $setup->setTable("ec_order_payment");
        if(!$setup->tableExists($setup->getTable()))
        {
            $setup->setDisplayValue("Order Payment Details");
            $setup->addColumnName(array(
                "name"=>"id",
                "displayValue"=>"Order Payment Id",
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
                "default"=>false,                
                "type"=>"varchar",
                "size"=>"255"          
            ));
            $setup->addColumnName(array(
                "name"=>"payment_methode",
                "displayValue"=>"Payment Methode",                
                "type"=>"varchar",
                "size"=>"255"                
            ));   
            $setup->addColumnName(array(
                "name"=>"payment_transaction",
                "displayValue"=>"Payment Transaction",                
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
