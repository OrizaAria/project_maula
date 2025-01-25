<!DOCTYPE html>
<html lang="en">

<head>
    @include('home.css')
    <style type="text/css">
        label {
            display: inline-block;
            width: 200px;
        }

        input {
            width: 100%;
        }

            {
            box-sizing: border-box;
        }

        .button-container {
            display: flex;
            gap: 200px;
            width: 100%;
        }

        .btn {
            display: block !important;
            width: 100% !important;
            text-align: center;
        }
    </style>
    {{-- <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> --}}
</head>
<!-- body -->

<body class="main-layout">
    <!-- loader  -->
    {{-- <div class="loader_bg">
        <div class="loader"><img src="{{ asset('images/loading.gif') }}" alt="#" /></div>
    </div> --}}
    <!-- end loader -->
    <!-- header -->
    @include('home.header')

    <!-- end about -->
    <!-- our_room -->
    <div class="our_room">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Our Room</h2>
                        <p>Lorem Ipsum available, but the majority have suffered </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7">
                    <div id="ser_hover" class="room">
                        <div style="padding: 20px" class="room_img">
                            <figure><img style="height: 200px; width: 700px" src="/room/{{ $room->gambar }}"
                                    alt="#" /></figure>
                        </div>
                        <div class="bed_room">
                            <h2>{{ $room->nama_kamar }}</h2>
                            <p style="padding: 12px">{{ $room->deskripsi }}</p>
                            <h4 style="padding: 12px">type_kamar : {{ $room->type_kamar }}</h4>
                            <h4>Free Wifi : {{ $room->wifi }}</h4>
                            <h3 style="padding: 12px">Harga : {{ $room->harga }}</h3>
                        </div>
                    </div>
                </div>
                <div class="md-4">
                    <h1 style="font-size: 40px!important;">Book Room</h1>
                    @if (session()->has('massage'))
                        <div class="alert alert-success">
                            <button type="button" class="close" data-bs-dismiss="alert">X</button>
                            {{ session()->get('massage') }}
                        </div>
                    @endif
                    @if ($errors)
                        @foreach ($errors->all() as $errors)
                            <li style="color:red">
                                {{ $errors }}
                            </li>
                        @endforeach
                    @endif
                    <form action="{{ url('tambah_booking', $room->id) }}" method="Post">
                        @csrf
                        <div>
                            <label>Nama</label>
                            <input type="text" name="nama"
                                @if (Auth::id()) value="{{ Auth::user()->name }}" @endif>
                        </div>
                        <div>
                            <label>Email</label>
                            <input type="email" name="email"
                                @if (Auth::id()) value="{{ Auth::user()->email }}" @endif>
                        </div>
                        <div>
                            <label>Phone</label>
                            <input type="number" name="phone"
                                @if (Auth::id()) value="{{ Auth::user()->phone }}" @endif>
                        </div>
                        <div>
                            <label>Tanggal Masuk</label>
                            <input type="date" name="TanggalMasuk" id="TanggalMasuk"
                                min="{{ \Carbon\Carbon::today()->toDateString() }}">
                        </div>
                        <div>
                            <label>Tanggal Keluar</label>
                            <input type="date" name="TanggalKeluar" id="TanggalKeluar"
                                min="{{ \Carbon\Carbon::today()->toDateString() }}">
                        </div>
                        <div style="padding-top: 20px"></div>
                        <div>
                            <li class="button" style="padding-bottom: 20px">
                                <input type="submit" class="btn btn-outline-primary" value="Book Room">
                            </li>
                            <a href="{{ url('/') }}" class="btn btn-outline-danger">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end contact -->
    <!--  footer -->
    @include('home.footer')
    <!-- end footer -->
    <!-- Javascript files-->
    @include('home.js')
</body>

</html>
