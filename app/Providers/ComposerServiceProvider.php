<?php


namespace App\Providers;


use App\Http\View\Composers\HowWorkComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{

    public function boot()
    {
        View::composer([
            "partials.includes.how-work"
        ], HowWorkComposer::class);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
