<?php
return array(
	//Admin
	'adminNews/([0-9]+)'	  => 'adminNews/view/$1',	
	'adminElearning/([0-9]+)' => 'adminElearning/viewDocumentsSpo/$1',	
	// 'adminElearning'	 	  => 'adminElearning/elearning',
	'elearning'		=> 'elearning/elearning', 
	'adminAbout/([0-9]+)'	  => 'adminAbout/ViewDocuments/$1', 						
	'adminNews' 		 	  => 'adminNews/index/',
	'adminAbout' 		 	  => 'adminAbout/about', 
	'admin' 				  => 'admin/login',
	'myaccount' 		 	  => 'adminAccount/account', 

	
	 //User	
	'course'		=> 'course/course',
	'about/([0-9]+)'=> 'about/about/$1', 	
	'about' 		=> 'about/about',
	'news/([0-9]+)' => 'index/view/$1',
	'news' 			=> 'index/index',
	'gallery'		=> 'gallery/gallery', 
	'elearning'		=> 'elearning/elearning', 
	'' 				=> 'index/index', 
	'feedback' 		=> 'index/Feedback',
	

	);