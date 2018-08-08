<?php

namespace Piestar\Slack\Laravel;

use Maknz\Slack\Client;

class SlackServiceProvider extends \Illuminate\Support\ServiceProvider {

	public function boot()
	{
		$this->publishes([__DIR__ . '/../config/main.php' => config_path('slack.php')], 'config');
		$this->mergeConfigFrom(__DIR__ . '/../config/main.php', 'slack');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->singleton('slack', function($app) {
			return new Client(env('SLACK_HOOK_URL', config('slack.endpoint')), config('slack'));
		});
	}

}
