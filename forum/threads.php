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
        min-height: 155px;
    }
    </style>
    <title>iforum</title>
</head>

<body>

    <?php include 'partials/database_connect.php' ?>
    <?php include 'partials/header.php' ?>

    <?php
     $id=$_GET['catid'];
     $sql="SELECT * FROM `idiscuss` where category_id =$id";
     $result= mysqli_query($conn,$sql);
     while($row=mysqli_fetch_assoc($result)){
        $catname = $row['category_name'];
        $catdesc = $row['category_description'];
    }
    ?>

    <?php
    $showAlert = false;
    $method = $_SERVER['REQUEST_METHOD'];
    if ($method=='POST') {
        $th_title = $_POST['title'];
        $th_desc= $_POST['desc'];
        $sno = $_POST['sno'];
        $sql="INSERT INTO `threads` ( `thread_title`, `thread_desc`, `thread_cat_id`, `thread_user_id`, `timestamp`) VALUES ( '$th_title', '$th_desc','$id','$sno', current_timestamp())";
        $result= mysqli_query($conn,$sql);
        $showAlert=true;
        if ($showAlert) {
            echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>success!</strong> Your thread has been added please wait for community to respond.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
        }
    }
    ?>


    <div class="container my-4">
        <div class="jumbotron">
            <h1 class="display-4">Welcome <?php echo $catname ;?> forums</h1>
            <p class="lead"> <?php echo $catdesc ;?></p>
            <hr class="my-4">
            <p>This forum is for sharing knowledge with< each other.</p>
                    <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
        </div>
    </div>
        <?php
        if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){ 
        echo  ' <div class="container">
            <h1 class="py-2">Ask a Question</h1>
            <form action=" ' . $_SERVER['REQUEST_URI'] . '" method="post">
                <div class="form-group">
                    <label for="exampleInputEmail1">Problem Title</label>
                    <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp">
        
                </div>
                <input type="hidden" name="sno" value="'.$_SESSION["sno"].'">   
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Elaborate your problem</label>
                    <textarea class="form-control" id="desc"  name="desc" rows="3"></textarea>
                </div>
        
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>       
            </div>';
        
        }
        else {
            echo '
            <div class="container">
            <h1 class="py-2">Ask a Question</h1>
            <p class="lead"> you are not logged in.</p>
            </div>
            ';
        }
        ?>
    <div class="container" id="ques">
        <h1>Browse Questions</h1>
        <?php
     $id=$_GET['catid'];
     $sql="SELECT * FROM `threads` where thread_cat_id =$id";
     $result= mysqli_query($conn,$sql);
     $noResult=true;
     while($row=mysqli_fetch_assoc($result)){
         $noResult=false;
        $id = $row['thread_id'];
        $title = $row['thread_title'];
        $desc = $row['thread_desc'];
        $thread_time = $row['timestamp'];
        $thread_user_id= $row['thread_user_id'];
        $sql2 = "SELECT `user_email` FROM `users` WHERE `s.no.` = '$thread_user_id'";
        $result2 = mysqli_query($conn,$sql2);
        $row2 = mysqli_fetch_assoc($result2);

    
      echo '<div class="media my-2">
              <img src="username.png" class="mr-3" height="33px" width="33px" alt="...">
              <div class="media-body my-2">'.
              '<h5 class="mt-0"><a href="thread.php?threadid='.$id.'">'.$title.'</a></h5>
              '.$desc.'</div>'.'<p class="font-weight-bold my-0"> Asked by: '. $row2["user_email"].' at '.$thread_time.'</p>'.
      '</div>';
     }
    //  echo var_dump($noResult);
     if ($noResult) {
         echo '<div class="jumbotron jumbotron-fluid">
         <div class="container">
           <P class="display-4">No results found</P>
           <p class="lead">Be the first person to ask a question.</p>
         </div>
       </div>';
     }
     ?>
    </div>


        <?php include 'partials/footer.php' ?>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
            integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
            integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
        </script>
</body>

</html>