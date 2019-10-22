<?php

namespace app\libs\proccesses;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use core\Validator;

class RegisterProccess extends Proccess {

	protected function validate() {
		if(!(
			isset($this->params['email']) &&
			isset($this->params['password']) &&
			isset($this->params['repasswd']) &&
			isset($this->params['name']) &&
			isset($this->params['surname']) &&
			isset($this->params['age']) &&
			isset($this->params['gender'])
			)
		) return false;

		$validator = new Validator();

		$email = $validator->validate($this->params['email'],[
			'required' => true,
			'required_message' => 'Musisz podać email.',
			'email' => true,
			'validator_message' => 'Musisz podać poprawny email.',
      'message_type' => 'error',
		]);
		$passwd = $this->params['password'];
		$repasswd = $this->params['repasswd'];
		$name = $this->params['name'];
		$surname = $this->params['surname'];
		$age = $this->params['age'];
		$gender = $this->params['gender'];


		//if($email == '') Utils::addErrorMessage('Musisz podać email.');
		if($passwd == '') Utils::addErrorMessage('Musisz podać hasło.');
		if($repasswd == '') Utils::addErrorMessage('Musisz powtórzyć hasło.');
		if($name == '') Utils::addErrorMessage('Musisz podać imię.');
		if($surname == '') Utils::addErrorMessage('Musisz podać nazwisko.');
		if($age == '') Utils::addErrorMessage('Podaj date urodzenia');
		if($gender == '') Utils::addErrorMessage('Podaj płeć');

		if(!App::getMessages()->isError()) {

			$i = App::getDB()->count('users',[
				'email' => $email
			]);

			if($i > 0) Utils::addErrorMessage('Podany użytkownik juz istnieje.');
			else {
				if($passwd != $repasswd) Utils::addErrorMessage('Podane hasła się nie zgadzają.');
			}

		}

		return !App::getMessages()->isError();
	}

	protected function proccess() {
		App::getDB()->insert('users',[
			'iduser' => NULL,
			'email' => $this->params['email'],
			'password' => $this->params['password'],
			'name' => $this->params['name'],
			'surname' => $this->params['surname'],
			'age' => $this->params['age'],
			'gender' => $this->params['gender'],
			'role' => 'user',
		]);

		App::getSmarty()->assign('b',TRUE);
	}

}

?>
