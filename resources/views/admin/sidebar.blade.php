<nav id="sidebar">
    <!-- Sidebar Header-->
    <div class="sidebar-header d-flex align-items-center">
        <div class="avatar"><img src="{{ asset('admin/img/avatar-6.jpg') }}" alt="..."
                class="img-fluid rounded-circle"></div>
        <div class="title">
            <h1 class="h5">Mark Stephen</h1>
            <p>Web Designer</p>
        </div>
    </div>
    <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
    <ul class="list-unstyled">
        <li class="active">
            <a href="{{ url('home') }}"><i class="icon-home"></i>Home</a>
        </li>
        <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i
                    class="icon-windows"></i>Kamar Hotel </a>
            <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                <li><a href="{{ url('data_kamar') }}">Data Kamar</a></li>
                <li><a href="{{ url('create_kamar') }}">Tambah Kamar</a></li>
            </ul>
        </li>
        <li>
            <a href="{{ url('booking') }}"><i class="icon-home"></i>Booking</a>
        </li>
        <li>
            <a href="{{ url('view_gallery') }}"><i class="icon-home"></i>Gallery</a>
        </li>
    </ul>
</nav>
