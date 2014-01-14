<?php namespace WeInspire\WeInspire;

use Symfony\Component\HttpKernel\HttpKernelInterface;
use Symfony\Component\HttpFoundation\Request as SymfonyRequest;

class WeInspire implements HttpKernelInterface {

	protected $app;

	public function __construct(HttpKernelInterface $app) {
		$this->app = $app;
	}

	public function handle(SymfonyRequest $request, $type = HttpKernelInterface::MASTER_REQUEST, $catch = true) {

		$request = WeInspire\Request\Request::createFromGlobals();

		//$this->app->requestClass("WeInspire\Request\Request");

		$request->setPathInfo("/hi");

		die(var_dump($request));

		$response = $this->app->handle($request, $type, $catch);

		die(var_dump($response));
	}

}