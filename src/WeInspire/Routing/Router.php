<?php namespace WeInspire\Routing;

use WeInspire\Routing\Controller\Inspector;

class Router extends \Illuminate\Routing\Router {

	/**
	 * Valid HTTP-Methods which are later used to determine wheter a request is valid or not.
	 * 
	 * @var array
	 */
	public static $verbs = array('GET', 'HEAD', 'POST', 'PUT', 'PATCH', 'DELETE', 'OPTIONS', 'NODE');

	/**
	 * Route a node Request.
	 * 
	 * @param string $paramname
	 * @param \Closure|array|string  $action
	 * @return \Illuminate\Routing\Route 
	 */
	public function node($uri, $action) {
		return $this->addRoute('NODE', $uri, $action);
	}

	/**
	 * Get a inspector instance.
	 *
	 * @return \WeInspire\Routing\Controller\Inspector
	 */
	public function getInspector()
	{
		return $this->inspector ?: new \WeInspire\Routing\Controller\Inspector;
	}

}