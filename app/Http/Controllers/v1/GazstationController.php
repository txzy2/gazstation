<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GazstationController extends Controller
{
    /**
     * Handles the main request for the controller.
     *
     * Logs the message "gaz works" to the debuging channel.
     * Returns a JSON response with the message "GazController is working".
     *
     * @return \Illuminate\Http\JsonResponse JSON response with the message and status code 200.
     */
    public function index()
    {
        \Illuminate\Support\Facades\Log::channel('debuging')->info('gaz works');
        return parent::sendResponse("GazController is working", 200);
    }
}
