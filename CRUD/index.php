<?php
$insert=false;
   $servername="localhost";
   $username ="root";
   $password ="";
   $database="notes";
   
   //for creating connection
   
   $conn= mysqli_connect($servername,$username,$password,$database);
   
   if (!$conn) {
       die("sorry we failed to connect".mysqli_connect_error());
   } 
   if (isset($_GET['delete'])) {
    $sno = $_GET['delete'];
    
    $sql="DELETE FROM `notes`  WHERE `s.no.`=$sno";

    $result =mysqli_query($conn , $sql);
   }
   if ($_SERVER['REQUEST_METHOD']=="POST"){
     if(isset($_POST['snoEdit'])){
      $sno = $_POST['snoEdit'];
      $Title = $_POST['TitleEdit'];
      $description = $_POST['DescEdit'];
     
      $sql="UPDATE `notes` SET `Title` = '$Title' , `description`='$description' WHERE `notes`.`s.no.`=$sno";

      $result =mysqli_query($conn , $sql);
     }
     else{

     
    $Title = $_POST['Title'];
      $description = $_POST['Desc'];
     
      $sql="INSERT INTO `notes` (`s.no.`, `Title`, `description`) VALUES (' ', '$Title', '$description')";

      $result =mysqli_query($conn , $sql);
      //check for table creation success
      if ($result) {
       $insert= true;
      } else {
          echo "the table was not created successfully".mysqli_error($conn);
      }
          
      }
    }
     
  

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" class="css">
     
    <title>CRUD/PHP</title>

  </head>
  <body>
    
    <!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editModal">
  edit modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit this note</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="/crud/index.php" method="post">
      <div class="modal-body">
      <input type="hidden"name ="snoEdit" id="snoEdit">
            <div class="form-group">
              <label for="note">Note title</label>
              <input type="text" class="form-control" id="TitleEdit" name="TitleEdit">
         
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Note Description</label>
                <textarea class="form-control" name="DescEdit" id="descriptionEdit" rows="3"></textarea>
            </div>
            
          </div>
          <div class="modal-footer d-block mr-4">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
        </form>
    </div>
  </div>
</div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">PHP/CRUD</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
       
      <?php
      if ($insert) {
        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
        <strong>Success!</strong> You have entered the notes succesfully.
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
        <span aria-hidden='true'>&times;</span>
        </button>
        </div>";
      }
      ?>
      <div class="container my-4">
          <h2>Add a note</h2>
        <form action="/crud/index.php" method="post">
            <div class="form-group">
              <label for="note">Note title</label>
              <input type="text" class="form-control" id="exampleInputEmail1" name="Title">
         
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Note Description</label>
                <textarea class="form-control" name="Desc" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            
            <button type="submit" class="btn btn-primary">Add note</button>
          </form>
      </div>
      
      <table class="table" id="myTable">
  <thead>
    <tr>
      <th scope="col">s.no.</th>
      <th scope="col">Title</th>
      <th scope="col">description</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
  <?php
            
            $sql ="SELECT * FROM `notes`";
            $result =mysqli_query($conn , $sql);
            
            while ($disRow = mysqli_fetch_assoc($result)) {
              
              echo "<tr>
              <th scope='row'>".$disRow['s.no.']."</th>
              <td>".$disRow['Title']."</td>
              <td>".$disRow['description']."</td>
              <td><button class='btn btn-primary edit ' id=".$disRow['s.no.'].">edit</button> /<button class='btn btn-primary delete' id=d".$disRow['s.no.'].">delete</button> 
              </td>
              </tr>";
              
            }
            ?>

    
  </tbody>
</table>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready( function () {
    $('#myTable').DataTable();
  } );
  
  </script>
  <script>
    edits = document.getElementsByClassName('edit');
    Array.from(edits).forEach((element)=>{
      element.addEventListener("click",(e)=>{
        console.log("edit", );
        tr=e.target.parentNode.parentNode;
        Title = tr.getElementsByTagName("td")[0].innerText;
        description = tr.getElementsByTagName("td")[1].innerText;
        console.log(Title,description);
        descriptionEdit.value=description;
        TitleEdit.value=Title;
        snoEdit.value=e.target.id;
        console.log(e.target.id);
        $('#editModal').modal('toggle')
      })
    })
    deletes = document.getElementsByClassName('delete');
    Array.from(deletes).forEach((element)=>{
      element.addEventListener("click",(e)=>{
        console.log("delete", );
       sno = e.target.id.substr(1,);


         if(confirm("Do you really want to delete this Note?")){
           console.log("yes");
           window.location =`/crud/index.php?delete=${sno}`;
         }
         else{
           console.log("no");
         }
      })
    })
             </script>
  </body>
</html>