<?php

namespace Modules\API\Http\Controllers;

use Illuminate\Http\Response;
use Modules\API\Http\Middleware\APIBase;
use Modules\API\Http\Requests\StoreCategory;
use Modules\API\Http\Requests\UpdateCategory;
use Modules\Core\Entities\Category;

class CategoryController extends APIBase
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $categories = Category::all();

        return $this->respondWithJson($categories);
    }

    /**
     * Creates a new entity.
     *
     * @param StoreCategory $request
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Symfony\Component\HttpFoundation\Response
     */
    public function store(StoreCategory $request)
    {
        Category::storeNew($request);

        return \response('Category created successfully!', 200);
    }

    /**
     * Show specified entity.
     *
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        $category = Category::find($id);

        return $this->respondWithJson($category);
    }

    /**
     * Update specified entity.
     *
     * @param UpdateCategory $request
     * @param $id
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Symfony\Component\HttpFoundation\Response
     */
    public function update(UpdateCategory $request, $id)
    {
        Category::updateEntity($request, $id);

        return \response('Category updated successfully!', 200);
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy()
    {
    }
}
