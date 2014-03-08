<?php
return array(
	'/' => array(
					 'controller' => "Mpe\Demo\Controllers\Hello",
					 'method' => 'index'
					),
	'/multi/{a}/{b}' => array(
					 'controller' => "Mpe\Demo\Controllers\Hello",
					 'method' => 'third',
					 'parameters' => array(
						 'a' => array(
						 			   "pattern" => "[a-z]+",
						 			   "default" => "Hello World !!"
						 			 ),
						 'b' => array(
						 			   "pattern" => "[a-z]+",
						 			   "default" => "Hello World !!"
						 			 )
						  )
					),
	'/error' => array(
					 'controller' => "Mpe\Demo\Controllers\Hello",
					 'method' => 'third',
					 'parameters' => array(
						 'a' => array(
						 			   "pattern" => "[a-z]+",
						 			   "default" => "Hello World !!"
						 			 ),
						 'b' => array(
						 			   "pattern" => "[a-z]+",
						 			   "default" => "Hello World !!"
						 			 )
						  )
					)

);