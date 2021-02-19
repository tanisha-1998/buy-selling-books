<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <style>
    #ques {
        min-height: 755px;
    }
    </style>
    <title>iforum</title>
</head>

<body>

    <?php include 'partials/database_connect.php' ?>
    <?php include 'partials/header.php' ?>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://source.unsplash.com/1500x500/weekly?computer" class="d-block " alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://source.unsplash.com/1500x500/weekly?technology" class="d-block " alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://source.unsplash.com/1500x500/weekly?web designing" class="d-block " alt="...">
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
    <div class="container my-4" id="ques">
        <h2 class="text-center">idiscuss - browse categories</h2>
        <div class="row ">
            <?php
   
        // echo $row['category_name'];
      echo  '<div class="col-md-4 my-2">
                 <div class="card" style="width: 18rem;">
                   <img src="https://source.unsplash.com/500x400/weekly?" >
                      <div class="card-body">
                      <h5 class="card-title"> <a href ="threads.php?catid="> </a></h5>
                      <p class="card-text">...</p>
                      <a href="threads.php?catid=" class="btn btn-primary">view threads</a>
                      </div>
                 </div>
             </div>';
     
      ?>


            <?php include 'partials/footer.php' ?>

            <!-- Optional JavaScript -->
            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
                integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
                crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
                integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
                crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
                integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
                crossorigin="anonymous"></script>
</body>

</html>