<?php

namespace Modules\Core\Entities;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Modules\API\Http\Requests\StoreOrderItem;
use Modules\API\Http\Requests\UpdateOrderItem;
use Modules\Core\Lib\Helpers;

class OrderItem extends Model
{
    protected $table = 'order_items';

    protected $fillable = [
        'order_id',
        'product_identifier',
        'quantity',
        'unit_price',
        'subtotal'
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public static function storeNew(StoreOrderItem $request)
    {
        $orderItem = new OrderItem();

        $orderItem->order_id = $request->input('order_id');
        $orderItem->product_identifier = Helpers::generateUniqueIdentifier();
        $orderItem->quantity = $request->input('quantity');
        $orderItem->unit_price = $request->input('unit_price');
        $orderItem->subtotal = $request->input('subtotal');

        $orderItem->created_at = Carbon::now();
        $orderItem->updated_at = Carbon::now();

        $orderItem->save();
    }

    public static function updateEntity(UpdateOrderItem $request, $id)
    {
        $orderItem = OrderItem::find($id);

        $orderItem->quantity = $request->input('quantity');
        $orderItem->unit_price = $request->input('unit_price') !== null ?
            $request->input('unit_price') : $orderItem->unit_price;
        $orderItem->subtotal = $request->input('subtotal');

        $orderItem->updated_at = Carbon::now();

        $orderItem->save();
    }
}
