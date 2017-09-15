<?php

namespace Modules\API\Http\Controllers;

use Illuminate\Http\Response;
use Modules\API\Http\Middleware\APIBase;
use Modules\API\Http\Requests\StorePermission;
use Modules\API\Http\Requests\UpdatePermission;
use Modules\Core\Entities\Permission;

class PermissionController extends APIBase
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $permissions = Permission::all();

        return $this->respondWithJson($permissions);
    }

    public function store(StorePermission $request)
    {
        Permission::storeNew($request);

        return \response('Permission created successfully!', 200);
    }

    public function show($id)
    {
        $permission = Permission::find($id);

        return $this->respondWithJson($permission);
    }

    public function update(UpdatePermission $request, $id)
    {
        Permission::updateEntity($request, $id);

        return \response('Permission updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy()
    {
    }
}
