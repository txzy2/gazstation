<?php

namespace App\Http\Controllers;

class TestController extends Controller
{
    public function index()
    {
        return parent::sendResponse("Test is success");
    }
}
