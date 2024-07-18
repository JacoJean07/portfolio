<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>{{ config('app.name', 'Jean Cedeño') }}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon -->
    <link href="import/assets/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="import/assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="import/assets/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="import/assets/css/style.css" rel="stylesheet">
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="51">
    <!-- Navbar Start -->
    <nav class="navbar fixed-top shadow-sm navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-lg-5">
        <a href="#home" class="navbar-brand ml-lg-3">
            <h1 class="m-0 display-5"><span class="text-secondary">Jaco</span> Jean</h1>
        </a>
        <!-- imagen chikita de alya -->
        <img src="img/alya.jpg" class="rounded-circle" alt="alya" style="width: 50px; height: 50px;">
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse px-lg-3" id="navbarCollapse">
            <div class="navbar-nav m-auto py-0">
                <a href="#home" class="nav-item nav-link active">Home</a>
                <a href="#about" class="nav-item nav-link">About</a>
                <a href="#qualification" class="nav-item nav-link">Quality</a>
                <a href="#skill" class="nav-item nav-link">Skill</a>
                <a href="#service" class="nav-item nav-link">Service</a>
                <a href="#portfolio" class="nav-item nav-link">Portfolio</a>
                <a href="#testimonial" class="nav-item nav-link">Review</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    @yield('content')

       <!-- JavaScript Libraries -->
       <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
       <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
       <script src="import/assets/lib/typed/typed.min.js"></script>
       <script src="import/assets/lib/easing/easing.min.js"></script>
       <script src="import/assets/lib/waypoints/waypoints.min.js"></script>
       <script src="import/assets/lib/owlcarousel/owl.carousel.min.js"></script>
       <script src="import/assets/lib/isotope/isotope.pkgd.min.js"></script>
       <script src="import/assets/lib/lightbox/js/lightbox.min.js"></script>

       <!-- Contact Javascript File -->
       <script src="mail/jqBootstrapValidation.min.js"></script>
       <script src="import/assets/mail/contact.js"></script>

       <!-- Template Javascript -->
       <script src="import/assets/js/main.js"></script>
   </body>

   </html>
