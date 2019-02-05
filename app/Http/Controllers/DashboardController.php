<?php

namespace App\Http\Controllers;

use App\Room;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $rooms = Room::all();
        return view('dashboard.index', compact(['rooms']));
    }
}
