<section id="gallery">
    <div class="gallery">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>gallery</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($gallery as $gallery)
                    <div class="col-md-3 col-sm-6">
                        <div class="gallery_img">
                            <figure><img style="height: 200px!important; width: 300px!important;"
                                    src="/gallery/{{ $gallery->gambar }}" alt="#" /></figure>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
