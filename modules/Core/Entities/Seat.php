<?php

namespace Modules\Core\Entities;

use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    protected $table = 'seats';

    protected $fillable = [
        'rate_id',
        'order_id',
        'uuid',
        'zone',
        'row',
        'number',
        'status'
    ];

    public function venue()
    {
        return $this->belongsTo(Venue::class);
    }

    public function rate()
    {
        return $this->belongsTo(Rate::class);
    }

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
