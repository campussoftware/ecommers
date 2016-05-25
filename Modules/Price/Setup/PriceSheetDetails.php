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
class Modules_Price_Setup_PriceSheetDetails
{
    //put your code here
    function execute()
    {
        $setup=new Core_DataBase_Setup();   
        $setup->setTable("ec_price_sheet_details");
        if(!$setup->tableExists($setup->getTable()))
        {
            $setup->setDisplayValue("Price Sheet Details");
            $setup->addColumnName(array(
                "name"=>"id",
                "displayValue"=>"Price Sheet Details Id",
                "prmiary"=>false,
                "key"=>"unique",
                "default"=>false,
                "type"=>"bigint",
                "size"=>"20",
                "prmiary"=>1,
                "auto_increment"=>1            
            ));
			$setup->addColumnName(array(
                "name"=>"ec_price_sheet_id",
                "displayValue"=>"Price Sheet Id",            
                "default"=>NULL,                
                "type"=>"int",
                "size"=>"11"          
            ));
			$setup->addColumnName(array(
                "name"=>"ec_product_group_id",
                "displayValue"=>"Product Group Id",            
                "default"=>NULL,                
                "type"=>"int",
                "size"=>"11"          
            ));
			
			$setup->addColumnName(array(
                "name"=>"quantity",
                "displayValue"=>"Quantity",            
                "default"=>NULL,                
                "type"=>"bigint",
                "size"=>"11"          
            ));
			$setup->addColumnName(array(
                "name"=>"price",
                "displayValue"=>"Price",            
                "default"=>NULL,                
                "type"=>"varchar",
                "size"=>"255"          
            ));
            $setup->addColumnName(array(
                "name"=>"from_date",
                "displayValue"=>"From Date",            
                "default"=>NULL,                
                "type"=>"datetime",   
            ));
			$setup->addColumnName(array(
                "name"=>"to_date",
                "displayValue"=>"To Date",            
                "default"=>NULL,                
                "type"=>"datetime",   
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
