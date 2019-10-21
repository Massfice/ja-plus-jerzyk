<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;

use app\libs\proccesses\RegisterProccess;


class RegisterController extends Controller {

	public function action_register() {

	App::getSmarty()->assign('b',FALSE);

		$proccess = new RegisterProccess();

		$email = ParamUtils::getFromPost('email');
		$passwd = ParamUtils::getFromPost('password');
		$repasswd = ParamUtils::getFromPost('repasswd');
		$name = ParamUtils::getFromPost('name');
		$surname = ParamUtils::getFromPost('surname');
		$age = ParamUtils::getFromPost('age');
		$gender = ParamUtils::getFromPost('gender');

		$proccess->putVar('email',$email);
		$proccess->putVar('password',$passwd);
		$proccess->putVar('repasswd',$repasswd);
		$proccess->putVar('name',$name);
		$proccess->putVar('surname',$surname);
		$proccess->putVar('age',$age);
		$proccess->putVar('gender',$gender);

		$proccess->make();

		$date=date('Y-m-d');
	App::getSmarty()->assign('date',$date);

		$this->container->generateView();
	}

}

?>
