<!doctype html>
<head>
    <meta charset="utf-8">
    <title>Ujwala</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/basic.css">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@600&display=swap" rel="stylesheet">
</head>
<body class="index">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">Miss. Ujwala Zope</a>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="#aboutme">About Me <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#Education">Education </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Experience </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Skills </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Certificates </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Projects </a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>
<div id="demo" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
    </ul>

    <!-- The slideshow -->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="images/SoftwareEng.jpg" alt="Los Angeles" width="1100" height="400">
        </div>
        <div class="carousel-item">
            <img src="images/accenture.jpg" alt="Chicago" width="1100" height="800">
        </div>
        <div class="carousel-item">
            <img src="images/bel.jpg" alt="New York" width="1100" height="500">
        </div>
    </div>

    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>
</div>
<section class="my-1" id="aboutme">
    <div class="py-5" >
        <h3 class="text-center">About Me</h3>
    </div>
    <div class="container-fluid">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-12">
            <img src="images/accenture.jpg" class="img-fluid aboutimg">
        </div>
        <div class="col-lg-6 col-md-6 col-12">
            <p>Hi, I am Ujwala,software engineer ( by my choice and passion :P ). I am from Badlapur, Maharashtra. I have completed
                my Bachelor of Engineering in Computers from K. J. Somaiya Institute of Engineering,Mumbai. I love to solve problems with my development
                skills. Check More :
            <a href="#Eductaion">Education</a>,<a href="#Experience">Experience </a>,<a href="Skills.php">Skills </a></p>
        </div>
    </div>
    </div>
</section>
<section class="my-1" id="Education">
    <div class="py-5">
        <h3 class="text-center">Education</h3>
    </div>
    <div class="container-fluid" >
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12 bg-light">
                <h3 align="center" class="py-3">S.S.C</h3>
                <h5>School : Adarsh Vidya Mandir</h5>
                <h5>Board :  Maharashtra State Board</h5>
                <h5>Passing year : 2010</h5>
                <h5>Percentage : 94% </h5>
            </div>
            <div class="col-lg-4 col-md-4 col-12 bg-light">
                <h3 align="center" class="py-3">H.S.C</h3>
                <h5>College : B. N. Bandodkar College, Thane </h5>
                <h5>Board :  Maharashtra State Board</h5>
                <h5>Passing year : 2012</h5>
                <h5>Percentage : 86.85% </h5></div>
            <div class="col-lg-4 col-md-4 col-12 bg-light" >
                <h3 align="center" class="py-3">Bachelor of Engineering (Computer Engineering) </h3>
                <h5>College : K. J. Somaiya Institue of Engineering, Sion</h5>
                <h5>Board :  Mumbai University</h5>
                <h5>Passing year : 2016</h5>
                <h5>CGPA : 7.75 </h5>
            </div>
        </div>
    </div>
</section>
<section class="my-1" id="Experience">
    <div class="py-5">
        <h3 class="text-center">Experience</h3>
    </div>
    <div class="container-fluid" >
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12 bg-light">
                <h3 align="center" class="py-3">Accenture</h3>
                <h5>From : August,2016 </h5>
                <h5>To :  July,2018 </h5>
                <h5>Description : </h5><p></p>
            </div>
            <div class="col-lg-6 col-md-6 col-12 bg-light">
                <h3 align="center" class="py-3">Bharat Electronic Ltd.</h3>
                <h5>From : July,2018 </h5>
                <h5>To :  Oct,2020 </h5>
                <h5>Description : </h5><p></p>
                
            </div>
            </div>
        </div>
    </div>
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
