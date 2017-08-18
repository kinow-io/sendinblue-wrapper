<?php namespace Floriankaemo\SendinblueWrapper;

use Illuminate\Support\ServiceProvider;
use Sendinblue\Mailin;

class SendinblueWrapperServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('sendinbluewrapper', function () {
            $mailin = new Mailin('https://api.sendinblue.com/v2.0', env('SENDINBLUE_KEY'));
            return new SendinblueWrapper($mailin);
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array('sendinbluewrapper');
    }
}
