<?php

namespace Modules\Core\Entities;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Modules\API\Http\Requests\StoreCategory;
use Modules\API\Http\Requests\UpdateCategory;

class Category extends Model
{
    protected $table = 'categories';

    protected $fillable = [
        'name',
    ];

    public function events()
    {
        return $this->hasMany(Event::class);
    }

    public static function storeNew(StoreCategory $request)
    {
        $category = new Category();

        $category->name = $request->input('name');
        $category->created_at = Carbon::now();
        $category->updated_at = Carbon::now();

        $category->save();
    }

    public static function updateEntity(UpdateCategory $request, $id)
    {
        $category = Category::find($id);

        $category->name = $request->input('name');
        $category->updated_at = Carbon::now();

        $category->save();
    }
}
