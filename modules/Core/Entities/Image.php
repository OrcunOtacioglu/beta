<?php

namespace Modules\Core\Entities;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'images';

    protected $fillable = [
        'path',
        'title',
        'alt_text'
    ];
}
