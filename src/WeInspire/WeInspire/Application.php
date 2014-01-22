<?php namespace WeInspire;

class Application extends \Illuminate\Foundation\Application {

	public function run($data = "", $key = "")
	{
		// [TODO] fake request

		$privkey = "test";

		$url = $data[0];

		

		//return var_dump($this['request']->path());
		if(isset($url) && !empty($url) && !empty($key) && $privkey == $key) {
			
			$request = $this['request'];

			//return var_dump($request);

			//echo "------";
			//echo var_dump($request->getPathInfo());
			//echo "-------";

			$request->setMethod("NODE");
			$request->setKey($key);
			$request->setPathInfo($url);

			//echo "------";
			//var_dump($request);
			//return "-------";

			//$this['request'] = $request;
		}

		$response = with($stack = $this->getStackedClient())->handle($request);

		$response->send();

		$stack->terminate($request, $response);

		/*$response = $this->dispatch($this['request']);

		$this['router']->callCloseFilter($this['request'], $response);

		$response->send();

		$this['router']->callFinishFilter($this['request'], $response);*/
	}

}