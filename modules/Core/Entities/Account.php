<?php

namespace Modules\Core\Entities;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Modules\API\Http\Requests\StoreAccount;
use Modules\API\Http\Requests\UpdateAccount;

class Account extends Model
{
    /**
     * Table name
     *
     * @var string
     */
    protected $table = 'accounts';

    /**
     * Mass assignable fields.
     *
     * @var array
     */
    protected $fillable = [
        'organizer_id',
        'username',
        'name',
        'surname',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token'
    ];

    /**
     * Returns related Organizer
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function organizer()
    {
        return $this->belongsTo(Organizer::class);
    }

    /**
     * Returns related Roles
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function roles()
    {
        return $this->belongsToMany(Role::class, 'account_role', 'account_id', 'role_id');
    }

    /**
     * Creates a new Account entity.
     *
     * @param StoreAccount $request
     */
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

    /**
     * Updates the given Account entity.
     *
     * @param UpdateAccount $request
     * @param $id
     */
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
