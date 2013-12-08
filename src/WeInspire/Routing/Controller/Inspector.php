<?php namespace Weinspire\Routing\Controller\Inspector;

class Inspector extends Illuminate\Routing\Controllers\Inspector {

	protected $verbs = array(
		'any', 'get', 'post', 'put', 
		'delete', 'head', 'options', 'node'
	);

}