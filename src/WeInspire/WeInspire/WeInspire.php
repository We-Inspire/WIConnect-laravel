<?php namespace WeInspire\WeInspire;

use Symfony\Component\HttpKernel\HttpKernelInterface;
use Symfony\Component\HttpFoundation\Request as SymfonyRequest;

class WeInspire implements HttpKernelInterface {

	protected $app;
	protected static $url;

	public function __construct(HttpKernelInterface $app) {
		$this->app = $app;
	}

	public function handle(SymfonyRequest $request, $type = HttpKernelInterface::MASTER_REQUEST, $catch = true) {

		$request = new \WeInspire\Request\Request($_GET, $_POST, array(), $_COOKIE, $_FILES, $_SERVER);

		//$this->app->requestClass("WeInspire\Request\Request");

		//if(!empty(static::$url)) {
			$request->setMethod("NODE");
			$request->setKey($key);
			$request->setPathInfo($url);
		//}

		//die(var_dump($request));

		$response = $this->app->handle($request, $type, $catch);

		//die(var_dump($response));
	}

}