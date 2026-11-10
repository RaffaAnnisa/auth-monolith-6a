<?php

namespace Modules\Orders\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Support\ServiceProvider;
use Modules\Orders\Events\OrderCreated;
use Modules\Orders\Listeners\LogOrderCreated;

class OrderServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        $this->loadMigrationsFrom(__DIR__ . '/../Migrations');

        Event::listen(OrderCreated::class, LogOrderCreated::class);
    }
}