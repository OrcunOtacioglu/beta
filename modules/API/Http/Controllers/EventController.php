<?php

namespace Modules\API\Http\Controllers;

use Illuminate\Http\Response;
use Modules\API\Http\Middleware\APIBase;
use Modules\API\Http\Requests\StoreEvent;
use Modules\API\Http\Requests\UpdateEvent;
use Modules\Core\Entities\Event;

class EventController extends APIBase
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $events = Event::all();

        return $this->respondWithJson($events);
    }

    /**
     * Creates a new entity.
     *
     * @param StoreEvent $request
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Symfony\Component\HttpFoundation\Response
     */
    public function store(StoreEvent $request)
    {
        Event::storeNew($request);

        return \response('Event created successfully!', 200);
    }

    /**
     * Show the specified entity.
     *
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        $event = Event::find($id);

        return $this->respondWithJson($event);
    }

    /**
     * Updates specified entity.
     *
     * @param UpdateEvent $request
     * @param $id
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Symfony\Component\HttpFoundation\Response
     */
    public function update(UpdateEvent $request, $id)
    {
        Event::updateEntity($request, $id);

        return \response('Event updated successfully!', 200);
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy()
    {
    }
}
