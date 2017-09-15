<?php

namespace Modules\Core\Entities;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Modules\API\Http\Requests\StoreRole;
use Modules\API\Http\Requests\UpdateRole;

class Role extends Model
{
    /**
     * Table name.
     *
     * @var string
     */
    protected $table = 'roles';

    /**
     * Mass assignable fields.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'title',
        'level'
    ];

    /**
     * Returns the related Account entities.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function accounts()
    {
        return $this->belongsToMany(Account::class, 'account_role', 'role_id', 'account_id');
    }

    /**
     * Returns the related Permission entities.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function permissions()
    {
        return $this->hasMany(Permission::class);
    }

    /**
     * Creates a new Role entity.
     *
     * @param StoreRole $request
     */
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

    /**
     * Updates the given Role entity.
     *
     * @param UpdateRole $request
     * @param $id
     */
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
