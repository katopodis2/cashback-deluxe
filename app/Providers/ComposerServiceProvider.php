<?php


namespace App\Providers;


use App\Http\View\Composers\FaqButNotImportantComposer;
use App\Http\View\Composers\FaqImportantComposer;
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
        View::composer([
            "faq"
        ], FaqButNotImportantComposer::class);
        View::composer([
            "faq"
        ], FaqImportantComposer::class);
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
