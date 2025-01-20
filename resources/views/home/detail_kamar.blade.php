<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body class="main-layout">
    @include('home.header')
    <div  class="our_room">
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
                <div class="col-md-8">
                    <div id="serv_hover" class="room">
                        <div style="padding: 20px" class="room_img">
                            <img style="height: 300px; width:800px"  src="room/{{$kamar->gambar}}" alt="#">
                        </div>
                        <div class="bed-room">
                            <h2>{{$kamar->nama_kamar}}</h2>
                            <p style="padding: 12px">{{Str::limit($kamar->deskripsi, 75)}}</p>
                            <h4 style="padding: 12px">Free Wifi : {{$kamar->wifi}}</h4>
                            <h4 style="padding: 12px">Type kamar : {{$kamar->type_kamar}}</h4>
                            <h4 style="padding: 12px">Harga : {{$kamar->harga}}</h4>
                        </div>
                    </div>
                </div>
            </div>
</body>
</html>
