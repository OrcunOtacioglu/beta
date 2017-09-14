<?php

namespace Modules\Core\Entities;

use Illuminate\Database\Eloquent\Model;

class Attendee extends Model
{
    protected $table = 'attendees';

    protected $fillable = [
        'name',
        'surname',
        'email',
        'phone',
        'address',
        'city',
        'postal_code',
        'country',
        'password',
        'remember_token'
    ];

    protected $hidden = [
        'password',
        'remember_token'
    ];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
