<?php

namespace Modules\Core\Entities;

use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    protected $table = 'rates';

    protected $fillable = [
        'organizer_id',
        'name',
        'max_quantity',
        'type',
        'price',
        'description',
        'min_allowed_per_purchase',
        'max_allowed_per_purchase',
        'sales_start_time',
        'sales_end_time',
        'status',
        'availability',
        'is_paused',
        'absorb_fees',
        'ticket_delivery'
    ];

    public function organizer()
    {
        return $this->belongsTo(Organizer::class);
    }

    public function rates()
    {
        return $this->belongsToMany(Event::class, 'event_rate', 'rate_id', 'event_id');
    }
}
