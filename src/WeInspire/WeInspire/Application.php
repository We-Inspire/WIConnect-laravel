<?php namespace WeInspire;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Route;
use Illuminate\Routing\Router;
use Illuminate\Config\FileLoader;
use Illuminate\Container\Container;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Facades\Facade;
use Illuminate\Support\ServiceProvider;
use Illuminate\Events\EventServiceProvider;
use Illuminate\Foundation\ProviderRepository;
use Illuminate\Routing\RoutingServiceProvider;
use Illuminate\Exception\ExceptionServiceProvider;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\HttpKernelInterface;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\Debug\Exception\FatalErrorException;
use Illuminate\Support\Contracts\ResponsePreparerInterface;
use Symfony\Component\HttpFoundation\Request as SymfonyRequest;
use Symfony\Component\HttpFoundation\Response as SymfonyResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\RedirectResponse as SymfonyRedirect;

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