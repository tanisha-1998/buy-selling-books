<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Contact</title>
</head>

<body>
    <?php include'partial/nav.php' ?>
    <div class="text-center p-5">
        <h1 class="display-5  fw-bold p-2">
            <span class="border-bottom border-danger border-3 fw-6 font-italic">
                Contact Us
            </span>
        </h1>

    </div>
    <form class="row g-3 " action="/BOOKCHOR/handle contact.php" method="POST">
        <div class=" col-md-12 d-flex justify-content-center">
            <label for="inputEmail4" class="form-label px-5 fw-bold">Name</label>
            <input type="text" class="form-control w-25" id="inputEmail" name="name">
        </div>
        <div class="col-12 d-flex justify-content-center">
            <label for="inputEmail4 " class="form-label px-5 fw-bold">Email</label>
            <input type="email" class="form-control w-25" id="inputEmail" name="email">
        </div>
        <div class="col-12 d-flex justify-content-center">
            <label for="inputCity" class="form-label px-5 fw-bold">City</label>
            <input type="text" class="form-control w-25" id="inputCity" name="city">
        </div>
        <div class="col-12 d-flex justify-content-center">
            <label for="inputZip" class="form-label px-5 fw-bold">Zip</label>
            <input type="text" class="form-control w-25" id="inputZip" name="zip">
        </div>
        <div class="col-12 d-flex justify-content-center">
            <label for="inputState" class="form-label px-1 fw-bold">Feedback Type :</label>
            <select  name=feedback_type id="feedback_type" class="form-select w-25">
                <option selected>Select a Feedback Type</option>
                <option>Where is my order?</option>
                <option>Received damage/defective item</option>
                <option>Received incorrect item</option>
                <option>Other</option>
            </select>
        </div>
        <div class="col-12 d-flex justify-content-center">
            <label for="inputtext" class="form-label px-4 fw-bold">Comments:</label>
            <textarea class="form-control w-25" aria-label="With textarea" name="comments"></textarea>
        </div>
        <div class="col-12 d-flex justify-content-center p-4">
            <button type="submit" class="btn btn-primary fw-bold">Submit</button>
        </div>

    </form>
    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
    <?php require 'partial/footer.php' ?>
</body>

</html>