<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class part extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function orders() {
        return $this->belongsToMany(order::class, 'orders_parts', 'fk_partid', 'fk_orderid', 'part_id', 'order_id')->withPivot('amount', 'price');
    }

    public function clients() {
        return $this->belongsTo(client::class, 'fk_client_id', 'client_id');
    }
}
