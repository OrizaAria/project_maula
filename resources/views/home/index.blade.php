<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    @include('home.css')
</head>
<!-- body -->

<body class="main-layout">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="#" /></div>
    </div>
    <!-- end loader -->
    <!-- header -->
    @include('home.header')
    <!-- end header inner -->
    <!-- end header -->
    <!-- banner -->
    @include('home.banner')
    <!-- end banner -->
    <!-- about -->
    @include('home.about')
    <!-- end about -->
    <!-- our_room -->
    @include('home.room')
    </div>
    </div>
    </div>
    <!-- end our_room -->
    <!-- gallery -->
    @include('home.gallery')
    <!-- end gallery -->
    <!-- blog -->
    @include('home.blog')
    <!-- end blog -->
    <!--  contact -->
    @include('home.contact')
    <!-- end contact -->
    <!--  footer -->
    @include('home.footer')
    <!-- end footer -->
    <!-- Javascript files-->
    @include('home.js')
</body>

</html>
