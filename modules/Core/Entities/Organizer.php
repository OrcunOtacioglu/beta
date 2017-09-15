<?php

namespace Modules\Core\Entities;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Modules\API\Http\Requests\StoreOrganizer;
use Modules\API\Http\Requests\UpdateOrganizer;

class Organizer extends Model
{
    /**
     * Table name.
     *
     * @var string
     */
    protected $table = 'organizers';

    /**
     * Mass assignable fields.
     *
     * @var array
     */
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

    /**
     * Returns the related Account entities.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function accounts()
    {
        return $this->hasMany(Account::class);
    }

    /**
     * Returns the related Event entities.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function events()
    {
        return $this->hasMany(Event::class);
    }

    /**
     * Returns the related Rate entities.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function rates()
    {
        return $this->hasMany(Rate::class);
    }

    /**
     * Creates a new Organizer entity.
     *
     * @param StoreOrganizer $request
     */
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

    /**
     * Updates the given Organizer entity.
     *
     * @param UpdateOrganizer $request
     * @param $id
     */
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
