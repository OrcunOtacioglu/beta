<?php

namespace Modules\Core\Entities;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Modules\API\Http\Requests\StoreOrder;
use Modules\API\Http\Requests\UpdateOrder;
use Modules\Core\Lib\Helpers;

class Order extends Model
{
    /**
     * Table name.
     *
     * @var string
     */
    protected $table = 'orders';

    /**
     * Mass assignable fields.
     *
     * @var array
     */
    protected $fillable = [
        'attendee_id',
        'event_id',
        'reference',
        'transaction_id',
        'status',
        'currency',
        'total'
    ];

    /**
     * Returns related Attendee entity.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function attendee()
    {
        return $this->belongsTo(Attendee::class);
    }

    /**
     * Returns related Event entity.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function event()
    {
        return $this->belongsTo(Event::class);
    }

    /**
     * Returns related Item entities.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }

    public function seats()
    {
        return $this->hasMany(Seat::class);
    }

    /**
     * Creates a new Order entity.
     *
     * @param StoreOrder $request
     */
    public static function storeNew(StoreOrder $request)
    {
        $order = new Order();

        // @TODO GET THIS FROM LOGGED IN ATTENDEE
        $order->attendee_id = $request->input('attendee_id');
        $order->event_id = $request->input('event_id');

        $order->reference = Helpers::generateOrderRef();
        $order->transaction_id = Helpers::generateTransactionID();

        $order->status = 0;

        // @TODO DYNAMICALLY GET CURRENCY CODE
        $order->currency = $request->input('currency') !== null ?
            $request->input('currency') : 949;

        $order->total = $request->input('total');

        $order->created_at = Carbon::now();
        $order->updated_at = Carbon::now();

        $order->save();
    }

    /**
     * Updates the given Order entity.
     *
     * @param UpdateOrder $request
     * @param $reference
     */
    public static function updateEntity(UpdateOrder $request, $reference)
    {
        $order = Order::where('reference', '=', $reference)->first();

        $order->attendee_id = $request->input('attendee_id') !== null ?
            $request->input('attendee_id') : $order->attendee_id;
        $order->event_id = $request->input('event_id') !== null ?
            $request->input('event_id') : $order->event_id;

        $order->status = $request->input('status');
        $order->currency = $request->input('currency');
        $order->total = $request->input('total');

        $order->updated_at = Carbon::now();

        $order->save();
    }
}
