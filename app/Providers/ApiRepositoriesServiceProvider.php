<?php

namespace App\Providers;

use App\Repositories\Abstracts\AppointmentRepositoryInterface;
use App\Repositories\Concretes\AppointmentRepository;
use App\Repositories\Concretes\CalendarRepository;
use App\Repositories\Abstracts\CalendarRepositoryInterface;
use App\Repositories\Concretes\TeamRepository;
use App\Repositories\Abstracts\TeamRepositoryInterface;
use App\Repositories\Concretes\TimeUnitRepository;
use App\Repositories\Abstracts\TimeUnitRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class ApiRepositoriesServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register() : void
    {
        $this->app->bind(TimeUnitRepositoryInterface::class, TimeUnitRepository::class);
        $this->app->bind(TeamRepositoryInterface::class, TeamRepository::class);
        $this->app->bind(CalendarRepositoryInterface::class, CalendarRepository::class);
        $this->app->bind(AppointmentRepositoryInterface::class, AppointmentRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot() : void
    {
        //
    }
}
