<?php

namespace App\Providers;

use App\Events\OrderPaid;
use App\Listeners\RegisteredListener;
use App\Listeners\UpdateProductSoldCount;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Event;
use App\Listeners\SendOrderPaidMail;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            RegisteredListener::class,
        ],
        OrderPaid::class => [
            UpdateProductSoldCount::class,
            SendOrderPaidMail::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
