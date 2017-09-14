<?php

namespace Modules\Core\Entities;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Modules\API\Http\Requests\StoreAttendee;
use Modules\API\Http\Requests\UpdateAttendee;

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
