<?php
return array(
	//Admin
	'adminNews/([0-9]+)' => 'adminNews/view/$1',
	'adminNews' 		 => 'adminNews/index',
	'admin' 			 => 'admin/login',
	'myaccount' 		 => 'adminAccount/account', 
	
	 //User	
	'news/([0-9]+)' => 'index/view/$1',
	'news' 			=> 'index/index/', 
	'' 				=> 'index/index', 
	'feedback' 		=> 'index/Feedback',
	

	);