<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class client extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function parts() {
        return $this->hasMany(part::class, 'fk_client_id', 'client_id');
    }
}
