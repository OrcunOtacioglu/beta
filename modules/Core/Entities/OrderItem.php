<?php

namespace Modules\Core\Entities;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Modules\API\Http\Requests\StoreOrderItem;
use Modules\API\Http\Requests\UpdateOrderItem;
use Modules\Core\Lib\Helpers;

class OrderItem extends Model
{
    /**
     * Table name.
     *
     * @var string
     */
    protected $table = 'order_items';

    /**
     * Mass assignable fields
     *
     * @var array
     */
    protected $fillable = [
        'order_id',
        'product_identifier',
        'quantity',
        'unit_price',
        'subtotal'
    ];

    /**
     * Returns the related Order entity.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    /**
     * Creates a new Order Item entity.
     *
     * @param StoreOrderItem $request
     */
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

    /**
     * Updates the given Order Item entity.
     *
     * @param UpdateOrderItem $request
     * @param $id
     */
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
