# Slack for Laravel

This package allows you to use [Slack for PHP](https://github.com/php-slack/slack) easily and elegantly in your Laravel app. Read the instructions below to get setup, and then head on over to [Slack for PHP](https://github.com/php-slack/slack) for usage details.

## Installation

You can install the package using the [Composer](https://getcomposer.org/) package manager. You can install it by running this command in your project root:

```sh
composer require piestar/slack-laravel
```

Then [create an incoming webhook](https://my.slack.com/services/new/incoming-webhook) for each Slack team you'd like to send messages to. You'll need the webhook URL(s) in order to configure this package.

Add the `Piestar\Slack\Laravel\ServiceProvider` provider to the `providers` array in `config/app.php`:

```php
'providers' => [
  Piestar\Slack\Laravel\SlackServiceProvider::class,
],
```

Then add the facade to your `aliases` array:

```php
'aliases' => [
  ...
  'Slack' => Piestar\Slack\Laravel\Facade::class,
],
```

Finally, publish the config file with `php artisan vendor:publish`. You'll find it at `config/slack.php`.

## Configuration

The config file comes with defaults and placeholders. Configure at least one team and any defaults you'd like to change.

## Usage

The Slack facade is now your interface to the library. Any method you see being called an instance of `Maknz\Slack\Client` is available on the `Slack` facade for easy use.

```php
// Send a message to the default channel
\Slack::send('Hello world!');

// Send a message to a different channel
\Slack::to('#accounting')->send('Are we rich yet?');

// Send a private message
\Slack::to('@username')->send('psst!');
```

Now head on over to [Slack for PHP](https://github.com/php-slack/slack) for more examples, including attachments and message buttons.

