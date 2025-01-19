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
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var readMoreLinks = document.querySelectorAll('.read-more');

            readMoreLinks.forEach(function(link) {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    var container = this.parentElement;
                    var text = container.querySelector('.description-text');
                    var summary = container.querySelector('.description-summary');

                    if (text.style.display === 'none') {
                        text.style.display = 'block';
                        summary.style.display = 'none';
                        this.textContent = 'Read Less';
                    } else {
                        text.style.display = 'none';
                        summary.style.display = 'block';
                        this.textContent = 'Read More';
                    }
                });
            });
        });
    </script>
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
                        <tr>
                            <th scope="col">Nama Kamar</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Type Kamar</th>
                            <th scope="col">Wifi</th>
                            <th scope="col">Gambar</th>
                            <th scope="col">Update</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $data)

                    <tr>
                        <td>{{$data->nama_kamar }}</td>
                        <td><div class="description-container">
                            <p class="description=text">{{$data->deskripsi}}</p>
                            <p class="description-summary">{{ Str::limit($data->deskripsi, 100)}}</p>
                            <a href="#" class="read-more">Read More</a>
                        </div></td>
                        <td>{{$data->harga}}</td>
                        <td>{{$data->type_kamar}}</td>
                        <td>{{$data->wifi}}</td>
                        <td>
                            <img width="75" src="room/{{$data->gambar}}" alt="">
                        </td>

                            <td>
                                <a class="btn btn-outline-warning" href="">Update</a>
                            </td>
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
    <script src="{{ asset('admin/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('admin/vendor/popper.js/umd/popper.min.js')}}"> </script>
    <script src="{{ asset('admin/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('admin/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script src="{{ asset('admin/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{ asset('admin/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{ asset('admin/js/charts-home.js')}}"></script>
    <script src="{{ asset('admin/js/front.js')}}"></script>
  </body>
</html>
