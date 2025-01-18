<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

class AdminController extends Controller
{
    public function index () {
        if (Auth::id())
        {
            $usertype = Auth()->user()->usertype;
            if($usertype == 'user')
            {
                return view('home.index');
            } else if ($usertype == 'admin'){
                return view('admin.index');
            }else {
                return redirect()->back();
            }
        }
    }

    public function home()
    {
        return view('home.index');
    }

    public function create_kamar() {
        return view('admin.create_kamar');
    }

    public function tambah_kamar(Request $request) {
        $data = new Room;
        $data -> nama_kamar = $request ->kamar;
        $data -> deskripsi = $request->desk;
        $data -> harga = $request->harga;
        $data -> wifi = $request->wifi;
        $data -> type_kamar = $request->type;
        $gambar=$request->gambar;
        if($gambar)
        {
            $gambarnama=time().'.'.$gambar->getClientOriginalExtension();
            $request->gambar->move('room',$gambarnama);
            $data -> gambar = $gambarnama;
        }
        $data->save();
        return redirect()->back()->with('success', 'Kamar Berhasil Ditambahkan');
    }
}
