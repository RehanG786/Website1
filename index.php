<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"> 
    <style type="text/css">
        /* Make the image fully responsive */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .carousel-inner img {
            width: 100%;
            height: 90vh;
        }
        .aboutimg {
            width: 100%;
            height: 250px !important;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Rehan Glasswala</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="Website1.html">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="About.html">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contact Us</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['username'])) {
    $username = htmlspecialchars($_POST['username']);
    echo "<div class='container mt-4'><h1>Welcome, $username!</h1></div>";
}
?>

<div id="demo" class="carousel slide" data-ride="carousel">
    <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
    </ul>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="https://www.care.biz/assets/templates/advance/img/img-it-services.jpg" alt="Los Angeles" width="1100" height="500">
            <div class="carousel-caption">
                <h3>Los Angeles</h3>
                <p>We had such a great time in LA!</p>
            </div>   
        </div>
        <div class="carousel-item">
            <img src="https://th.bing.com/th/id/R.1b0d812c0996126cc5d2b9bb5a72cbb2?rik=KUbvpKNuzUkwig&riu=http%3a%2f%2fgetwallpapers.com%2fwallpaper%2ffull%2ff%2f5%2f3%2f765467-gorgerous-business-wallpapers-1920x1200.jpg&ehk=vrfLPsMSWkdd8ah2LgirHv7BYaiji%2f%2fTUZ8rBPjq%2bVk%3d&risl=&pid=ImgRaw&r=0" alt="Chicago" width="1100" height="500">
            <div class="carousel-caption">
                <h3>Chicago</h3>
                <p>Thank you, Chicago!</p>
            </div>   
        </div>
        <div class="carousel-item">
            <img src="https://th.bing.com/th/id/R.1b0d812c0996126cc5d2b9bb5a72cbb2?rik=KUbvpKNuzUkwig&riu=http%3a%2f%2fgetwallpapers.com%2fwallpaper%2ffull%2ff%2f5%2f3%2f765467-gorgerous-business-wallpapers-1920x1200.jpg&ehk=vrfLPsMSWkdd8ah2LgirHv7BYaiji%2f%2fTUZ8rBPjq%2bVk%3d&risl=&pid=ImgRaw&r=0" alt="New York" width="1100" height="500">
            <div class="carousel-caption">
                <h3>New York</h3>
                <p>We love the Big Apple!</p>
            </div>   
        </div>
    </div>
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>
</div>

<section class="my-5">
    <div class="py-5">
        <h2 class="text-center mb-4">About Us</h2>
    </div>
        <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <img src="https://via.placeholder.com/600x400" class="img-fluid aboutimg">
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <h2 class="display-4">I am Rehan Glasswala.</h2>
                <p class="py-3">BscIT Graduate. Full Stack Web Developer</p>
                <a href="about.html" class="btn btn-success">read more.</a>
            </div>
            </div>
        </div>
    </div>
</section>

<section class="my-5">
    <div class="py-5">
        <h2 class="text-center mb-4">Our services</h2>
    </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card" style="width:400px">
  <img class="card-img-top" src="https://via.placeholder.com/600x400" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>


                </div>
                                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card" style="width:400px">
  <img class="card-img-top" src="https://via.placeholder.com/600x400" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>


                </div>

                                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card" style="width:400px">
  <img class="card-img-top" src="https://via.placeholder.com/600x400" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>


                </div>
            </div>
        </div>


    </div>
</section>

    <section class="my-5">
    <div class="py-5">
        <h2 class="text-center">Our Gallery</h2>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
                <img src="https://via.placeholder.com/600x400" class="img-fluid pb-4">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="https://via.placeholder.com/600x400" class="img-fluid pb-4">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="https://via.placeholder.com/600x400" class="img-fluid pb-4">
            </div>
                 <div class="col-lg-4 col-md-4 col-12">
                <img src="https://via.placeholder.com/600x400" class="img-fluid pb-4">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="https://via.placeholder.com/600x400" class="img-fluid pb-4">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="https://via.placeholder.com/600x400" class="img-fluid pb-4">
            </div>

        </div>
    </div>
</section>

     <section class="my-5">
    <div class="py-5">
        <h2 class="text-center">Contact Us</h2>
    </div>

    <div class="w-50 m-auto">
        <form action="about.php" method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="user" autocomplete="off" class="form-control">
            </div>
              <div class="form-group">
                <label>Email Id</label>
                <input type="text" name="email" autocomplete="off" class="form-control">
            </div>
              <div class="form-group">
                <label>Mobile</label>
                <input type="text" name="mobile" autocomplete="off" class="form-control">
            </div>
             <div class="form-group">
                <label>Comment</label>
                  <textarea name="comment" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
</section>

    <footer>
        <p class="p-3 bg-dark text-white text-center">@Rehan Glasswala</p>
    </footer>


</body>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</html>
