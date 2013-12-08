<?php namespace WeInspire\Routing;

use WeInspire\Routing\Controller\Inspector;

class Router extends \Illuminate\Routing\Router {

	public function node($pattern, $action) {
		//return "hi";
		return $this->createRoute('node', $pattern, $action);
	}

	public function getInspector()
	{
		return $this->inspector ?: new \WeInspire\Routing\Controller\Inspector;
	}

}