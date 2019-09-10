<?php

namespace JokerOZ\JokerLaravelTool;

use Illuminate\Support\ServiceProvider;
use JokerOZ\JokerLaravelTool\Console\Commands\JokerModelCommonClassCommand;
use JokerOZ\JokerLaravelTool\Console\Commands\JokerModelCRUDCommand;

class JokerLaravelToolServiceProvider extends ServiceProvider
{
	/**
	 * 服务提供者加是否延迟加载.
	 *
	 * @var bool
	 */
	protected $defer = false; // 延迟加载服务
	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		if ($this->app->runningInConsole()) {
			$this->commands([
				JokerModelCRUDCommand::class,
				JokerModelCommonClassCommand::class,
			]);
		}
	}
	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->singleton('JokerModelCRUDCommand', function () {
			return new JokerModelCRUDCommand;
		});
	}
	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		// 因为延迟加载 所以要定义 provides 函数 具体参考laravel 文档
		return [''];
	}
}
