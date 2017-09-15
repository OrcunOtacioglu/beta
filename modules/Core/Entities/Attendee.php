<?php

namespace Modules\Core\Entities;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Modules\API\Http\Requests\StoreAttendee;
use Modules\API\Http\Requests\UpdateAttendee;

class Attendee extends Model
{
    /**
     * Table name.
     *
     * @var string
     */
    protected $table = 'attendees';

    /**
     * Mass assignable fields.
     *
     * @var array
     */
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

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token'
    ];

    /**
     * Returns the related Orders.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    /**
     * Creates a new Attendee entity.
     *
     * @param StoreAttendee $request
     */
    public static function storeNew(StoreAttendee $request)
    {
        $attendee = new Attendee();

        $attendee->name = $request->input('name');
        $attendee->surname = $request->input('surname');
        $attendee->email = $request->input('email');

        $attendee->phone = $request->input('phone');
        $attendee->address = $request->input('address');
        $attendee->city = $request->input('city');
        $attendee->postal_code = $request->input('postal_code');
        $attendee->country = $request->input('country');

        $attendee->password = bcrypt($request->input('password'));
        $attendee->remember_token = $request->input('remember_token');

        $attendee->created_at = Carbon::now();
        $attendee->updated_at = Carbon::now();

        $attendee->save();
    }

    /**
     * Updates the given Attendee entity.
     *
     * @param UpdateAttendee $request
     * @param $id
     */
    public static function updateEntity(UpdateAttendee $request, $id)
    {
        $attendee = Attendee::find($id);

        $attendee->name = $request->input('name');
        $attendee->surname = $request->input('surname');
        $attendee->email = $request->input('email');

        $attendee->phone = $request->input('phone');
        $attendee->address = $request->input('address');
        $attendee->city = $request->input('city');
        $attendee->postal_code = $request->input('postal_code');
        $attendee->country = $request->input('country');

        $attendee->password = bcrypt($request->input('password'));
        $attendee->remember_token = $request->input('remember_token');

        $attendee->updated_at = Carbon::now();

        $attendee->save();
    }
}
