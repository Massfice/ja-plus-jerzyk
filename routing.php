<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('main'); #default action
//App::getRouter()->setLoginRoute('login'); #action to forward if no permissions

Utils::addRoute('main', 'MainController');
Utils::addRoute('register','RegisterController');
Utils::addRoute('login','LoginController');
Utils::addRoute('logout','LoginController');
Utils::addRoute('calculate','CalculateController',['user','admin','news']);
Utils::addRoute('personal','PersonalController',['user','admin','news']);
Utils::addRoute('deletenews','NewsController',['admin','news']);
Utils::addRoute('addnews','NewsController',['admin','news']);
Utils::addRoute('shownews', 'NewsController');
Utils::addRoute('deletedata', 'PersonalController',['user','admin','news']);
Utils::addRoute('showpersonal', 'PersonalController',['user','admin','news']);
Utils::addRoute('trainer', 'TrainerController',['user','admin','news','trener']);

//Utils::addRoute('action_name', 'controller_class_name');

