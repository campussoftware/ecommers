<?php
	class Modules_Customer_Controllers_Frontend_EcCustomer extends Core_Controllers_Frontend_IndexController
	{
		function registerAction()
		{
			$requestedData=$this->_requestedData;
			$node=CoreClass::getController($this->_nodeName);
			$node->setNodeName($this->_nodeName);
			$data=array();
			$namelist=Core::convertStringToArray(Core::getValueFromArray($requestedData,"login")," ");
			$data['first_name']=Core::getValueFromArray($namelist,0);
			$data['middel_name']=Core::getValueFromArray($namelist,1);
			$data['last_name']=Core::getValueFromArray($namelist,2);
			$data['email']=Core::getValueFromArray($requestedData,"reg");
			$data['password']=Core::getValueFromArray($requestedData,"password");
			$node->setMethodType("POST");
			$node->setScriptAction();			
			$node->setRequestedData($data);
			$result=$node->addAction();
			echo "<pre>";
				print_r($result);
			echo "</pre>";
			echo "ramesh";
		}
	}
?>