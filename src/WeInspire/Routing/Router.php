<?php namespace Weinspire\Router;

use Weinspire\Inspector\Inspector;

class Router extends Illuminate\Routing\Router {

	public function node($pattern, $action) {
		return "hi";
		//return $this->createRoute('node', $pattern, $action);
	}

	public function getInspector()
	{
		return $this->inspector ?: new Weinspire\Inspector\Inspector;
	}

}