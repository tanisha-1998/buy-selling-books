<?php
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
  

}
echo'<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<a class="navbar-brand" href="/forum">iDiscussion</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav mr-auto">
    <li class="nav-item active">
      <a class="nav-link" href="/forum">Home <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/forum/about.php">About</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Top-Categories
      </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">';

      $sql = "SELECT category_name,category_id FROM `idiscuss`";
      $result= mysqli_query($conn,$sql);
     while($row=mysqli_fetch_assoc($result)){
        echo '<a class="dropdown-item" href="threads.php?catid='.$row['category_id'].'">'.$row['category_name'].'</a>';
     }
        
      echo '</div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/forum/contact.php" tabindex="-1">Contact</a>
    </li>
  </ul>';

  if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
   echo '<form class="form-inline my-2 my-lg-0" method="get" action="search.php">
  <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search" aria-label="Search">
  <button class="btn btn-outline-success my-4 my-sm-0" type="submit">Search</button>
  <p class="text-light my-0 mx-2">welcome '.$_SESSION['useremail'].'</p>
  <a href="partials/logout.php" class="btn btn-primary my-4 my-sm-0" type="submit">logout</a>
  </form>';
  }
  else{ 
    echo '<form class="form-inline my-2 my-lg-0">
  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
  <button class="btn btn-outline-success my-4 my-sm-0" type="submit">Search</button>
  </form> 
  <div class="mx-2">
  <button class="btn btn-primary mx-2 " data-toggle="modal" data-target="#loginModal">Login</button>
  <button class="btn btn-primary" data-toggle="modal" data-target="#signupModal">Sign Up</button>';
  }
echo  '</div>
</div>
</nav>';

include 'partials/login_modal.php' ;
include 'partials/signup_modal.php'; 
if(isset($_GET['signupsuccess'])&& $_GET['signupsuccess'] =="true"){
  echo'<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
            <strong>success!</strong> You can now login.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';

}

?>