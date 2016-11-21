<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Repositories\PatientRepository',
            'App\Repositories\PatientRepositoryEloquent'
        );
        $this->app->bind(
            'App\Repositories\ReportRepository',
            'App\Repositories\ReportRepositoryEloquent'
        );
        $this->app->bind(
            'App\Repositories\TypeTestRepository',
            'App\Repositories\TypeTestRepositoryEloquent'
        );
        $this->app->bind(
            'App\Repositories\TestRepository',
            'App\Repositories\TestRepositoryEloquent'
        );



    }
}
