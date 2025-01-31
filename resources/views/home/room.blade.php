<section id="room">
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
                @foreach ($room as $kamar)
                    <div class="col-md-4 col-sm-6">
                        <div id="ser_hover" class="room">
                            <div style="padding-left: 50px; padding-top: 20px;" class="room_img">
                                <figure><img style="height: 200px; width: 320px" src="room/{{ $kamar->gambar }}"
                                        alt="#" /></figure>
                            </div>
                            <div class="bed_room">
                                <h3>{{ $kamar->nama_kamar }}</h3>
                                <p style="padding: 10px">{{ Str::limit($kamar->deskripsi, 100) }}</p>
                            </div>
                            <div style="padding-bottom: 30px;" class="button">
                                <a class="btn btn-outline-info" href="{{ url('room_detail', $kamar->id) }}">Detail
                                    Room</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
