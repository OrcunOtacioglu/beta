<?php

namespace Modules\Core\Entities;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Modules\API\Http\Requests\StoreEvent;
use Modules\API\Http\Requests\UpdateEvent;
use Modules\Core\Lib\Helpers;

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

    public static function storeNew(StoreEvent $request)
    {
        $event = new Event();

        // @TODO CHANGE THIS TO GET AUTHENTICATED ORGANIZER DYNAMICALLY.
        $event->organizer_id = $request->input('organizer_id');
        $event->category_id = $request->input('category_id');

        $event->title = $request->input('title');
        $event->slug = Helpers::sluggify($request->input('title'));
        $event->description = $request->input('description');
        $event->location = $request->input('location');

        $event->status = $request->input('status') !== null
            ? $request->input('status') : 1;
        $event->listing = $request->input('listing') !== null
            ? $request->input('listing') : 0;
        $event->is_featured = $request->input('is_featured') !== null
            ? $request->input('is_featured'): 0;

        $event->start_date = $request->input('start_date');
        $event->end_date = $request->input('end_date');
        $event->on_sale_date = $request->input('on_sale_date');

        $event->cover_image_path = $request->input('cover_image_path') !== null ?
            $request->input('cover_image_path') : Helpers::defaultCoverImage();

        $event->created_at = Carbon::now();
        $event->updated_at = Carbon::now();

        $event->save();
    }

    public static function updateEntity(UpdateEvent $request, $id)
    {
        $event = Event::find($id);

        // @TODO CHANGE THIS TO GET AUTHENTICATED ORGANIZER DYNAMICALLY.
        $event->organizer_id = $request->input('organizer_id');
        $event->category_id = $request->input('category_id');

        $event->title = $request->input('title');
        $event->slug = Helpers::sluggify($request->input('title'));
        $event->description = $request->input('description');
        $event->location = $request->input('location');

        $event->status = $request->input('status') !== null ?
            $request->input('status') : $event->status;
        $event->listing = $request->input('listing') !== null ?
            $request->input('listing') : $event->listing;
        $event->is_featured = $request->input('is_featured') !== null ?
            $request->input('is_featured') : $event->is_featured;

        $event->start_date = $request->input('start_date');
        $event->end_date = $request->input('end_date');
        $event->on_sale_date = $request->input('on_sale_date');

        $event->cover_image_path = $request->input('cover_image_path') !== null ?
            $request->input('cover_image_path') : Helpers::defaultCoverImage();

        $event->updated_at = Carbon::now();

        $event->save();
    }
}
