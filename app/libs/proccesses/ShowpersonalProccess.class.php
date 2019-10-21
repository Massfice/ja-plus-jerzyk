<?php

namespace app\libs\proccesses;

use core\App;
use core\sessionUtils;


class ShowpersonalProccess extends NonValidationProccess {
	protected function proccess(){
		$user = sessionUtils::loadObject('nazwauser', true);
		$personal = App::getDB()->select('personal_data', '*',[
		'iduser' => $user['id'],
	"ORDER" => [ 'date' => 'ASC' ]
		
			
		]);
		
		App::getSmarty()->assign('personal', $personal);
		
		
		
	}
	
	

	
}

?>