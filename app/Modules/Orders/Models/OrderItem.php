<?php

namespace Modules\Orders\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Modules\Products\Models\Product;

class OrderItem extends Model
{
 protected $fillable = [
 'order_id', 'product_id', 'product_name',
 'price_at_purchase', 'quantity', 'subtotal'
 ];
 protected $casts = [
 'price_at_purchase' => 'decimal:2',
 'subtotal' => 'decimal:2',
 ];
 public function order(): BelongsTo
 {
 return $this->belongsTo(Order::class);
 }
 public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}