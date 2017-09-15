<?php

namespace Modules\API\Http\Controllers;

use Illuminate\Http\Response;
use Modules\API\Http\Middleware\APIBase;
use Modules\API\Http\Requests\StoreRole;
use Modules\API\Http\Requests\UpdateRole;
use Modules\Core\Entities\Role;

class RoleController extends APIBase
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $roles = Role::all();

        return $this->respondWithJson($roles);
    }

    public function store(StoreRole $request)
    {
        Role::storeNew($request);

        return \response('Role created successfully!', 200);
    }

    public function show($id)
    {
        $role = Role::find($id);

        return $this->respondWithJson($role);
    }

    public function update(UpdateRole $request, $id)
    {
        Role::updateEntity($request, $id);

        return \response('Role updated successfully!', 200);
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy()
    {
    }
}
