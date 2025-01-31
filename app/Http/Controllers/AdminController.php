<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Contact;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Room;


class AdminController extends Controller
{
    public function index()
    {
        if (Auth::id()) {
            $usertype = Auth()->user()->usertype;

            if ($usertype == 'user') {
                $room = Room::all();
                $gallery = Gallery::all();

                return view('home.index', compact('room', 'gallery'));
            } else if ($usertype == 'admin') {
                return view('admin.index');
            } else {
                return redirect()->back();
            }
        }
    }

    public function home()
    {
        $room = Room::all();
        $gallery = Gallery::all();

        return view('home.index', compact('room', 'gallery'));
    }
    public function create_kamar()
    {
        return view('admin.create_kamar');
    }

    public function tambah_kamar(Request $request)
    {
        $data = new Room;
        $data->id = $request->id;
        $data->nama_kamar = $request->kamar;
        $data->deskripsi = $request->desk;
        $data->harga = $request->harga;
        $data->type_kamar = $request->type;
        $data->wifi = $request->wifi;
        $gambar = $request->gambar;
        if ($gambar) {
            $gambarnama = time() . '.' . $gambar->getClientOriginalExtension();
            $request->gambar->move('room', $gambarnama);
            $data->gambar = $gambarnama;
        }
        $data->save();

        return redirect()->back()->with('success', 'Kamar Berhasil Ditambahkan');
    }

    public function data_kamar()
    {
        $data = Room::all();

        return view('admin.data_kamar', compact('data'));
    }

    public function kamar_update($id)
    {
        $data = Room::find($id);

        return view('admin.update_kamar', compact('data'));
    }

    public function edit_kamar(Request $request, $id)
    {
        $data = Room::find($id);
        $data->nama_kamar = $request->kamar;
        $data->deskripsi = $request->desk;
        $data->harga = $request->harga;
        $data->type_kamar = $request->type;
        $data->wifi = $request->wifi;
        $gambar = $request->gambar;

        if ($gambar) {
            $gambarnama = time() . '.' . $gambar->getClientOriginalExtension();
            $request->gambar->move('room', $gambarnama);
            $data->gambar = $gambarnama;
        }
        $data->save();

        return redirect('data_kamar')->with('success', 'Kamar Berhasil Di Update');
    }

    public function kamar_delete($id)
    {
        $data = Room::find($id);
        $data->delete();

        return redirect()->back()->with('success', 'Room Berhasil Dihapus');
    }

    public function booking()
    {
        $data = Booking::all();

        return view('admin.booking', compact('data'));
    }
    public function delete_booking($id)
    {
        $data = Booking::find($id);
        $data->delete();

        return redirect()->back();
    }

    public function terima_booking($id)
    {
        $booking = Booking::find($id);
        $booking->status = 'Diterima';
        $booking->save();

        return redirect()->back();
    }
    public function tolak_booking($id)
    {
        $booking = Booking::find($id);
        $booking->status = 'Ditolak';
        $booking->save();

        return redirect()->back();
    }

    public function view_gallery()
    {
        $gallery = Gallery::all();

        return view('admin.gallery', compact('gallery'));
    }

    public function upload_gallery(Request $request)
    {
        $data = new Gallery;
        $gambar = $request->gambar;
        if ($gambar) {
            $gambarnama = time() . '.' . $gambar->getClientOriginalExtension();
            $request->gambar->move('gallery', $gambarnama);
            $data->gambar = $gambarnama;
            $data->save();

            return redirect()->back();
        }
    }

    public function delete_gallery($id)
    {
        $data = Gallery::find($id);
        $data->delete();

        return redirect()->back();
    }

    public function pesan()
    {
        $data = Contact::all();
        return view('admin.pesan', compact('data'));
    }
}
