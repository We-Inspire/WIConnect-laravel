<?php namespace WeInspire;

class Application extends \Illuminate\Foundation\Application {

	public function run($url = "", $key = "")
	{
		// [TODO] fake request

		$privkey = "test";

		//return var_dump($this['request']->path());
		if(isset($url) && !empty($url) && !empty($key) && $privkey == $key) {
			
			$request = $this['request'];

			//return var_dump($request);

			//echo "------";
			//echo var_dump($request->getPathInfo());
			//echo "-------";

			$this['request']->setMethod("node");
			$this['request']->setKey($key);
			$this['request']->setPathInfo($url);

			//echo "------";
			//var_dump($request);
			//return "-------";

			//$this['request'] = $request;
		}

		$response = $this->dispatch($this['request']);

		$this['router']->callCloseFilter($this['request'], $response);

		$response->send();

		$this['router']->callFinishFilter($this['request'], $response);

		/*$response = $this->dispatch($this['request']);

		$this['router']->callCloseFilter($this['request'], $response);

		$response->send();

		$this['router']->callFinishFilter($this['request'], $response);*/
	}
	
}