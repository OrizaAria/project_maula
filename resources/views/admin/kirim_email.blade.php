<!DOCTYPE html>
<html>

<head>
    <base href="/public">
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
                    <center>
                        <h1 style="font-size: 30px; font-weight:bold;">Email Dikirim Ke {{ $data->name }}</h1>
                        <form action="{{ url('mail/' . $data->id) }}" method="POST">
                            @csrf
                            <div class="form-group row">
                                <label class="col-sm-3 form-control-label"> Greeting</label>
                                <div class="col-sm-9">
                                    <input type="text" name="greeting" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 form-control-label">Isi Email</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="isi" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 form-control-label">Action Text</label>
                                <div class="col-sm-9">
                                    <input type="text" name="action_text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 form-control-label">Action Url</label>
                                <div class="col-sm-9">
                                    <input type="text" name="action_url" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 form-control-label">Penutupan</label>
                                <div class="col-sm-9">
                                    <input type="text" name="penutupan" class="form-control">
                                </div>
                            </div>
                            <div class="line"></div>
                            <div class="form-group row">
                                <div class="col-sm-9 ml-auto">
                                    <button type="submit" value="" class="btn btn-outline-primary">Kirim
                                        Email</button>
                                </div>
                            </div>
                        </form>
                    </center>
                </div>
            </div>
        </div>
        @include('admin.footer')
        <!-- JavaScript files-->
        @include('admin.js')
</body>

</html>
