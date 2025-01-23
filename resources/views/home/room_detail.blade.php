<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>keto</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- style css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <!-- fevicon -->
    <link rel="icon" href="{{ asset('images/fevicon.png" type="image/gif') }}" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/jquery.mCustomScrollbar.min.css') }}">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    <style type="text/css">
        label {
            display: inline-block;
            width: 200px;
        }

        input {
            width: 100%;
        }
    </style>
</head>
<!-- body -->

<body class="main-layout">
    <!-- loader  -->
    <!-- <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#"/></div>
      </div> -->
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
                            <input type="date" name="TanggalMasuk" id="TanggalMasuk">
                        </div>
                        <div>
                            <label>Tanggal Keluar</label>
                            <input type="date" name="TanggalKeluar" id="TanggalKeluar">
                        </div>
                        <div style="padding-top: 20px"></div>
                        <div>
                            <input type="submit" class="btn btn-outline-primary" value="Book Room">
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
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/jquery-3.0.0.min.js') }}"></script>
    <!-- sidebar -->
    <script src="{{ asset('js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script type="text/javascript">
        $(function() {
            var dtToday = new Date();

            var month = dtToday.getMonth() + 1;

            var day = dtToday.getDate();

            var year = dtToday.getFullYear();

            if (month < 10)
                month = '0' + month.toString();

            if (day < 10)
                day = '0' + day.toString();

            var maxDate = year + '-' + month + '-' + day;
            $('#startDate').attr('min', maxDate);
            $('#endDate').attr('min', maxDate);

        });
    </script>
</body>

</html>
