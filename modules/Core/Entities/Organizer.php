<?php

namespace Modules\Core\Entities;

use Illuminate\Database\Eloquent\Model;

class Organizer extends Model
{
    protected $table = 'organizers';

    protected $fillable = [
        'name',
        'address',
        'city',
        'postal_code',
        'country',
        'contact',
        'about',
        'phone',
        'website',
        'facebook_page',
        'twitter_page',
        'settings',
    ];

    public function events()
    {
        return $this->hasMany(Event::class);
    }

    public function rates()
    {
        return $this->hasMany(Rate::class);
    }
}
