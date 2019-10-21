<?php

namespace app\libs\proccesses;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use core\SessionUtils;

class CalculateProccess extends Proccess {
	
	protected function validate(){
	
		$user = SessionUtils::LoadObject('nazwauser', true);
		$i = App::getDB()->count('personal_data',[
				'iduser' => $user['id']
				
			]);
			if ($i == 0)App::GetRouter()->RedirectTo('showpersonal');
			
		return true;
		
		
	}
	
	
	private function getAge($date) {

	$current_date = \date('Y-m-d');
	$current_date = \explode('-',$current_date);
	$current_y = \intval($current_date[0]);
	$current_m = \intval($current_date[1]);
	$current_d = \intval($current_date[2]);
	$date = \explode('-',$date);
	$y = \intval($date[0]);
	$m = \intval($date[1]);
	$d = \intval($date[2]);
	if($current_m < $m) $x = -1;
		else if($current_m == $m && $current_d < $d) $x = -1;
			else $x = 0;
	
	return $current_y - $y + $x;
	}
	
	protected function proccess() {
		
	$user = SessionUtils::LoadObject('nazwauser', true);	// Load object wczytujemy sesje
		
	
		$data = App::getDB()->select('users', [
	'[><]personal_data' => ['iduser' => 'iduser']],
	[
	
	'users.age' ,
	'users.gender[Int]' ,
	'personal_data.weight[Float]' ,
	'personal_data.pbf[Float]' ,
	'personal_data.activity[Float]' 

	
	
	
	
	
	],
	
	[

	'users.iduser'=>$user['id'],
	"ORDER" => [ 'personal_data.date' => 'ASC' ]  //      lub ASC        
	
	]);  //,['users.iduser'=>$user['id']] - sesja - jeden użytkownik
	
	//select T.* from users T join personal_data D on D.userid = T.userid where D.date = (select max(N.date) from personal_data where N.userid = T.userid)
	
	
	$data = $data[count($data)-1];  // dla ASC
	//$data = $data[0];   //jeden
//	echo $this->getAge($data['age']);   // pokazanie wieku
	
	//echo var_dump ($data); //Zawartość tablicy
		
		
		/*Diet.
100kg – 100%
20kg – 20%

100kg – 20kg = 80%
80*4=bialko
80*9=tluszcz

sucha masa ciała * 24 * współczynnik aktywności  - man
sucha masa ciała * 22 * współczynnik aktywności  - woman
W - B - T   -   Redukcja,Masa, norma
*/	
	$weight = $data['weight'];
	$pbf = $data['pbf'];
	$gender = $data['gender'];
	$activity = $data['activity'];
	

	$x =($weight * $pbf) / 100;
	$y =($weight - $x);
	$return= round ($y * $gender * $activity);
	
	echo $return;
	
	
	
	
	
	}
	
	
	
}

?>