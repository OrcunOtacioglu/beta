<?php

namespace Modules\Core\Entities;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Modules\API\Http\Requests\StoreAccount;
use Modules\API\Http\Requests\UpdateAccount;

class Account extends Model
{
    protected $table = 'accounts';

    protected $fillable = [
        'organizer_id',
        'username',
        'name',
        'surname',
        'email',
        'password',
    ];

    protected $hidden = [
        'password', 'remember_token'
    ];

    public function organizer()
    {
        return $this->belongsTo(Organizer::class);
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'account_role', 'account_id', 'role_id');
    }

    public static function storeNew(StoreAccount $request)
    {
        $account = new Account();

        $account->organizer_id = $request->input('organizer_id');
        $account->username = $request->input('username');
        $account->name = $request->input('name');
        $account->surname = $request->input('surname');
        $account->email = $request->input('email');
        $account->password = bcrypt($request->input('password'));

        $account->created_at = Carbon::now();
        $account->updated_at = Carbon::now();

        $account->save();
    }

    public static function updateEntity(UpdateAccount $request, $id)
    {
        $account = Account::find($id);

        $account->organizer_id = $request->input('organizer_id');
        $account->username = $request->input('username');
        $account->name = $request->input('name');
        $account->surname = $request->input('surname');
        $account->email = $request->input('email');
        $account->password = bcrypt($request->input('password'));

        $account->updated_at = Carbon::now();

        $account->save();
    }
}
