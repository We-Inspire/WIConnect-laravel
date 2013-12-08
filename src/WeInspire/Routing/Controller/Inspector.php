<?php namespace WeInspire\Routing\Controller;

class Inspector extends \Illuminate\Routing\Controllers\Inspector {

	protected $verbs = array(
		'any', 'get', 'post', 'put', 
		'delete', 'head', 'options', 'node'
	);

}