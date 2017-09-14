<?php

namespace Modules\API\Http\Controllers;

use Illuminate\Http\Response;
use Modules\API\Http\Middleware\APIBase;
use Modules\API\Http\Requests\StoreOrganizer;
use Modules\API\Http\Requests\UpdateOrganizer;
use Modules\Core\Entities\Organizer;

class OrganizerController extends APIBase
{
    /**
     * Returns all Organizers
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $organizers = Organizer::all();

        return $this->respondWithJson($organizers);
    }

    /**
     * Store a newly craeted entity.
     *
     * @param StoreOrganizer $request
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Symfony\Component\HttpFoundation\Response
     */
    public function store(StoreOrganizer $request)
    {
        Organizer::storeNew($request);

        return \response('Organizer created successfully!', 200);
    }

    /**
     * Shows specified entity.
     *
     * @param $id
     * @return mixed
     */
    public function show($id)
    {
        $organizer = Organizer::find($id);

        return $this->respondWithJson($organizer);
    }

    /**
     * Updates specified entity.
     *
     * @param UpdateOrganizer $request
     * @param $id
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Symfony\Component\HttpFoundation\Response
     */
    public function update(UpdateOrganizer $request, $id)
    {
        Organizer::updateEntity($request, $id);

        return \response('Organizer updated successfully!', 200);
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy()
    {
    }
}
