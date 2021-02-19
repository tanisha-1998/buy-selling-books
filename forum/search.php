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
    .searchbar {
        min-height: 642px;
    }
    </style>
    <title>iforum</title>
</head>

<body>

    <?php include 'partials/database_connect.php' ?>
    <?php include 'partials/header.php' ?>

    <div class="searchbar my-7">
    <h1>search results for <?php echo $_GET['search'] ?></h1>
    <?php
    $query =$_GET['search'] ;
     $noresults= true;
     $sql="SELECT * FROM `threads` where match (`thread_desc` , `thread_title`) against('$query')";
     $result= mysqli_query($conn,$sql);
     while($row=mysqli_fetch_assoc($result)){
        $title = $row['thread_title'];
        $desc = $row['thread_desc'];
        $thread_id = $row['thread_id'];
        $url = "thread.php?threadid=$thread_id";
        $noresults= false;
        echo  '  <div class="result">
                   <h3> <a href=" '.$url.'" class="text-dark">'.$title.'</a> </h3>
                   <p> '.$desc.' </p>
    
                   </div>';
                   
                   
                }
     if ($noresults) {
         echo '<div class="jumbotron jumbotron-fluid">
                <div class="container">
              <h1 class="display-4">No results found </h1>
           <p class="lead">sugggestions:<ul>
                                        <li> make sure that all words are spelled correctly.</li>
                                        <li> try different keywords.</li>
                                        <li> try more general keywords.</li></ul>
           </p>
         </div>
       </div>';
     }           
                
                ?>
    </div>
      


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