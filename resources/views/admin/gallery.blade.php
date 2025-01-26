<!DOCTYPE html>
<html>

<head>
    @include('admin.css')
</head>

<body>
    @include('admin.header')
    <div class="d-flex align-items-stretch">
        @include('admin.sidebar')
        <div class="page-content">
            <div class="page-header">
                <div class="container-fluid">
                    <center>
                        <form action="{{ url('upload_gallery') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div style="padding: 30px;">
                                <label style="color: white; font-weight:bold">Upload Gambar</label>
                                <input type="file" name="gambar" required>

                                <input class="btn btn-outline-primary" type="submit" value="Tambah Gambar">
                            </div>
                        </form>
                        <h1 style="font-size: 40px; font-weight: bolder; color: white;">
                            Gallery
                        </h1>
                        <div class="row">
                            @foreach ($gallery as $gallery)
                                <div class="col-md-4">
                                    <img style="height: 200px!important; width: 300px!important; padding: 10px!important;"
                                        src="/gallery/{{ $gallery->gambar }}" alt="">
                                    <a class="btn btn-outline-danger"
                                        href="{{ url('delete_gallery', $gallery->id) }}">Delete
                                        Gambar</a>
                                </div>
                            @endforeach
                        </div>

                    </center>
                </div>
            </div>
        </div>
        @include('admin.footer')
        @include('admin.js')
</body>

</html>
