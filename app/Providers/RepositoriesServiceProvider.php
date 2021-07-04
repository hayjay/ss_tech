<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

//Channels
use App\Repositories\ChannelList\ChannelListRepository;
use App\Interfaces\ChannelList\ChannelListRepositoryInterface;

// Programmes
use App\Repositories\Programme\ProgrammeRepository;
use App\Interfaces\Programme\ProgrammeRepositoryInterface;
class RepositoriesServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(ChannelListRepositoryInterface::class, ChannelListRepository::class);
        $this->app->bind(ProgrammeRepositoryInterface::class, ProgrammeRepository::class);
    }
}
