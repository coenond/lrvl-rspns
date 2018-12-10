<?php
namespace coenond\LrvlRspns;

use Illuminate\Support\ServiceProvider;

class LrvlRspnsServiceProvider extends ServiceProvider
{
	/**
	 * Bootstrap the application services.
	 */
	public function boot(): void { }

	/**
	 * Register the application services.
	 */
	public function register(): void
	{
		$this->app->singleton(LrvlRspns::class, function () {
			return new LrvlRspns();
		});

		$this->app->alias(LrvlRspns::class, 'lrvl-rspns');
	}
}