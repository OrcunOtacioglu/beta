<?php

namespace Modules\API\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\API\Http\Middleware\APIBase;
use Modules\Core\Entities\Image;

class ImageController extends APIBase
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $images = Image::all();

        return $this->respondWithJson($images);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'file' => 'required|mimes:jpg,jpeg,png'
        ]);

        $file = $request->file('file');

        $name = time() . $file->getClientOriginalName();

        // @TODO GET THE DESTINATION DINAMICALLY FROM SETTINGS.
        // @TODO EXTRACT THIS PROCESS TO IMAGE ENTITY.
        $file->move('storage/media', $name);

        return $name;
    }

    public function show($path)
    {
        $image = Image::where('path', '=', $path)->first();

        return $this->respondWithJson($image);
    }

    public function update(Request $request, $id)
    {
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy()
    {
    }
}
