<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Contact;
use Illuminate\Http\Request;
use App\Models\Room;

class HomeController extends Controller
{

    public function room_detail($id)
    {
        $room = Room::find($id);
        return view('home.room_detail', compact('room'));
    }

    public function tambah_booking(Request $request, $id)
    {
        $request->validate([
            'TanggalMasuk' => 'required|date',
            'TanggalKeluar' => 'date|after:TanggalMasuk',
        ]);
        $data = new Booking;
        $data->id_kamar = $id;
        $data->nama = $request->nama;
        $data->email = $request->email;
        $data->phone = $request->phone;

        $TanggalMasuk = $request->TanggalMasuk;
        $TanggalKeluar = $request->TanggalKeluar;
        $isBooked = Booking::where('id_kamar', $id)
            ->where('tanggal_masuk', '<=', $TanggalKeluar)
            ->where('tanggal_keluar', '>=', $TanggalMasuk)->exists();

        if ($isBooked) {
            return redirect()->back()->with('massage', 'Kamar Sudah Di Booking! cobalah tanggal lain');
        } else {
            $data->tanggal_masuk = $request->TanggalMasuk;
            $data->tanggal_keluar = $request->TanggalKeluar;
        }
        $data->save();
        return redirect()->back()->with('massage', 'Kamar Berhasil Di Booking!');
    }
    public function contact(Request $request)
    {
        $contact = new Contact;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->massage = $request->massage;

        $contact->save();
        return redirect()->back()->with('message', 'Pesan Telah Disampaikan!');
    }
}
