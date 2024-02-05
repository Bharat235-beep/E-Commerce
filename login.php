<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
    <title>Hello, world!</title>
  </head>
  <body>

    <form action="login.php" method="post">
        <fieldset><legend><h1>Login  to your account</h1></legend>  
    
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Userame</label>
                <input type="text" class="form-control" name="name" id="exampleFormControlInput1" placeholder="Please enter your unique username">
              </div>
        
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
          </div>
         
          
        </fieldset>
          <button type="submit" class="btn btn-primary">Sign in</button>
          <a href="signup.php">Create account?</a>
    </form>
 
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
    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
include 'connect.php';
$user=$_POST['name'];
$password=$_POST['password'];



$sql="Select * from ecommerce where name='$user' and pass='$password'";
$result=mysqli_query($conn,$sql);
$num=mysqli_num_rows($result);
if($num>0){
  echo ("<script>
  alert('You successfully logged in');
  </script");
  session_start();
  $_SESSION['name']=$user;
  header('location:home.php');
}
else{
 
  echo ("<script>
  alert('Your data not found');
  </script");
 
}
}

?>
  </body>
</html> 










   