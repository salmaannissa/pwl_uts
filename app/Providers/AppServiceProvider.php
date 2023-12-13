<?php

namespace App\Providers;

use App\Models\Alternatif;
use App\Models\Criteria;
use App\Models\User;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

use Illuminate\Contracts\Pagination\Paginator as PaginationPaginator;
use Illuminate\Pagination\Paginator;
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
        Paginator::useBootstrap();
        view::share('Alternatif', Alternatif::count());

        View::share('Criteria', Criteria::count());
        View::share('User', User::count());
    }
}
