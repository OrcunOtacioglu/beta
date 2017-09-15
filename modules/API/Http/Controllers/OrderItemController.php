<?php

namespace Modules\API\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\API\Http\Middleware\APIBase;
use Modules\API\Http\Requests\StoreOrderItem;
use Modules\API\Http\Requests\UpdateOrderItem;
use Modules\Core\Entities\OrderItem;

class OrderItemController extends APIBase
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $orderItems = OrderItem::all();

        return $this->respondWithJson($orderItems);
    }

    /**
     * Stores new entity.
     *
     * @param StoreOrderItem $request
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Symfony\Component\HttpFoundation\Response
     */
    public function store(StoreOrderItem $request)
    {
        OrderItem::storeNew($request);

        return \response('Order Item created successfully!', 200);
    }

    /**
     * Returns specified entity.
     *
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        $orderItem = OrderItem::find($id);

        return $this->respondWithJson($orderItem);
    }

    /**
     * Updates specified entity.
     *
     * @param UpdateOrderItem $request
     * @param $id
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Symfony\Component\HttpFoundation\Response
     */
    public function update(UpdateOrderItem $request, $id)
    {
        OrderItem::updateEntity($request, $id);

        return \response('Order Item updated successfully!', 200);
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy()
    {
    }
}
