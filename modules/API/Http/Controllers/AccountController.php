<?php

namespace Modules\API\Http\Controllers;

use Illuminate\Http\Response;
use Modules\API\Http\Middleware\APIBase;
use Modules\API\Http\Requests\StoreAccount;
use Modules\API\Http\Requests\UpdateAccount;
use Modules\Core\Entities\Account;

class AccountController extends APIBase
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $accounts = Account::all();

        return $this->respondWithJson($accounts);
    }

    public function store(StoreAccount $request)
    {
        Account::storeNew($request);

        return \response('Account created successfully!', 200);
    }

    public function show($id)
    {
        $account = Account::find($id);

        return $this->respondWithJson($account);
    }

    public function update(UpdateAccount $request, $id)
    {
        Account::updateEntity($request, $id);

        return \response('Account updated successfully!', 200);
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy()
    {
    }
}
