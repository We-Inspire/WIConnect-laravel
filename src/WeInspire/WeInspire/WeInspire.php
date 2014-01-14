<?php namespace WeInspire\WeInspire;

use Symfony\Component\HttpKernel\HttpKernelInterface;
use Symfony\Component\HttpFoundation\Request as SymfonyRequest;

class WeInspire implements HttpKernelInterface {

	protected $app;

	public function __construct(HttpKernelInterface $app) {
		$this->app = $app;
	}

	public function handle(SymfonyRequest $request, $type = HttpKernelInterface::MASTER_REQUEST, $catch = true) {

		//Illuminate\Foundation\Application::requestClass("WeInspire\Request\Request");

		$this->app->requestClass("WeInspire\Request\Request");

		die(var_dump($request));

		$response = $this->app->handle($request, $type, $catch);

		die(var_dump($response));
	}

}