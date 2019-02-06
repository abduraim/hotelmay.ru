<?php

namespace App\Http\Controllers;

use App\Room;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    // Вывод главной страницы
    public function index()
    {
        $rooms = Room::all();
        return view('welcome', compact(['rooms']));
    }
}
