<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SchemaInstall
 *
 * @author ramesh
 */
class Modules_Price_Setup_SchemaInstall
{
    //put your code here
    function __construct() 
    {
        $this->setUp();
    }
    protected function setUp()
    {
        $nodesArray=array(
           
            "PriceLevel"=>"PriceLevel",
			"PriceSheet"=>"PriceSheet",
            "PriceSheetDetails"=>"PriceSheetDetails",
            "PriceSheetAssigment"=>"PriceSheetAssigment",
            "PriceLevelAssigment"=>"PriceLevelAssigment",
        );
        foreach ($nodesArray as $node) 
        {
            $nodeClass="Modules_Price_Setup_".$node;
            $rnode=new $nodeClass();
            $rnode->execute();
        }               
    }
}
