<?php

namespace Modules\Core\Entities;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Modules\API\Http\Requests\StoreRate;
use Modules\API\Http\Requests\UpdateRate;

class Rate extends Model
{
    /**
     * Table name.
     *
     * @var string
     */
    protected $table = 'rates';

    /**
     * Mass assignable fileds.
     *
     * @var array
     */
    protected $fillable = [
        'organizer_id',
        'name',
        'max_quantity',
        'type',
        'price',
        'description',
        'min_allowed_per_purchase',
        'max_allowed_per_purchase',
        'sales_start_time',
        'sales_end_time',
        'status',
        'availability',
        'is_paused',
        'absorb_fees',
        'ticket_delivery'
    ];

    /**
     * Returns the related Organizer entity.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function organizer()
    {
        return $this->belongsTo(Organizer::class);
    }

    /**
     * Returns the related Event entities.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function events()
    {
        return $this->belongsToMany(Event::class, 'event_rate', 'rate_id', 'event_id');
    }

    public function seats()
    {
        return $this->hasMany(Seat::class);
    }

    /**
     * Creates a new Rate entity.
     *
     * @param StoreRate $request
     */
    public static function storeNew(StoreRate $request)
    {
        $rate = new Rate();

        $rate->organizer_id = $request->input('organizer_id');
        $rate->name = $request->input('name');
        $rate->unique_identifier = $request->input('unique_identifier');
        $rate->max_quantity = $request->input('max_quantity');
        $rate->type = $request->input('type');
        $rate->price = $request->input('price');

        $rate->description = $request->input('description');
        $rate->min_allowed_per_purchase = $request->input('min_allowed_per_purchase');
        $rate->max_allowed_per_purchase = $request->input('max_allowed_per_purchase');
        $rate->sales_start_time = $request->input('sales_start_time');
        $rate->sales_end_time = $request->input('sales_end_time');
        $rate->status = $request->input('status');
        $rate->avaliability = $request->input('availability');

        $rate->is_paused = $request->input('is_paused');
        $rate->absorb_fees = $request->input('absorb_fees');

        $rate->ticket_delivery = $request->input('ticket_delivery');

        $rate->created_at = Carbon::now();
        $rate->updated_at = Carbon::now();

        $rate->save();
    }

    /**
     * Updates the given Rate entity.
     *
     * @param UpdateRate $request
     * @param $id
     */
    public static function updateEntity(UpdateRate $request, $id)
    {
        $rate = Rate::find($id);

        $rate->organizer_id = $request->input('organizer_id');
        $rate->name = $request->input('name');
        $rate->unique_identifier = $request->input('unique_identifier');
        $rate->max_quantity = $request->input('max_quantity');
        $rate->type = $request->input('type');
        $rate->price = $request->input('price');

        $rate->description = $request->input('description');
        $rate->min_allowed_per_purchase = $request->input('min_allowed_per_purchase');
        $rate->max_allowed_per_purchase = $request->input('max_allowed_per_purchase');
        $rate->sales_start_time = $request->input('sales_start_time');
        $rate->sales_end_time = $request->input('sales_end_time');
        $rate->status = $request->input('status');
        $rate->avaliability = $request->input('availability');

        $rate->is_paused = $request->input('is_paused');
        $rate->absorb_fees = $request->input('absorb_fees');

        $rate->ticket_delivery = $request->input('ticket_delivery');

        $rate->updated_at = Carbon::now();

        $rate->save();
    }
}
