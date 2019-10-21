<?php

namespace app\libs\proccesses;

use core\App;
use core\sessionUtils;


class ShownewsProccess extends NonValidationProccess {
	protected function proccess(){

		//$news = App::getDB()->select('news', '*',[
		//"ORDER" => [ 'date' => 'DESC' ]]);





	$news = App::getDB()->select('news', [
	'[><]users' => ['iduser' => 'iduser']],
	[

	'users.email' ,
	'news.title' ,
	'news.date' ,
	'news.textlong' ,
	'news.idnews'

	],

	[

	"ORDER" => [ 'news.date' => 'DESC' ]  //      lub ASC

	]);


	$user = SessionUtils::LoadObject('nazwauser',true);

	App::getSmarty()->assign('newser', $user['role']); // nazwa zmiennej

	App::getSmarty()->assign('news', $news);
	}



}

?>
