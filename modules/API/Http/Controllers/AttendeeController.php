<?php

namespace Modules\API\Http\Controllers;

use Illuminate\Http\Response;
use Modules\API\Http\Middleware\APIBase;
use Modules\API\Http\Requests\StoreAttendee;
use Modules\API\Http\Requests\UpdateAttendee;
use Modules\Core\Entities\Attendee;

class AttendeeController extends APIBase
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $attendees = Attendee::all();

        return $this->respondWithJson($attendees);
    }

    /**
     * Creates new entity.
     *
     * @param StoreAttendee $request
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Symfony\Component\HttpFoundation\Response
     */
    public function store(StoreAttendee $request)
    {
        Attendee::storeNew($request);

        return \response('Attendee created successfully!', 200);
    }


    public function show($id)
    {
        $attendee = Attendee::find($id);

        return $this->respondWithJson($attendee);
    }


    public function update(UpdateAttendee $request, $id)
    {
        Attendee::updateEntity($request, $id);

        return \response('Attendee updated successfully', 200);
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy()
    {
    }
}
