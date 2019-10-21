<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use core\SessionUtils;

use app\libs\proccesses\LoginProccess;

class LoginController extends Controller {

    public function action_login() {

	$proccess = new LoginProccess();



		$email = ParamUtils::getFromPost('email');
		$passwd = ParamUtils::getFromPost('password');




		$proccess->putVar('email',$email);
		$proccess->putVar('password',$passwd);


		$proccess->make();

		$this->container->generateView();

    }


    public function action_logout() {
		$user = sessionUtils::loadobject('nazwauser');
		RoleUtils::removeRole($user['role']);
        App::getRouter()->redirectTo('main');

    }


}
