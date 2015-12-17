<?php

namespace Claremontdesign\Naradmin;

/**
 * Dx
 *
 * @link http://dennesabing.com
 * @author Dennes B Abing <dennes.b.abing@gmail.com>
 * @license proprietary
 * @copyright Copyright (c) 2015 ClaremontDesign/MadLabs-Dx
 * @version 0.0.0.1
 * @since Dec 17, 2015 1:43:45 PM
 * @file routes.php
 * @project Claremontdesign
 * @package Naradmin
 */
class ServiceProvider extends \Illuminate\Support\ServiceProvider
{

	public function register()
	{
		// Register this service
		$this->app->singleton('naradmin', function($app){
			return new Naradmin;
		});
		app('cdbase')->addPackage(\Claremontdesign\Naradmin\Naradmin::class);
	}

	public function boot()
	{
		// Define the path for the view files
		$this->loadViewsFrom(__DIR__ . '/../resources/views', cd_naradmin_tag());

		$this->publishes([
			__DIR__ . '/../resources/assets' => public_path('assets/naradmin'),
				], 'public');

		$this->publishes([
			__DIR__ . '/../resources/views' => base_path('resources/views/claremontdesign/naradmin'),
				], 'views');

		$this->publishes([
			__DIR__ . '/../database/migrations' => base_path('database/migrations')
				], 'migrations');

		// Loading the routes file
		require __DIR__ . '/Http/routes.php';
	}

}
