<?php namespace WeInspire;

class Application extends \Illuminate\Foundation\Application {


	/**
	 * Run the application and send the response.
	 *
	 * @param  string $url
	 * @param  string $key
	 * @return void
	 */
	public function run($url = "", $key = "")
	{

		$privkey = "test";

		if(isset($url) && !empty($url) && !empty($key) && $privkey == $key) {
			
			$request = $this['request'];

			$request->setMethod("NODE");
			$request->setKey($key);
			$request->setPathInfo($url);

		}

		$response = with($stack = $this->getStackedClient())->handle($request);

		$response->send();

		$stack->terminate($request, $response);
	}

}