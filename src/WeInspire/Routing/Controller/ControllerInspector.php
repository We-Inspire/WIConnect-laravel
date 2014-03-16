<?php namespace WeInspire\Routing\Controller;

/**
*	@author Christoph Burger <christoph.burger@we-inspire.net>
*
*/

class Inspector extends \Illuminate\Routing\ControllerInspector {

	/**
	 * Valid HTTP-Methods which are later used to determine wheter a request is valid or not.
	 * 
	 * @var array
	 */
	protected $verbs = array(
		'any', 'get', 'post', 'put', 
		'delete', 'head', 'options', 'node'
	);

}