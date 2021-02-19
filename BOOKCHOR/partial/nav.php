<?php
session_start();
echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">

        <a class="navbar-brand" href="welcome.php"><img src="pics/bclogo.png" alt="" width="200" height="30"></a>';
        
        if (isset($_SESSION['signup']) && $_SESSION['signup'] == true) {
            
            echo    '<form class=" d-flex col-md-4  input-rounded search-box" style="display:none" action="search.php" method="get">
                
                <form class="d-flex">
                <input class="form-control me-2 w-50" type="search" placeholder="Search by Title,Author or ISBN here......" aria-label="Search">
                <button class="btn btn-outline-warning" type="submit">Search</button>
                </form>
                
                <p class="text-light  ">welcome '.$_SESSION['userEmail'].'</p>
                <a class="navbar-brand" href="mycart.php"><img src="pics/cart.png" style="filter: invert(100%)" alt="" width="200" height="30"></a>
                    <a href="partial/logout.php" class=" navbar-brand btn btn-warning float-end text-dark" type="submit">signout</a>
            </form>';
            }
     
             
        elseif (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
            
        echo    '<form class=" d-flex col-md-4  input-rounded search-box" style="display:none">
            
            <form class="d-flex">
            <input class="form-control me-2 w-50" type="search" placeholder="Search by Title,Author or ISBN here......" aria-label="Search">
            <button class="btn btn-outline-warning" type="submit">Search</button>
            </form>
            
            <p class="text-light  ">welcome '.$_SESSION['userEmail'].'</p>
            <a class="navbar-brand" href="mycart.php"><img src="pics/cart.png" style="filter: invert(100%)" alt="" width="200" height="30"></a>
            
                <a href="partial/logout.php" class=" navbar-brand btn btn-warning float-end text-dark" type="submit">logout</a>
        </form>';
        }
       else{
         echo   '<form class=" d-flex col-md-6 input-rounded search-box" style="display:none">

                
                <form class="d-flex ">
    <input class="form-control me-2 w-100 " type="search" placeholder="Search by Title,Author or ISBN here......" aria-label="Search">
    <button class="btn btn-outline-warning" type="submit">Search</button>
  </form>
  <a class="navbar-brand" href="mycart.php"><img src="pics/cart.png" style="filter: invert(100%)" alt="" width="50" height="30"></a>
  <button type="button" class="btn btn-warning btn-lg pe-5" data-bs-toggle="modal" data-bs-target="#loginModal">
  Login
  </button>
  <button type="button" class="btn btn-warning btn-lg pe-5" data-bs-toggle="modal" data-bs-target="#signupModal">
  Sign up
  </button>
  </form>';
       }
       
     echo  '
</div>

</nav>';


 include 'partial/login.php';
include 'partial/signup.php';

if(isset($_GET['signupsuccess']) && $_GET['signupsuccess'] =="true"){
echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success!</strong> now you can log in.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

if(isset($_GET['commentsuccess']) && $_GET['commentsuccess'] =="true"){
    echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong> '.$_SESSION['username'].'</strong> Your Feedback is Recorded successfully .
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    } 

