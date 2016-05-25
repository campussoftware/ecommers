<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CoreActionType
 *
 * @author ramesh
 */
class Modules_Order_Data_OrderModuleCreate
{
    //put your code here
    public function execute()
    {
        try
        {            
            $registerController=CoreClass::getController("core_registernode", "core_developmentsettings");
            $registerController->setNodeFileName("order");
            $registerController->setNodeNameData("order");
            $registerController->setDisplayValue("Order Details");
            $registerController->setIsModule("1");
            $registerController->setRootModuleId("");
            $registerController->setModuleId("");
            $registerController->setModuleDisplayId("");
            $registerController->setSortValue("100");
            $registerController->setIcon("");
            $registerController->setMenu("1");
            $registerController->setIsNotification("0");
            $registerController->dataSave();
        }
        catch (Exception $ex)
        {
            Core::Log($ex->getMessage(),"installdataexception.log");
        }
    }
}
