<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;

    public $timestamps = false;

    public $primaryKey = 'order_id';

    public function parts() {
        return $this->belongsToMany(part::class, 'orders_parts', 'fk_orderid', 'fk_partid', 'order_id', 'part_id')->withPivot('amount', 'price');
    }

    public function clients() {
        return $this->belongsTo(client::class, 'fk_clientid', 'client_id');
    }
}
