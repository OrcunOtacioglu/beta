<?php

namespace Modules\Core\Entities;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Modules\API\Http\Requests\StoreRole;
use Modules\API\Http\Requests\UpdateRole;

class Role extends Model
{
    protected $table = 'roles';

    protected $fillable = [
        'name',
        'title',
        'level'
    ];

    public function accounts()
    {
        return $this->belongsToMany(Account::class, 'account_role', 'role_id', 'account_id');
    }

    public function permissions()
    {
        return $this->hasMany(Permission::class);
    }

    public static function storeNew(StoreRole $request)
    {
        $role = new Role();

        $role->username = $request->input('username');
        $role->name = $request->input('name');
        $role->title = $request->input('title');
        $role->level = $request->input('level');

        $role->created_at = Carbon::now();
        $role->updated_at = Carbon::now();

        $role->save();
    }

    public static function updateEntity(UpdateRole $request, $id)
    {
        $role = Role::find($id);

        $role->username = $request->input('username');
        $role->name = $request->input('name');
        $role->title = $request->input('title');
        $role->level = $request->input('level');

        $role->updated_at = Carbon::now();

        $role->save();
    }
}
