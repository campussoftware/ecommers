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
class Modules_Customer_Data_CustomerModuleCreate
{
    //put your code here
    public function execute()
    {
        try
        {            
            $registerController=CoreClass::getController("core_registernode", "core_developmentsettings");
            $registerController->setNodeFileName("customer");
            $registerController->setNodeNameData("customer");
            $registerController->setDisplayValue("Customer Details");
            $registerController->setIsModule("1");
            $registerController->setRootModuleId("");
            $registerController->setModuleId("");
            $registerController->setModuleDisplayId("");
            $registerController->setSortValue("50");
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
