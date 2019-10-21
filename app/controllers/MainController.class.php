<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;
use core\RoleUtils;
use core\SessionUtils;
/**
 * HelloWorld built in Amelia - sample controller
 *
 * @author Przemysław Kudłacik
 */
class MainController extends Controller {
    
    public function action_main() {
     
        $user = sessionUtils::loadobject('nazwauser',true);
		
	//	if(RoleUtils::inRole($user['role']))Utils::addInfoMessage('Zalogowano');
		$this->container->generateView();
		
		
        
    }
    
}
