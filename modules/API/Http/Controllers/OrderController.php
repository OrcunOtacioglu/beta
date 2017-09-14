<?php

namespace Modules\API\Http\Controllers;

use Illuminate\Http\Response;
use Modules\API\Http\Middleware\APIBase;
use Modules\API\Http\Requests\StoreOrder;
use Modules\API\Http\Requests\UpdateOrder;
use Modules\Core\Entities\Order;

class OrderController extends APIBase
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $orders = Order::all();

        return $this->respondWithJson($orders);
    }


    public function store(StoreOrder $request)
    {
        Order::storeNew($request);

        return \response('Order created successfully!', 200);
    }


    public function show($reference)
    {
        $order = Order::with('items')->where('reference', '=', $reference)->first();

        return $this->respondWithJson($order);
    }


    public function update(UpdateOrder $request, $reference)
    {
        Order::updateEntity($request, $reference);

        return \response('Order successfully updated!', 200);
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy()
    {
    }
}
