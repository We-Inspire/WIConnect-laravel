<?php namespace WeInspire\WeInspire;

use Illuminate\Support\ServiceProvider;

class WeInspireServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		//$this->package('weinspire/weinspire');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		//

		/*$this->app['app'] = $this->app->share(function($app) {
			$app = new \WeInspire\Application;

			return $app;
		});*/


		$this->app['router'] = $this->app->share(function($app) {
			$router = new \WeInspire\Routing\Router($app);

			return $router;
		});	

			
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array("router");
	}

}