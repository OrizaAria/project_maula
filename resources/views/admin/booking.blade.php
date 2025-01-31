<!DOCTYPE html>
<html>

<head>
    @include('admin.css')
    <style>
        th {
            color: rgb(255, 255, 255);
            text-align: center;
            vertical-align: middle;
            vertical-align: middle;
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
                            <tr style="text-align: center">
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
                                <th scope="col">Delete</th>
                                <th scope="col">Update Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $data)
                                <tr style="text-align: center">
                                    <td>{{ $data->id_kamar }}</td>
                                    <td>{{ $data->nama }}</td>
                                    <td>{{ $data->email }}</td>
                                    <td>{{ $data->phone }}</td>
                                    <td>{{ $data->tanggal_masuk }}</td>
                                    <td>{{ $data->tanggal_keluar }}</td>
                                    <td>
                                        @if ($data->status == 'Diterima')
                                            <span style="color: green">Diterima</span>
                                        @endif
                                        @if ($data->status == 'Ditolak')
                                            <span style="color: red">Ditolak</span>
                                        @endif
                                        @if ($data->status == 'menunggu')
                                            <span style="color: yellow">Menunggu</span>
                                        @endif
                                    </td>
                                    <td>{{ $data->room->nama_kamar }}</td>
                                    <td>{{ $data->room->harga }}</td>
                                    <td>
                                        <img src="room/{{ $data->room->gambar }}" alt="" width="100">
                                    </td>
                                    <td>
                                        <a onclick="return confirm('Apakah Anda Ingin Menghapus Booking?')"
                                            class="btn btn-outline-danger"
                                            href="{{ url('delete_booking', $data->id) }}">Delete</a>
                                    </td>
                                    <td>
                                        <span style="padding-bottom: 10px; display:flex;">
                                            <a class="btn btn-outline-success"
                                                href="{{ url('terima_booking', $data->id) }}">Terima</a>
                                        </span>
                                        <a class="btn btn-outline-danger"
                                            href="{{ url('tolak_booking', $data->id) }}">Tolak</a>
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
