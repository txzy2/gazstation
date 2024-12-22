<?php

namespace App\Http\Controllers;

class TestController extends Controller
{
    public function index() {
        \Illuminate\Support\Facades\Log::channel('debug')->info('test works');
        return parent::sendResponse("Test is success");
    }
}
