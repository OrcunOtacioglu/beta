<?php

namespace Modules\Core\Entities;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Modules\API\Http\Requests\StorePage;
use Modules\API\Http\Requests\UpdatePage;
use Modules\Core\Lib\Helpers;

class Page extends Model
{
    protected $table = 'pages';

    protected $fillable = [
        'title',
        'slug',
        'content'
    ];

    public static function storeNew(StorePage $request)
    {
        $page = new Page();

        $page->title = $request->input('title');
        $page->slug = Helpers::sluggify($page->title);
        $page->content = $request->input('content');

        $page->creted_at = Carbon::now();
        $page->updated_at = Carbon::now();

        $page->save();
    }

    public static function updateEntity(UpdatePage $request, $id)
    {
        $page = Page::find($id);

        $page->title = $request->input('title');
        $page->slug = Helpers::sluggify($page->title);
        $page->content = $request->input('content');

        $page->updated_at = Carbon::now();

        $page->save();
    }
}
