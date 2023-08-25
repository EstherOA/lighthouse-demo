<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;

    public function shipment(): BelongsTo {
        return $this->belongsTo(Shipment::class, 'shipment_id');
    }
}
