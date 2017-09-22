<?php

namespace Modules\API\Http\Controllers;

use Illuminate\Http\Response;
use Modules\API\Http\Middleware\APIBase;
use Modules\API\Http\Requests\StorePage;
use Modules\API\Http\Requests\UpdatePage;
use Modules\Core\Entities\Page;

class PageController extends APIBase
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $pages = Page::all();

        return $this->respondWithJson($pages);
    }

    /**
     * Stores a new entity.
     *
     * @param StorePage $request
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Symfony\Component\HttpFoundation\Response
     */
    public function store(StorePage $request)
    {
        Page::storeNew($request);

        return \response('Page created successfully!', 200);
    }

    /**
     * Returns the related entity.
     *
     * @param $slug
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($slug)
    {
        $page = Page::where('slug', '=', $slug)->first();

        return $this->respondWithJson($page);
    }

    /**
     * Updates the related entity.
     *
     * @param UpdatePage $request
     * @param $id
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Symfony\Component\HttpFoundation\Response
     */
    public function update(UpdatePage $request, $id)
    {
        Page::updateEntity($request, $id);

        return \response('Page updated successfully!', 200);
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy()
    {
    }
}
