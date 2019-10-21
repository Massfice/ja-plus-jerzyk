<?php

namespace app\controllers;

use core\Message;
use core\App;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use core\SessionUtils;
use app\libs\proccesses\CalculateProccess;

class CalculateController extends Controller {
    
     public function action_calculate() {
    
		$proccess = new CalculateProccess();
		$user = sessionUtils::loadobject('nazwauser',true);
		$proccess -> putVar('id',$user['id']);
		
	/*	$weight = ParamUtils::getFromPost('weight');
		$height = ParamUtils::getFromPost('height');
		$pbf = ParamUtils::getFromPost('pbf');
		$activity = ParamUtils::getFromPost('activity');
		$age = ParamUtils::getFromPost('age');
		$gender = ParamUtils::getFromPost('gender');
	*/
		
		
	
	
		
		$proccess->make();
		
		$this->container->generateView();
        
    }
    
}
