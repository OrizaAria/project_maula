<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use App\Models\Room;

class HomeController extends Controller
{

    public function room_detail($id) {
        $room = Room::find($id);
        return view('home.room_detail', compact('room'));
    }

    public function tambah_booking(Request $request, $id) {
        $request->validate([
            'TanggalMasuk' => 'required|date',
            'TanggalKeluar' => 'date|after:TanggalMasuk',
        ]);
        $data = new Booking;
        $data->id_kamar = $id;
        $data->nama = $request->nama;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->tanggal_masuk = $request->TanggalMasuk;
        $data->tanggal_keluar = $request->TanggalKeluar;
        $data->save();
        return redirect()->back();

    }
}
