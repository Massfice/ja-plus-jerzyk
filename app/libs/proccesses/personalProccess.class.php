<?php

namespace app\libs\proccesses;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use core\SessionUtils;


class PersonalProccess extends Proccess {
	
	protected function validate() {
		
		
		if(!(
			isset($this->params['weight']) &&
			isset($this->params['height']) &&
			isset($this->params['pbf']) &&
			isset($this->params['activity']) &&
			isset($this->params['biceps']) &&
			isset($this->params['chest']) &&
			isset($this->params['waist']) &&
			isset($this->params['hip']) &&
			isset($this->params['thigh']) &&
			isset($this->params['calf']) 
			)
		) return false;
		
		$weight = $this->params['weight'];
		$height = $this->params['height'];
		$pbf = $this->params['pbf'];
		$activity = $this->params['activity'];
		$biceps = $this->params['biceps'];
		$chest = $this->params['chest'];
		$waist = $this->params['waist'];
		$hip = $this->params['hip'];
		$thigh = $this->params['thigh'];
		$calf = $this->params['calf'];

		
			
	//	if($weight == '') Utils::addErrorMessage('Musisz podać wagę.');
	//	if($height == '') Utils::addErrorMessage('Musisz podać wzrost.');
	//	if($pbf == '') Utils::addErrorMessage('Musisz podać procent tkanki tłuszczowej.');
		if($activity == '') Utils::addErrorMessage('Podaj aktywność.');
		if($biceps == '') Utils::addErrorMessage('Podaj biceps.');
		if($chest == '') Utils::addErrorMessage('Podaj klatke.');
		if($waist == '') Utils::addErrorMessage('Podaj waist.');
		if($hip == '') Utils::addErrorMessage('Podaj biodro.');
		if($thigh == '') Utils::addErrorMessage('Podaj udo.');
		if($calf == '') Utils::addErrorMessage('Podaj łydkę.');
		
		
		
			
		
			
		

		return !App::getMessages()->isError();	
	}
	
	protected function proccess() {
		$user = sessionUtils::loadObject('nazwauser', true);
		App::getDB()->insert('personal_data',[
			'idpersonal' => NULL,
			'weight' => $this->params['weight'],
			'height' => $this->params['height'],
			'pbf' => $this->params['pbf'],
			'activity' => $this->params['activity'],
			'biceps' => $this->params['biceps'],
			'chest' => $this->params['chest'],
			'waist' => $this->params['waist'],
			'hip' => $this->params['hip'],
			'thigh' => $this->params['thigh'],
			'calf' => $this->params['calf'],
			'date' => date('Y-m-d'),
			'iduser' => $user['id']
			
			
		]);
			
		App::getSmarty()->assign('b',TRUE);		
	}
	
}

?>