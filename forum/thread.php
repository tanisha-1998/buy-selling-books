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

    <?php include 'partials/header.php' ?>
    <?php include 'partials/database_connect.php' ?>

    <?php
     $id=$_GET['threadid'];
     $sql="SELECT * FROM `threads` where thread_id =$id";
     $result= mysqli_query($conn,$sql);
     while($row=mysqli_fetch_assoc($result)){
        $title = $row['thread_title'];
        $desc = $row['thread_desc'];
        $thread_user_id = $row['thread_user_id'];
        $sql2 = "SELECT `user_email` FROM `users` WHERE `s.no.` = '$thread_user_id'";
        $result2 = mysqli_query($conn,$sql2);
        $row2 = mysqli_fetch_assoc($result2);
        $posted_by =$row2['user_email'];

    }
    ?>

    <?php
    $showAlert = false;
    $method = $_SERVER['REQUEST_METHOD'];
    if ($method=='POST') {
        $comment = $_POST['comment'];
        $sno = $_POST['sno'];
        $sql="INSERT INTO `comments` ( `comment_content`, `thread_id`, `comment_by`, `comment_time`) VALUES ( '$comment', '$id', '$sno', current_timestamp())";
        $result= mysqli_query($conn,$sql);
        $showAlert=true;
        if ($showAlert) {
            echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>success!</strong> Your comment has been added.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
        }
    }
    ?>

    <div class="container my-4">
        <div class="jumbotron">
            <h1 class="display-4"> <?php echo $title ;?> </h1>
            <p class="lead"> <?php echo $desc ;?></p>
            <hr class="my-4">
            <!-- <p>This forum is for sharing knowledge with< each other.</p> -->
            <p>posted by:-<b><?php echo $posted_by ; ?></b></p>
        </div>
    </div>

    <?php
        if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){ 
        echo  '  <div class="container">
        <h1 class="py-2">Post a comment</h1>
        <form action="'.$_SERVER["REQUEST_URI"].'" method="post">
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Type your comment</label>
                <textarea class="form-control" id="comment" name="comment" rows="3"></textarea>
             <input type="hidden" name="sno" value="'.$_SESSION['sno'].'">   
            </div>
            <button type="submit" class="btn btn-primary">Post comment</button>
        </form>
    </div>';
        
        }
        else {
            echo '
            <div class="container">
            <h1 class="py-2">Post a comment</h1>
            <p class="lead"> you are not logged in.</p>
            </div>
            ';
        }
        ?>
    
    <div class="container" id="ques">
        <h1>Discussions</h1>
        <?php
     $id=$_GET['threadid'];
     $sql="SELECT * FROM `comments` where thread_id =$id";
     $result= mysqli_query($conn,$sql);
     $noResult=true;
     while($row=mysqli_fetch_assoc($result)){
         $noResult=false;
        $id = $row['comment_id'];
        $content = $row['comment_content'];
        $comment_time=$row['comment_time'];
        $commented_by= $row['comment_by'];
        $sql2 = "SELECT `user_email` FROM `users` WHERE `s.no.` = '$commented_by'";
        $result2 = mysqli_query($conn,$sql2);
        $row2 = mysqli_fetch_assoc($result2);

    
      echo '<div class="media">
              <img src="username.png" class="mr-3"  width="33px" alt="...">
              <div class="media-body">
               <p class="font-weight-bold my-0"> '. $row2['user_email'].' at '.$comment_time.'</p>
               '.$content.'
              </div>
            </div>';
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