<?php

namespace App\Http\Controllers;

use App\Models\Booking;
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
                return view('home.index', compact('room'));
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
        return view('home.index', compact('room'));
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
}
