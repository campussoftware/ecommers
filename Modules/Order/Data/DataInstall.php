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
class Modules_Order_Data_DataInstall 
{
    //put your code here
    function __construct() 
    {
        $this->setDataUp();
    }
    protected function setDataUp()
    {
        $nodesArray=array(
            "OrderModuleCreate"=>"OrderModuleCreate",
            "Order"=>"Order",  
            "OrderItems"=>"OrderItems",
            "OrderPayment"=>"OrderPayment",
            "OrderAddress"=>"OrderAddress",  			  			
            
        );
        foreach ($nodesArray as $node) 
        {
            $nodeClass="Modules_Order_Data_".$node;
            $rnode=new $nodeClass();
            $rnode->execute();
        } 
        
    }
}
