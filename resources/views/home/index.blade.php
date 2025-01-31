<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    @include('home.css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<!-- body -->

<body class="main-layout">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="{{ asset('images/loading.gif') }}" alt="#" /></div>
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
    <script type="text/javascript">
        $(window).scroll(function() {
            sessionStorage.scrollTop = $(this).scrollTop();
        });
        $(document).ready(function() {
            if (sessionStorage.scrollTop != "undefined") {
                $(window).scrollTop(sessionStorage.scrollTop);
            }
        });
    </script>
</body>

</html>
