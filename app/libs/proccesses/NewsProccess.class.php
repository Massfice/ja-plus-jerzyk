<?php

namespace app\libs\proccesses;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use core\SessionUtils;


class NewsProccess extends Proccess {
	protected function validate()  {
		
		if(!(
			isset($this->params['title']) &&
			isset($this->params['textlong']) 
			)
		) return false;
		$title = $this->params['title'];
		$textlong = $this->params['textlong'];

//echo 'kupa';
		
			
		if($title == '') Utils::addErrorMessage('Musisz podać tytuł.');
		if($textlong == '') Utils::addErrorMessage('Musisz podać treść.');

	
		
		return !App::getMessages()->isError();	
	}
	
	

		
		protected function proccess() {

		$user = sessionUtils::loadObject('nazwauser', true);
		
		App::getDB()->insert('news',[
			'idnews' => NULL,
			'title' => $this->params['title'],
			'textlong' => $this->params['textlong'],
			'date' => date('Y-m-d H:i:s'),
			'iduser' => $user['id']
			
			
		]);
	
	
	
	//App::getSmarty()->assign('news', $news); 
	}
	}
	
	
	

	


?>