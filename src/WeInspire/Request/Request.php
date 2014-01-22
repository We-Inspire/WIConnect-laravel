<?php namespace WeInspire\Request;

class Request extends \Illuminate\Http\Request {

	protected $key;

	public function setPath($path) {
		$this->setPathInfo($path);

	}

	public function node() {
		
		return $this->getMethod() == 'NODE' && $this->getKey() == "test";
	}

	public function setPathInfo($path) {
		$this->pathInfo = $path;
	}

	public function setKey($key) {
		$this->key = $key;
	}

	public function getKey() {
		return $this->key;
	}

	public function setContent($asResource = false, $args) {
		$this->content = $args;
	}

}