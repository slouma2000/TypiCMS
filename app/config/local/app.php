<?php
return array(


	/*
	|--------------------------------------------------------------------------
	| Application Debug Mode
	|--------------------------------------------------------------------------
	*/

	'debug' => false,

	/*
	|--------------------------------------------------------------------------
	| Application Cache
	|--------------------------------------------------------------------------
	*/

	'cache' => false,

	/*
	|--------------------------------------------------------------------------
	| Application URL
	|--------------------------------------------------------------------------
	*/

	'url' => 'http://typicms.local',

	/*
	|--------------------------------------------------------------------------
	| Locally Autoloaded Service Providers
	|--------------------------------------------------------------------------
	*/

	'providers' => append_config(array(
	
		'Barryvdh\Debugbar\ServiceProvider',
		'Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider',
		'LeroyMerlin\LaraSniffer\ServiceProvider',

	)),

);
