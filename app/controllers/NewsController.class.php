<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use core\SessionUtils;
use app\libs\proccesses\ShownewsProccess;
use app\libs\proccesses\NewsProccess;
use core\Validator;

class NewsController extends Controller {
    
    public function action_shownews() {
    	
	$proccess = new ShownewsProccess();
		
	
	
	$proccess -> make();
	
	
	
	$this->container->generateView();
	}
	
	 public function action_addnews() {
		 
	//	App::getSmarty()->assign('b',FALSE);  //Alert
		$proccess = new NewsProccess();
		echo 'zycie to kurwa';
		
	
		$v = new Validator;
		$title = $v->validateFromPost('title', [
		'trim' => true,
		'required' => true,
		'required_message' => 'Tytuł jest wymagany',
		'max_length' => 32,
		'validator_message' => 'Waga musi być liczbą i podajemy ją w kilogramach'
		] );
		
		$textlong = $v->validateFromPost('textlong', [
		'trim' => true,
		'required' => true,
		'required_message' => 'Treść jest wymagana',
		'min_length' => 20,
		'validator_message' => 'Treść musi mieć minimum 20 znaków'
		] );
		

		
		
		$proccess->putVar('title',$title);
		$proccess->putVar('textlong',$textlong);
	
		
		$proccess->make();
		
		$proccess = new ShownewsProccess();
		$proccess->make();
		
		$this->container->generateView();
	}
	
		public function action_deletenews() {
		App::getDB()->delete('news', ['idnews'=>$_POST['idnews']]);
			
			$proccess = new ShownewsProccess();
			$proccess->make();
			App::getSmarty()->assign('b',FALSE);  //Alert false nie wyświetla
			$this->container->generateView();
	
	
	
	}
		 
		 
		 
	 }
  

