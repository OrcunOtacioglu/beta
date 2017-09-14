<?php

namespace Modules\Core\Entities;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'events';

    protected $fillable = [
        'organizer_id',
        'category_id',
        'title',
        'slug',
        'description',
        'status',
        'listing',
        'is_featured',
        'start_date',
        'end_date',
        'on_sale_date',
        'cover_image_path',
    ];

    public function organizer()
    {
        return $this->belongsTo(Organizer::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function rates()
    {
        return $this->belongsToMany(Event::class, 'event_rate', 'event_id', 'rate_id');
    }
}
