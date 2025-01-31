<nav id="sidebar">
    <!-- Sidebar Header-->
    <div class="sidebar-header d-flex align-items-center">
        <div class="avatar">
            <img src="{{ asset('admin/img/avatar-6.jpg') }}" alt="Avatar" class="img-fluid rounded-circle">
        </div>
        <div class="title">
            <h1 class="h5">Mark Stephen</h1>
            <p>Web Designer</p>
        </div>
    </div>

    <!-- Sidebar Navigation Menus-->
    <span class="heading">Main</span>
    <ul class="list-unstyled">
        <li class="active">
            <a href="{{ url('home') }}">
                <i class="bi bi-house-door"></i> Home
            </a>
        </li>
        <li>
            <a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse">
                <i class="bi bi-house-door-fill"></i> Kamar Hotel
            </a>
            <ul id="exampledropdownDropdown" class="collapse list-unstyled">
                <li><a href="{{ url('data_kamar') }}"><i class="bi bi-list-ul"></i> Data Kamar</a></li>
                <li><a href="{{ url('create_kamar') }}"><i class="bi bi-plus-circle"></i> Tambah Kamar</a></li>
            </ul>
        </li>
        <li>
            <a href="{{ url('booking') }}">
                <i class="bi bi-journal-bookmark"></i> Booking
            </a>
        </li>
        <li>
            <a href="{{ url('view_gallery') }}">
                <i class="bi bi-image"></i> Gallery
            </a>
        </li>
        <li>
            <a href="{{ url('pesan') }}">
                <i class="bi bi-chat-dots"></i> Massages
            </a>
        </li>
    </ul>
</nav>
