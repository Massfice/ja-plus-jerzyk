<?php

namespace app\controllers;

use core\RoleUtils;
use core\SessionUtils;

use app\test\Factory;

class TrainerController extends Controller {

	public function action_trainer() {

    $user = SessionUtils::loadObject('nazwauser',true);
    $role = Factory::createRole($user['role']);

    echo $role->text();

	  $this->container->generateView();
	}

}

?>
