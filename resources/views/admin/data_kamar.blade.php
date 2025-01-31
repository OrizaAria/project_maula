<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dark Bootstrap Admin </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <style>
        .description-summary {
            font-size: 14px;
            margin-bottom: 10px;
        }

        .full-description {
            font-size: 14px;
            margin-top: 10px;
        }

        .read-more {
            color: #007BFF;
            cursor: pointer;
            text-decoration: underline;
        }
    </style>
    @include('admin.css')
</head>

<body>
    @include('admin.header')
    <div class="d-flex align-items-stretch">
        <!-- Sidebar Navigation-->
        @include('admin.sidebar')
        <!-- Sidebar Navigation end-->
        <div class="page-content">
            <div class="page-header">
                <div class="container-fluid">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <table class="table">
                        <thead>
                            <tr style="text-align: center">
                                <th scope="col">Nama Kamar</th>
                                <th scope="col">Deskripsi</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Type Kamar</th>
                                <th scope="col">Wifi</th>
                                <th scope="col">Gambar</th>
                                <th scope="col">Update</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $data)
                                <tr style="text-align: center">
                                    <td>{{ $data->nama_kamar }}</td>
                                    <td>
                                        <div class="description-container">
                                            <p class="description-summary">{{ Str::limit($data->deskripsi, 50) }}</p>
                                            <p class="full-description" style="display: none;">{{ $data->deskripsi }}
                                            </p>
                                            <a href="#" class="read-more">Read More</a>
                                        </div>

                                    </td>
                                    <td>{{ $data->harga }}</td>
                                    <td>{{ $data->type_kamar }}</td>
                                    <td>{{ $data->wifi }}</td>
                                    <td>
                                        <img width="75" src="room/{{ $data->gambar }}" alt="">
                                    </td>
                                    <td>
                                        <a class="btn btn-outline-warning"
                                            href="{{ url('kamar_update', $data->id) }}">Update</a>
                                    </td>
                                    <td><a onclick="return confirm('Apakah Anda Ingin Menghapus Kamar')"
                                            class="btn btn-outline-danger"
                                            href="{{ url('kamar_delete', $data->id) }}">Delete</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @include('admin.footer')
    <!-- JavaScript files-->
    @include('admin.js')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        // Tunggu sampai DOM siap
        document.addEventListener('DOMContentLoaded', function() {
            // Ambil semua tombol dengan kelas 'read-more'
            const readMoreLinks = document.querySelectorAll('.read-more');

            // Iterasi untuk menambahkan event listener pada setiap tombol
            readMoreLinks.forEach(function(link) {
                link.addEventListener('click', function(e) {
                    e.preventDefault(); // Mencegah aksi default pada link

                    // Temukan container untuk tiap tombol (setiap record)
                    const container = this.closest('.description-container');
                    const fullDescription = container.querySelector('.full-description');
                    const summary = container.querySelector('.description-summary');

                    // Toggle visibility dan update teks tombol
                    if (fullDescription.style.display === 'none') {
                        fullDescription.style.display = 'block'; // Tampilkan deskripsi lengkap
                        summary.style.display = 'none'; // Sembunyikan ringkasan
                        this.textContent = 'Read Less'; // Ubah teks tombol
                    } else {
                        fullDescription.style.display = 'none'; // Sembunyikan deskripsi lengkap
                        summary.style.display = 'block'; // Tampilkan ringkasan
                        this.textContent = 'Read More'; // Ubah teks tombol kembali
                    }
                });
            });
        });
    </script>

</body>

</html>
