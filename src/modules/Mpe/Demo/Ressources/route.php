<?php
return array(
	'/' => array(
					 'controller' => "Mpe\Demo\Controllers\Hello",
					 'method' => 'index'
					),
	'/test/{a}' => array(
					 'controller' => "Mpe\Demo\Controllers\Hello",
					 'method' => 'testA',
					 'a' => array(
					 			   "pattern" => "[a-z]+",
					 			   "default" => "Hello World !!"
					 			 )
					),
	'/test/{a}/{b}' => array(
					 'controller' => "Mpe\Demo\Controllers\Hello",
					 'method' => 'testB',
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