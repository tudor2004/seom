<?php

namespace Tudorica\Seom\Providers;

use Illuminate\Support\ServiceProvider;
use Tudorica\Seom\Seom;
use Tudorica\Seom\HtmlMeta;
use Tudorica\Seom\OpenGraph;


class SeomServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('seom', function()
		{
			return new Seom();
		});

        $this->app->singleton('seom.htmlmeta', function()
		{
			return new HtmlMeta();
		});

        $this->app->singleton('seom.opengraph', function()
		{
			return new OpenGraph();
		});

        $this->app->bind('Tudorica\Seom\Contracts\HtmlTags', 'seom.htmlmeta');
        $this->app->bind('Tudorica\Seom\Contracts\OpenGraph', 'seom.opengraph');
    }
}