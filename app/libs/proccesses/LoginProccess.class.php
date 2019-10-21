<?php

namespace app\libs\proccesses;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\SessionUtils;

//use app\libs\usage\JavaScriptFuncsCaller;
//use app\libs\usage\ExtendedConfig;

class LoginProccess extends Proccess {

	protected function validate() {

		if(!$this->areParamsSet('email','password')) return FALSE;

		$email = $this->params['email'];
		$passwd = $this->params['password'];

		if($email == '') Utils::addErrorMessage('Podaj email.');
		if($passwd == '') Utils::addErrorMessage('Podaj hasło.');

		if(!App::getMessages()->isError()) {

			$i = App::getDB()->count('users',[
				'email' => $email,
				'password' => $passwd
			]);

			if($i == 0) Utils::addErrorMessage('Błędne dane logowania');
		}

		return !App::getMessages()->isError();
	}

	protected function proccess() {


		$user = App::getDB()->select(
			'users',
			[
				'iduser(id)[Int]',
				'email(name)',
				'role'

			],
			[
				'email' => $this->params['email'],
				'password' => $this->params['password']
			]
		);

		$user = $user[0];


		SessionUtils::storeObject('nazwauser',$user);
		RoleUtils::addRole($user['role']);
		Utils::addInfoMessage('Zalogowano');
		App::getRouter()->forwardto('main');

	}

}
