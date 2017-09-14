<?php

namespace Modules\Core\Entities;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Modules\API\Http\Requests\StoreOrganizer;
use Modules\API\Http\Requests\UpdateOrganizer;

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

    public static function storeNew(StoreOrganizer $request)
    {
        $organizer = new Organizer();

        $organizer->name = $request->input('name');
        $organizer->address = $request->input('address');
        $organizer->city = $request->input('city');
        $organizer->postal_code = $request->input('postal_code');
        $organizer->country = $request->input('country');
        $organizer->contact = $request->input('contact');
        $organizer->about = $request->input('about');
        $organizer->phone = $request->input('phone');
        $organizer->website = $request->input('website');
        $organizer->facebook_page = $request->input('facebook_page');
        $organizer->twitter_page = $request->input('twitter_page');
        $organizer->settings = json_encode($request->input('settings'));
        $organizer->updated_at = Carbon::now();
        $organizer->created_at = Carbon::now();

        $organizer->save();
    }

    public static function updateEntity(UpdateOrganizer $request, $id)
    {
        $organizer = Organizer::find($id);

        $organizer->name = $request->input('name');
        $organizer->address = $request->input('address');
        $organizer->city = $request->input('city');
        $organizer->postal_code = $request->input('postal_code');
        $organizer->country = $request->input('country');
        $organizer->contact = $request->input('contact');
        $organizer->about = $request->input('about');
        $organizer->phone = $request->input('phone');
        $organizer->website = $request->input('website');
        $organizer->facebook_page = $request->input('facebook_page');
        $organizer->twitter_page = $request->input('twitter_page');
        $organizer->settings = json_encode($request->input('settings'));
        $organizer->updated_at = Carbon::now();

        $organizer->save();
    }
}
