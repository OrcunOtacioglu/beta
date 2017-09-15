<?php

namespace Modules\Core\Entities;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Modules\API\Http\Requests\StoreCategory;
use Modules\API\Http\Requests\UpdateCategory;

class Category extends Model
{
    /**
     * Table name.
     *
     * @var string
     */
    protected $table = 'categories';

    /**
     * Mass assignabel fields.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];

    /**
     * Returns related Events.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function events()
    {
        return $this->hasMany(Event::class);
    }

    /**
     * Creates a new Category entity.
     *
     * @param StoreCategory $request
     */
    public static function storeNew(StoreCategory $request)
    {
        $category = new Category();

        $category->name = $request->input('name');
        $category->created_at = Carbon::now();
        $category->updated_at = Carbon::now();

        $category->save();
    }

    /**
     * Updates the given Category entity.
     *
     * @param UpdateCategory $request
     * @param $id
     */
    public static function updateEntity(UpdateCategory $request, $id)
    {
        $category = Category::find($id);

        $category->name = $request->input('name');
        $category->updated_at = Carbon::now();

        $category->save();
    }
}
