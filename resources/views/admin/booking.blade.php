<!DOCTYPE html>
<html>

<head>
    @include('admin.css')
    <style>
        th {
            color: rgb(255, 255, 255);
        }

        .description-container {
            position: relative;
        }

        .description-summary {
            display: block;
        }

        .description-text {
            display: none;
            /* Sembunyikan teks lengkap secara default */
        }

        .read-more {
            display: block;
            color: rgb(205, 205, 216);
            cursor: pointer;
            text-decoration: underline;
        }

        .read-more.active {
            color: red;
        }
    </style>
</head>

<body>
    @include('admin.header')
    <div class="d-flex align-items-stretch">
        @include('admin.sidebar')
        <div class="page-content">
            <div class="page-header">
                <div class="container-fluid">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID Kamar</th>
                                <th scope="col">Nama Pemesan</th>
                                <th scope="col">Email</th>
                                <th scope="col">No. HP</th>
                                <th scope="col">Tanggal Masuk</th>
                                <th scope="col">Tanggal Keluar</th>
                                <th scope="col">Status</th>
                                <th scope="col">Nama Kamar</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Gambar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $data)
                                <tr>
                                    <td>{{ $data->id_kamar }}</td>
                                    <td>{{ $data->nama }}</td>
                                    <td>{{ $data->email }}</td>
                                    <td>{{ $data->phone }}</td>
                                    <td>{{ $data->tanggal_masuk }}</td>
                                    <td>{{ $data->tanggal_keluar }}</td>
                                    <td>{{ $data->status }}</td>
                                    <td>{{ $data->room->nama_kamar }}</td>
                                    <td>{{ $data->room->harga }}</td>
                                    <td>
                                        <img src="room/{{ $data->room->gambar }}" alt="" width="100">
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        @include('admin.footer')
        @include('admin.js')
</body>

</html>
