<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dark Bootstrap Admin </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
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
           <div class="col-lg-12">
                    <div class="block">
                        <div class="title"><strong>Tambah Kamar</strong></div>
                        <div class="block-body">
                            <form action="{{ url('tambah_kamar') }}" method="Post" enctype="multipart/form-data"
                                class="form-horizontal">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Nama Kamar</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="kamar" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Deskripsi</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="desk" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Harga</label>
                                    <div class="col-sm-9">
                                        <input type="number" name="harga" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Type Kamar</label>
                                    <div class="col-sm-9">
                                        <select name="type" class="form-control mb-3 mb-3">
                                            <option value="rendah">Rendah</option>
                                            <option value="sedang">Sedang</option>
                                            <option value="tinggi">Tinggi</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Free Wifi</label>
                                    <div class="col-sm-9">
                                        <select name="wifi" class="form-control mb-3 mb-3">
                                            <option value="yes">Yes</option>
                                            <option value="no">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Tambah Gambar</label>
                                    <div class="col-sm-9">
                                        <input type="file" name="gambar" class="form-control">
                                    </div>
                                </div>
                                <div class="line"></div>
                                <div class="form-group row">
                                    <div class="col-sm-9 ml-auto">
                                        <button type="submit" value="" class="btn btn-primary" >Tambah
                                            Kamar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
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
