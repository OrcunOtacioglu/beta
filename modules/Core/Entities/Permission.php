<?php

namespace Modules\Core\Entities;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Modules\API\Http\Requests\StorePermission;
use Modules\API\Http\Requests\UpdatePermission;

class Permission extends Model
{
    /**
     * Table name.
     *
     * @var string
     */
    protected $table = 'permissions';

    /**
     * Mass assignable fields.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'title'
    ];

    /**
     * Returns the related Role entity.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    /**
     * Creates a new Permission entity.
     *
     * @param StorePermission $request
     */
    public static function storeNew(StorePermission $request)
    {

        $permission = new Permission();

        $permission->role_id = $request->input('role_id');
        $permission->name = $request->input('name');
        $permission->title = $request->input('title');

        $permission->created_at = Carbon::now();
        $permission->updated_at = Carbon::now();

        $permission->save();

    }

    /**
     * Updates the given Permission entity.
     *
     * @param UpdatePermission $request
     * @param $id
     */
    public static function updateEntity(UpdatePermission $request, $id)
    {
        $permission = Permission::find($id);

        $permission->role_id = $request->input('role_id');
        $permission->name = $request->input('name');
        $permission->title = $request->input('title');

        $permission->updated_at = Carbon::now();
        $permission->save();
    }
}
