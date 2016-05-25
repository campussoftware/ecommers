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
class Modules_Categories_Setup_Categories
{
    //put your code here
    function execute()
    {
        $setup=new Core_DataBase_Setup();   
        $setup->setTable("ec_categories");
        if(!$setup->tableExists($setup->getTable()))
        {
            $setup->setDisplayValue("Category Details");
            $setup->addColumnName(array(
                "name"=>"id",
                "displayValue"=>"Category Id",
                "prmiary"=>false,
                "key"=>"unique",
                "default"=>false,
                "type"=>"bigint",
                "size"=>"20",
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
                "name"=>"short_code",
                "displayValue"=>"Short_code",
                "prmiary"=>1,            
                "default"=>false,                
                "type"=>"varchar",
                "size"=>"255"          
            ));
			$setup->addColumnName(array(
                "name"=>"is_menu",
                "displayValue"=>"Is Menu",
				 "default"=>NULL,                
                "type"=>"tinyint",
                "size"=>"2"                
            )); 
			$setup->addColumnName(array(
                "name"=>"is_link",
                "displayValue"=>"Is Link",
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
