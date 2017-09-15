<?php

namespace Modules\API\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\API\Http\Middleware\APIBase;
use Modules\API\Http\Requests\StoreRate;
use Modules\API\Http\Requests\UpdateRate;
use Modules\Core\Entities\Rate;

class RateController extends APIBase
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $rates = Rate::all();

        return $this->respondWithJson($rates);
    }

    public function store(StoreRate $request)
    {
        Rate::storeNew($request);

        return \response('Rate created successfully!', 200);
    }

    public function show($id)
    {
        $rate = Rate::find($id);

        return $this->respondWithJson($rate);
    }

    public function update(UpdateRate $request, $id)
    {
        Rate::updateEntity($request, $id);

        return \response('Rate updated successfully!', 200);
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy()
    {
    }
}
