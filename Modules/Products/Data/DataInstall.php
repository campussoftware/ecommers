<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DataInstall
 *
 * @author ramesh
 */
class Modules_Products_Data_DataInstall 
{
    //put your code here
    function __construct() 
    {
        $this->setDataUp();
    }
    protected function setDataUp()
    {
        $nodesArray=array(
            "ProductModuleCreate"=>"ProductModuleCreate",
            "Product"=>"Product", 
			"ProductInventry"=>"ProductInventry",
			"ProductReleated"=>"ProductReleated",
			"ProductCrossSales"=>"ProductCrossSales",
			"ProductUpSales"=>"ProductUpSales",
			"ProductChildProducts"=>"ProductChildProducts", 			  			
            
        );
        foreach ($nodesArray as $node) 
        {
            $nodeClass="Modules_Products_Data_".$node;
            $rnode=new $nodeClass();
            $rnode->execute();
        } 
        
    }
}
