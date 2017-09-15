<?php

namespace Modules\Core\Entities;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Modules\API\Http\Requests\StorePermission;
use Modules\API\Http\Requests\UpdatePermission;

class Permission extends Model
{
    protected $table = 'permissions';

    protected $fillable = [
        'name', 'title'
    ];

    public function role()
    {
        return $this-$this->belongsTo(Role::class);
    }

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
