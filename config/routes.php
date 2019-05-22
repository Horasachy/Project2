<?php
return array(
	//Admin
	'adminNews/([0-9]+)' => 'adminNews/view/$1',
	'adminAbout/([0-9]+)'=> 'adminAbout/ViewDocuments/$1', 						
	'adminNews' 		 => 'adminNews/index/',
	'adminAbout' 		 => 'adminAbout/about', 
	'admin' 			 => 'admin/login',
	'myaccount' 		 => 'adminAccount/account', 

	
	 //User	
	'about/([0-9]+)'=> 'about/about/$1', 	
	'about' 		=> 'about/about',
	'news/([0-9]+)' => 'index/view/$1',
	'news' 			=> 'index/index/', 
	'' 				=> 'index/index', 
	'feedback' 		=> 'index/Feedback',
	

	);