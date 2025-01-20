<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;

class HomeController extends Controller
{

    public function room_detail($id) {
        $room = Room::find($id);
        return view('home.detail_kamar', compact('room'));
    }
}
