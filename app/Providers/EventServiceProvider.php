<?php

namespace App\Providers;

use App\Events\PaymentProcessed;
use App\Events\ProjectCreated;
use App\Listeners\FetchPaymentDetailCoinbaseCommerce;
use App\Listeners\FetchTwitterFollowers;
use App\Listeners\SendProjectSubmitNotification;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        ProjectCreated::class => [
            FetchTwitterFollowers::class,
            SendProjectSubmitNotification::class,
        ],
        PaymentProcessed::class => [
            FetchPaymentDetailCoinbaseCommerce::class,
        ],
    ];

    /**
     * Register any events for your application.
     */
    public function boot(): void
    {
        //
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     */
    public function shouldDiscoverEvents(): bool
    {
        return false;
    }
}
