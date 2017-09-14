<?php


namespace Modules\API\Http\Middleware;


use App\Http\Controllers\Controller;

class APIBase extends Controller
{
    public function respondWithJson($data)
    {
        $headers = ['Content-Type' => 'application/json'];

        return response()->json($data, 200, $headers, JSON_UNESCAPED_UNICODE);
    }
}