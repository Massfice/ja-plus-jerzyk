<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use app\libs\proccesses\ShowpersonalProccess;
use app\libs\proccesses\PersonalProccess;
use core\Validator;

class PersonalController extends Controller {
    
	public function action_personal() {
	
		App::getSmarty()->assign('b',FALSE);  //Alert
		$proccess = new PersonalProccess();
		
	/*	$weight = ParamUtils::getFromPost('weight');*/
		$height = ParamUtils::getFromPost('height');
		$pbf = ParamUtils::getFromPost('pbf');
		$activity = ParamUtils::getFromPost('activity');
		$biceps = ParamUtils::getFromPost('biceps');
		$chest = ParamUtils::getFromPost('chest');
		$waist = ParamUtils::getFromPost('waist');
		$hip = ParamUtils::getFromPost('hip');
		$thigh = ParamUtils::getFromPost('thigh');
		$calf = ParamUtils::getFromPost('calf');

	
		$v = new Validator;
		$weight = $v->validateFromPost('weight', [
		'trim' => true,
		'required' => true,
		'required_message' => 'Waga jest wymagana',
		'max_length' => 8,
		'numeric' => true,
		'validator_message' => 'Waga musi być liczbą i podajemy ją w kilogramach'
		] );
		
		$height = $v->validateFromPost('height', [
		'trim' => true,
		'required' => true,
		'required_message' => 'Wzrost jest wymagany',
		'max_length' => 5,
		'numeric' => true,
		'validator_message' => 'Wzrost musi być liczbą i podajemy ją w centymetrach'
		] );
	
		
		$proccess->putVar('weight',$weight);
		$proccess->putVar('height',$height);
		$proccess->putVar('pbf',$pbf);
		$proccess->putVar('activity',$activity);
		$proccess->putVar('biceps',$biceps);
		$proccess->putVar('chest',$chest);
		$proccess->putVar('waist',$waist);
		$proccess->putVar('hip',$hip);
		$proccess->putVar('thigh',$thigh);
		$proccess->putVar('calf',$calf);
	
		
		$proccess->make();
		
		$proccess = new ShowpersonalProccess();
		$proccess->make();
		
		$this->container->generateView();
	}
	
	public function action_showpersonal() {
	
	$proccess = new ShowpersonalProccess();
	$proccess->make();
	
	App::getSmarty()->assign('b',FALSE);
	$this->container->generateView();
	
	}
	
	
	
	public function action_deletedata() {
	//	$user = sessionUtils::loadObject('nazwauser', true);
		App::getDB()->delete('personal_data', ['idpersonal'=>$_POST['idpersonal']]);
			
			$proccess = new ShowpersonalProccess();
			$proccess->make();
			App::getSmarty()->assign('b',FALSE);  //Alert false nie wyświetla
			$this->container->generateView();
	
	
	
	}
}

?>