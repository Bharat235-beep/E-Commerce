<?php

session_start();
if(!isset($_SESSION['name'])){
  echo"<script>
  alert('logged in as $_SESSION["name"]' );
  </script>"
  header('location:login.php');
}
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <script src="https://kit.fontawesome.com/94b2be07af.js" crossorigin="anonymous"></script>
  <title>Ecommerce website</title>
</head>

<body>
  <!-- navigation starts -->
  <header>
    <nav class="navbar navbar-expand-lg navbar" style="background-color: rgb(187, 119, 252)">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">E<span>lectronic</span> shop</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <!-- <span class="navbar-toggler-icon"></span> -->
          <i class="fa fa-bars navbar-toggler-icon" aria-hidden="true"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="home.html">Home</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="about.html">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact</a>
            </li>
            
          </ul>
        </div>
      </div>
    <a href="logout.php"><button type="button" class="btn btn-outline-danger">Logout</button></a>
     <a href="http://localhost/E-commerce/signup.php"><button type="button" class="btn btn-outline-danger">Signin</button></a> 
    </nav>
  </header>
  <!-- navigation ends -->

  <!-- carousel starts -->
  <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="sale.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="Electronics_Shop_Facebook_Ad_Template.jpeg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="sale.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!-- carousel ends -->


  <!-- cards starts -->
  <div class="container">
  <div class="row">
    <div class="col">
      <div class="card" style="width: 18rem;">
        <img src="images\apple-iphone-14-pro-max-1.jpg" class="card-img-top"
          alt="...">
        <div class="card-body">
          <h3>Iphone 14 pro</h3>
          <p class="card-text">Lorem ipsum dolor sit amet consectetur.</p>
          <div class="star text-center">
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <br>
            <span>$2000 </span>
            <i class="fa-solid fa-cart-shopping"></i>
          </div>
        </div>

      </div>
    </div>

    <div class="col">
      <div class="card" style="width: 18rem;">
        <img src="images/samsung-galaxy-m13-2.jpg" class="card-img-top"
          alt="...">
        <div class="card-body">
          <h3>Samsung F 13</h3>
          <p class="card-text">Lorem ipsum dolor sit amet consectetur.</p>
          <div class="star text-center">
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <br>
            <span>$300 </span>
            <i class="fa-solid fa-cart-shopping"></i>
          </div>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card" style="width: 18rem;">
        <img src="images/macbook-air.png" class="card-img-top"
          alt="...">
        <div class="card-body">
          <h3>Apple MacBook Air</h3>
          <p class="card-text">Lorem ipsum dolor sit amet consectetur.</p>
          <div class="star text-center">
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <br>
            <span>$3000 </span>
            <i class="fa-solid fa-cart-shopping"></i>
          </div>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card" style="width: 18rem;">
        <img src="images/sony-headphones.webp" class="card-img-top"
          alt="...">
        <div class="card-body">
          <h3>Sony WH-CH720N</h3>
          <p class="card-text"> Wireless Noise Cancelling Headphone</p>
          <div class="star text-center">
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <br>
            <span>$200 </span>
            <i class="fa-solid fa-cart-shopping"></i>
          </div>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card" style="width: 18rem;">
        <img src="images/earphones.jpg" class="card-img-top"
          alt="...">
        <div class="card-body">
          <h3>Oneplus Nord</h3>
          <p class="card-text">Oneplus Nord Wired Earphone, Black</p>
          <div class="star text-center">
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <br>
            <span>$2000 </span>
            <i class="fa-solid fa-cart-shopping"></i>
          </div>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card" style="width: 18rem;">
        <img src="images/hp-printer.jpg" class="card-img-top"
          alt="...">
        <div class="card-body">
          <h3>HP Smart Tank 750 </h3>
          <p class="card-text">All In One wireless Printer with duplex printing</p>
          <div class="star text-center">
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <br>
            <span>$2000 </span>
            <i class="fa-solid fa-cart-shopping"></i>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>
  <!-- cards ends -->

<!-- household cards starts-->
<h2 >HOUSEHOLD APPLIANCES</h2>
<hr style="color: gold;">

<div class="container">
  <div class="row">
    <div class="col">
      <div class="card" style="width: 18rem;">
        <img src="images/SamsungTv.webp" class="card-img-top"
          alt="...">
        <div class="card-body">
          <h3>Samsung SmartTv
            
          </h3>
          <p class="card-text">1m 25cm (50") CUE60 Crystal 4K UHD Smart TV</p>
          <div class="star text-center">
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <br>
            <span>$2000 </span>
            <i class="fa-solid fa-cart-shopping"></i>
          </div>
        </div>

      </div>
    </div>

    <div class="col">
      <div class="card" style="width: 18rem;">
        <img src="images/samsung-washing-machine.png" class="card-img-top"
          alt="...">
        <div class="card-body">
          <h3 >Samsung Washing Machine</h3>
          <p class="card-text">7.0 kg Front Load Washing Machine with Hygiene Steam</p>
          <div class="star text-center">
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <br>
            <span>$300 </span>
            <i class="fa-solid fa-cart-shopping"></i>
          </div>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card" style="width: 18rem;">
        <img src="images/refrigerator.avif" class="card-img-top"
          alt="...">
        <div class="card-body">
          <h3>Samsung refrigerator</h3>
          <p class="card-text">236L Digital Inverter Technology Double Door Refrigerator</p>
          <div class="star text-center">
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <br>
            <span>$3000 </span>
            <i class="fa-solid fa-cart-shopping"></i>
          </div>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card" style="width: 18rem;">
        <img src="images/ac.avif" class="card-img-top"
          alt="...">
        <div class="card-body">
          <h3>AC</h3>
          <p class="card-text"> WindFree Inverter Split AC AR18CYLAMWK,</p>
          <div class="star text-center">
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <br>
            <span>$200 </span>
            <i class="fa-solid fa-cart-shopping"></i>
          </div>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card" style="width: 18rem;">
        <img src="images/microwave.avif" class="card-img-top"
          alt="...">
        <div class="card-body">
          <h3>Microwave</h3>
          <p class="card-text">32L SlimFry™, Convection Microwave Oven</p>
          <div class="star text-center">
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <br>
            <span>$2000 </span>
            <i class="fa-solid fa-cart-shopping"></i>
          </div>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card" style="width: 18rem;">
        <img src="images/fan.jpeg" class="card-img-top"
          alt="...">
        <div class="card-body">
          <h3>HP Smart Tank 750 </h3>
          <p class="card-text">All In One wireless Printer with duplex printing</p>
          <div class="star text-center">
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <br>
            <span>$2000 </span>
            <i class="fa-solid fa-cart-shopping"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- household cards ends-->




  <!-- footer starts -->
  <footer>
    <div class="row primary">
      <div class="column about">
        <h3>Connect</h3>
        <p>
          <i class="fa fa-map-marker" aria-hidden="true"></i>
          Sienna Towers, Service Road, Bangalore
        </p>
        <div class="social">
          <i class="fa fa-facebook-square"></i>
          <i class="fa fa-twitter-square"></i>
          <i class="fa fa-linkedin-square"></i>
          <i class="fa fa-instagram"></i>
        </div>
      </div>
    
      <div class="column link">
        <h3>Links</h3>
        <ul>
          <li><a href="#home">Home</a></li>
          <li><a href="#team">Team</a></li>
          <li><a href="#blogs">Blogs</a></li>
          <li><a href="#support">Support</a></li>
        </ul>
      </div>
    
      <div class="column subscribe">
        <h3>Newsletter</h3>
        <div>
          <input type="email" placeholder="Your email id here" />
          <button>Subscribe</button>
        </div>
      </div>
    </div>

    <div class="row copyright">
      <div class="footer-menu">
    
      <a href="">Home</a>
      <a href="">F.A.Q</a>
      <a href="">Cookies Policy</a>
      <a href="">Terms Of Service</a>
      <a href="">Support</a>
    
      </div>
       <p>Copyright &copy; 2022</p>
    </div>
    

  </footer>
  <!-- footer ends -->
  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>