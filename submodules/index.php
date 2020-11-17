<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Sparks Secure banking system</title>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="../css/navbar.css">

    <style>
        .head h3{
            text-align:center;
            margin-top: 40px;
        }
    </style>
  </head>

  <body>

    <?php
        require "navbar.php"
    ?>    
  
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      </ol>
      
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="../images/courasel1.png" class="d-block w-100" alt="..." height="400">
        </div>
        <div class="carousel-item">
          <img src="../images/courasel2.png" class="d-block w-100" alt="..." height="400">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    
    <div class="head">
        <h3>Our Services</h3>
    </div>
    <div class="container" style="display:flex;justify-content:center;align-items:center;margin-top:25px;">
        <div class="card" style="width: 18rem;margin:40px;">
            <a href="viewusers.php"><img src="../images/us.jpg" class="card-img-top" width="200" height="200" alt="..."></a>
            <div class="card-body">
                <p class="card-text"><h3 style="text-align:center;">Transaction</h3>Here,you can transfer money with the other people</p>
            </div>
        </div>
        <div class="card" style="width: 18rem;margin:40px;">
            <a href="viewusers.php"><img src="../images/user.jpg" class="card-img-top" width="200" height="200"  alt="..."></a>
            <div class="card-body">
                <p class="card-text"><h3 style="text-align:center;">Users</h3>Here you can search users and view users</p>
            </div>
        </div>
        <div class="card" style="width: 18rem;margin:40px;">
            <a href="contact.php"><img src="../images/contact.jpg" class="card-img-top" width="200" height="200" alt="..."></a>
            <div class="card-body">
                <p class="card-text"><h3 style="text-align:center;">Contact Us</h3>If you face any problem,here you can contact us.</p>
            </div>
        </div>
    </div>


    <?php
        require "footer.php"
    ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    
  </body>
</html>