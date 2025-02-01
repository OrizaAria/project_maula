<!DOCTYPE html>
<html lang="id">

<head>
    <base href="/public">
    @include('admin.css')
    <style>
        /* Styling untuk memastikan label dan input lebih dekat */
        .form-group {
            margin-bottom: 15px;
            /* Mengurangi margin bawah antara setiap form group */
        }

        .form-control-label {
            font-weight: bold;
            margin-bottom: 5px;
            /* Mengurangi jarak antara label dan input */
            color: #333;
            text-align: left;
        }

        .form-control {
            padding: 8px 12px;
            /* Mengurangi padding untuk input agar lebih kompak */
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        /* Agar textarea juga lebih kompak */
        textarea.form-control {
            padding: 8px 12px;
            resize: vertical;
        }

        /* Menambahkan sedikit ruang antara tombol dan form */
        .btn-outline-primary {
            margin-top: 20px;
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
                    <center>
                        <h1 style="font-size: 30px; font-weight:bold; padding-bottom: 30px;">Email Dikirim Ke
                            {{ $data->name }}</h1>
                    </center>
                    <form action="{{ url('mail/' . $data->id) }}" method="POST">
                        @csrf
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Greeting</label>
                            <div class="col-sm-9">
                                <input type="text" name="greeting" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Isi Email</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="isi" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Action Text</label>
                            <div class="col-sm-9">
                                <input type="text" name="action_text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Action Url</label>
                            <div class="col-sm-9">
                                <input type="text" name="action_url" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Penutupan</label>
                            <div class="col-sm-9">
                                <input type="text" name="penutupan" class="form-control">
                            </div>
                        </div>
                        <center>
                            <div class="line"></div>
                            <div class="form-group row">
                                <div style="padding-top: 20px;" class="col-sm-9 ml-auto">
                                    <button type="submit" value="" class="btn btn-outline-primary">Kirim
                                        Email</button>
                                </div>
                            </div>
                        </center>
                    </form>
                </div>
            </div>
        </div>
        @include('admin.footer')
        <!-- JavaScript files-->
        @include('admin.js')
    </div>
</body>

</html>
