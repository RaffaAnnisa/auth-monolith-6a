<?php

namespace Modules\Orders\Listeners;

use Illuminate\Support\Facades\Log;
use Modules\Orders\Events\OrderCreated;

class LogOrderCreated
{
    public function handle(OrderCreated $event): void
    {
        Log::info('Pesanan dibuat', ['order_id' => $event->order->id]);
    }
}