<?php

namespace App\Providers;

use App\Http\Controllers\TextController;
use App\Models\Combo;
use App\Models\Photo;
use App\Models\Program;
use App\Models\Table;
use App\Models\Text;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

//        view()->composer('*',function($view) {
//            $view->with('texts', Text::all());
//        });

//        View::composer('*', function ($view) {
//            //
//        });

//        View::share('texts', Text::all());
//        View::share('photos', Photo::all());
//        View::share('tables', Table::all());
//        View::share('combos', Combo::all());
//        View::share('programs', Program::all());


    }
}
