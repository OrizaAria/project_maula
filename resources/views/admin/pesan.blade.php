<!DOCTYPE html>
<html>

<head>
    @include('admin.css')
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
                    <table class="table">
                        <thead>
                            <tr style="text-align: center">
                                <th scope="col">Nama</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Pesan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                                <tr style="text-align: center">
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->phone }}</td>
                                    <td>
                                        <div class="description-container">
                                            @if (strlen($item->massage) > 50)
                                                <p class="description-summary">
                                                    {{ Str::limit($item->massage, 50) }}
                                                </p>
                                                <p class="full-description" style="display: none;">{{ $item->massage }}
                                                </p>
                                                <a href="#" class="read-more">Read More</a>
                                            @else
                                                <p class="description-summary">{{ $item->massage }}</p>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        @include('admin.footer')
        <!-- JavaScript files-->
        @include('admin.js')
        <script>
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
                        if (fullDescription.style.display === 'none' || fullDescription.style
                            .display === '') {
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
