<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Room;
class HomeController extends Controller
{
    public function index()
    {
        $rooms=Room::latest()->limit(10)->get();
        return view('index',compact('rooms'));
    }
}
