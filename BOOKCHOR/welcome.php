<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Welcome</title>

</head>

<body>
    <?php require 'partial/nav.php' ?>
    <?php require 'partial/nav1.php' ?>
    <!-- <?php include 'partial/dbconect.php' ?> -->

    <div class="carousel p-4 bg-secondary">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
                <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
                <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"></li>
                
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="pics/winds.jpg" class="d-block w-100" width="300" height="550">
                    <div class="carousel-caption d-none d-md-block">
                       
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="pics/brenda.png" class="d-block w-100" width="300" height="550">
                    <div class="carousel-caption d-none d-md-block">
                      
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="pics/coll.jpg" class="d-block w-100" width="300" height="550">
                    <div class="carousel-caption d-none d-md-block">
                       
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="pics/sea.jpg" class="d-block w-100" width="300" height="550">
                    <div class="carousel-caption d-none d-md-block">
              
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </a>
        </div>
    </div>


    <div class="box-0">
        <div class="text-center p-4">
            <h1 class="display-5  fw-bold">
                <span class="border-bottom border-danger border-3 fw-6 font-italic">
                    New Releases
                </span>
            </h1>

        </div>
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
                <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
            </ol>
            <div class="carousel-inner p-5  shadow-lg p-3 mb-5 bg-warning rounded  ">
                <div class="carousel-item active" style="height:400px">
                    <div class="card-group gap-3 mx-auto" style="width: 1200px;">
                        <div class="card rounded-3 ">
                    <form action="/BOOKCHOR/handlecart.php" method="POST">
                            <img src="pics/1.jpg" class="card-img-top p-3" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><a href="#" class="link-success">The Four Winds: A
                                        Novel</a><br><a href="#" class="link-success"> Kristin Hannah</a></h5>
                                <p class="card-text p-4"><small class="text-muted fw-bolder">Hardcover<br>
                                        $17.39</small>
                                        <button class="btn btn-outline-warning" name="add_to_cart" type="submit">Add to cart</button>
                                        <input type="hidden" name="item_name" value="bag1">
                                        <input type="hidden" name="price" value="$17.39">
                                        </p>
                            </div>
                        </div>
                       </form>
                        <div class="card  rounded-3 ">
                            <img src="pics/2.jpg" class="card-img-top p-3" alt="...">
                            <form action="handlecart.php" method="post">
                            <div class="card-body">
                                <h5 class="card-title"><a href="#" class="link-success">Think Again: The Power of
                                        Knowing What You…</a><br><a href="#" class="link-success">
                                        Adam Grant</a></h5>
                                <p class="card-text p-2"><small class="text-muted fw-bolder">Hardcover<br>
                                        $16.98</small>
                                        <button class="btn btn-outline-warning" name="add_to_cart" type="submit">Add to cart</button>
                                        <input type="hidden" name="item_name" value="bag2">
                                        <input type="hidden" name="price" value="$16.98">
                                        </p>
                            </div>
                            </form>
                        </div>
                        
                       
                        <div class="card  rounded-3">
                            <img src="pics/3.jpg" class="card-img-top p-3" alt="...">
                            <form action="handlecart.php" method="post">
                            <div class="card-body">
                                <h5 class="card-title"><a href="#" class="link-success">Just as I Am: A Memoir
                                    </a><br><a href="#" class="link-success">Cicely Tyson</a></h5>
                                <p class="card-text p-4"><small class="text-muted fw-bolder">Hardcover<br>
                                        $18.58</small>
                                        <button class="btn btn-outline-warning" name="add_to_cart" type="submit">Add to cart</button>
                                        <input type="hidden" name="item_name" value="bag3">
                                        <input type="hidden" name="price" value="$18.58">
                                        </p>
                            </div>
                            </form>
                        </div>
                       
                        <div class="card  rounded-3 ">
                            <img src="pics/4.jpg" class="card-img-top p-3" alt="...">
                            <form action="handlecart.php" method="post">
                            <div class="card-body">
                                <h5 class="card-title"><a href="#" class="link-success">Four Hundred Souls: A Community
                                        History of…
                                    </a><br><a href="#" class="link-success">Ibram X. Kendi</a></h5>
                                <p class="card-text p-2"><small class="text-muted fw-bolder">Hardcover<br>
                                        $22.49</small>
                                        <button class="btn btn-outline-warning" name="add_to_cart" type="submit">Add to cart</button>
                                        <input type="hidden" name="item_name" value="bag4">
                                        <input type="hidden" name="price" value="$22.49">
                                        </p>
                            </div>
                            </form>
                        </div>
                       
                        <div class="card  rounded-3">
                            <img src="pics/5.jpg" class="card-img-top p-3" alt="...">
                            <form action="handlecart.php" method="post">
                            <div class="card-body">
                                <h5 class="card-title"><a href="#" class="link-success">The Hill We Climb: An Inaugural
                                        Poem for the…
                                    </a><br><a href="#" class="link-success">Amanda Gorman</a></h5>
                                <p class="card-text p-2"><small class="text-muted fw-bolder">Hardcover<br>
                                        $12.25</small>
                                        <button class="btn btn-outline-warning" name="add_to_cart" type="submit">Add to cart</button>
                                        <input type="hidden" name="item_name" value="bag5">
                                        <input type="hidden" name="price" value="$12.25">
                                        </p>
                            </div>
                            </form>
                        </div>
                      
                    </div>
                </div>
                <div class="carousel-item " style="height:400px">
                    <div class="card-group gap-3 mx-auto" style="width: 1200px; ">
                        <div class="card  rounded-3">
                            <img src="pics/2.jpg" class="card-img-top p-3" alt="...">
                    <form action="handlecart.php" method="post">
                            <div class="card-body">
                                <h5 class="card-title"><a href="#" class="link-success">Think Again: The Power of
                                        Knowing What You…</a><br><a href="#" class="link-success">
                                        Adam Grant</a></h5>
                                <p class="card-text p-2"><small class="text-muted fw-bolder">Hardcover<br>
                                        $16.98</small>
                                        <button class="btn btn-outline-warning" name="add_to_cart" type="submit">Add to cart</button>
                                        <input type="hidden" name="item_name" value="bag6">
                                        <input type="hidden" name="price" value="$16.98">
                                        </p>
                            </div>
                        </form>
                        </div>
                        <div class="card  rounded-3">
                            <img src="pics/3.jpg" class="card-img-top p-3" alt="...">
                        <form action="handlecart.php" method="post">
                            <div class="card-body">
                                <h5 class="card-title"><a href="#" class="link-success">Just as I Am: A Memoir
                                    </a><br><a href="#" class="link-success">Cicely Tyson</a></h5>
                                <p class="card-text p-4"><small class="text-muted fw-bolder">Hardcover<br>
                                        $18.58</small>
                                        <button class="btn btn-outline-warning" name="add_to_cart" type="submit">Add to cart</button>
                                        <input type="hidden" name="item_name" value="bag7">
                                        <input type="hidden" name="price" value="$18.58">
                                        </p>
                            </div>
                        </form>
                        </div>
                        <div class="card  rounded-3">
                            <img src="pics/4.jpg" class="card-img-top p-3" alt="...">
                        <form action="handlecart.php" method="post">
                            <div class="card-body">
                                <h5 class="card-title"><a href="#" class="link-success">Four Hundred Souls: A Community
                                        History of…
                                    </a><br><a href="#" class="link-success">Ibram X. Kendi</a></h5>
                                <p class="card-text p-2"><small class="text-muted fw-bolder">Hardcover<br>
                                        $22.49</small>
                                        <button class="btn btn-outline-warning" name="add_to_cart" type="submit">Add to cart</button>
                                        <input type="hidden" name="item_name" value="bag8">
                                        <input type="hidden" name="price" value="$22.49">
                                        </p>
                            </div>
                        </form>
                        </div>
                        <div class="card  rounded-3">
                            <img src="pics/5.jpg" class="card-img-top p-3" alt="...">
                        <form action="handlecart.php" method="post">
                            <div class="card-body">
                                <h5 class="card-title"><a href="#" class="link-success">The Hill We Climb: An Inaugural
                                        Poem for the…
                                    </a><br><a href="#" class="link-success">Amanda Gorman</a></h5>
                                <p class="card-text p-2"><small class="text-muted fw-bolder">Hardcover<br>
                                        $12.25</small>
                                        <button class="btn btn-outline-warning" name="add_to_cart" type="submit">Add to cart</button>
                                        <input type="hidden" name="item_name" value="bag9">
                                        <input type="hidden" name="price" value="$12.25">
                                        </p>
                            </div>
                        </form>
                        </div>
                        <div class="card  rounded-3">
                            <img src="pics/6.jpg" class="card-img-top p-3" alt="...">
                        <form action="handlecart.php" method="post">
                            <div class="card-body">
                                <h5 class="card-title"><a href="#" class="link-success">The Sanatorium: A Novel
                                    </a><br><a href="#" class="link-success">
                                        Sarah Pearse</a></h5>
                                <p class="card-text p-4"><small class="text-muted fw-bolder">Hardcover<br>
                                        $18.88</small>
                                        <button class="btn btn-outline-warning" name="add_to_cart" type="submit">Add to cart</button>
                                        <input type="hidden" name="item_name" value="bag10">
                                        <input type="hidden" name="price" value="$18.88">
                                        </p>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="carousel-item mb-4" style="height:400px">
                    <div class="card-group gap-3 mx-auto " style="width: 1200px;">
                        <div class="card  rounded-3">
                            <img src="pics/3.jpg" class="card-img-top p-3" alt="...">
                        <form action="handlecart.php" method="post">
                            <div class="card-body">
                                <h5 class="card-title"><a href="#" class="link-success">Just as I Am: A Memoir
                                    </a><br><a href="#" class="link-success">Cicely Tyson</a></h5>
                                <p class="card-text p-4"><small class="text-muted fw-bolder">Hardcover<br>
                                        $18.58</small>
                                        <button class="btn btn-outline-warning" name="add_to_cart" type="submit">Add to cart</button>
                                        <input type="hidden" name="item_name" value="bag11">
                                        <input type="hidden" name="price" value="$18.58">
                                        </p>
                            </div>
                        </form>   
                        </div>
                        <div class="card  rounded-3">
                            <img src="pics/4.jpg" class="card-img-top p-3" alt="...">
                            <form action="handlecart.php" method="post">
                            <div class="card-body">
                                <h5 class="card-title"><a href="#" class="link-success">Four Hundred Souls: A Community
                                        History of…
                                    </a><br><a href="#" class="link-success">Ibram X. Kendi</a></h5>
                                <p class="card-text p-2"><small class="text-muted fw-bolder">Hardcover<br>
                                        $22.49</small>
                                        <button class="btn btn-outline-warning" name="add_to_cart" type="submit">Add to cart</button>\
                                        <input type="hidden" name="item_name" value="bag12">
                                        <input type="hidden" name="price" value="$22.49">
                                        </p>
                            </div>
                        </form>    
                        </div>
                        <div class="card  rounded-3">
                            <img src="pics/5.jpg" class="card-img-top p-3" alt="...">
                            <form action="handlecart.php" method="post">
                            <div class="card-body">
                                <h5 class="card-title"><a href="#" class="link-success">The Hill We Climb: An Inaugural
                                        Poem for the…
                                    </a><br><a href="#" class="link-success">Amanda Gorman</a></h5>
                                <p class="card-text p-2"><small class="text-muted fw-bolder">Hardcover<br>
                                        $12.25</small>
                                        <button class="btn btn-outline-warning" name="add_to_cart" type="submit">Add to cart</button>
                                        <input type="hidden" name="item_name" value="bag13">
                                        <input type="hidden" name="price" value="$12.25">
                                        </p>
                            </div>
                            </form>
                        </div>
                        <div class="card  rounded-3">
                            <img src="pics/6.jpg" class="card-img-top p-3" alt="...">
                            <form action="handlecart.php" method="post">
                            <div class="card-body">
                                <h5 class="card-title"><a href="#" class="link-success">The Sanatorium: A Novel
                                    </a><br><a href="#" class="link-success">
                                        Sarah Pearse</a></h5>
                                <p class="card-text p-4"><small class="text-muted fw-bolder">Hardcover<br>
                                        $18.88</small>
                                        <button class="btn btn-outline-warning" name="add_to_cart" type="submit">Add to cart</button>
                                        <input type="hidden" name="item_name" value="bag14">
                                        <input type="hidden" name="price" value="$18.88">
                                        </p>
                            </div>
                            </form>
                        </div>
                        <div class="card  rounded-3">
                            <img src="pics/7.jpg" class="card-img-top" alt="...">
                            <form action="handlecart.php" method="post">
                            <div class="card-body">
                                <h5 class="card-title"><a href="#" class="link-success">The Haunted Mansion (Disney
                                        Classic) (Little…
                                    </a><br><a href="#" class="link-success">
                                        Lauren Clauss</a></h5>
                                <p class="card-text p-4"><small class="text-muted fw-bolder">Hardcover<br>
                                        $5.99</small>
                                        <button class="btn btn-outline-warning" name="add_to_cart" type="submit">Add to cart</button>
                                        <input type="hidden" name="item_name" value="bag15">
                                        <input type="hidden" name="price" value="$5.99">
                                        </p>
                            </div>
                           </form> 
                        </div>
                    </div>
                </div>
                <div class="carousel-item mb-4" style="height:400px">
                    <div class="card-group gap-3  mx-auto" style="width: 1200px;">
                        <div class="card   rounded-3">
                            <img src="pics/4.jpg" class="card-img-top p-3" alt="...">
                            <form action="handlecart.php" method="post">
                            <div class="card-body">
                                <h5 class="card-title"><a href="#" class="link-success">Four Hundred Souls: A Community
                                        History of…
                                    </a><br><a href="#" class="link-success">Ibram X. Kendi</a></h5>
                                <p class="card-text p-2"><small class="text-muted fw-bolder">Hardcover<br>
                                        $22.49</small>
                                        <button class="btn btn-outline-warning" name="add_to_cart"  type="submit">Add to cart</button>
                                        <input type="hidden" name="item_name" value="bag16">
                                        <input type="hidden" name="price" value="$22.49">
                                        </p>
                            </div>
                            </form>
                        </div>
                        <div class="card  rounded-3">
                            <img src="pics/5.jpg" class="card-img-top p-3" alt="...">
                            <form action="handlecart.php" method="post">
                            <div class="card-body">
                                <h5 class="card-title"><a href="#" class="link-success">The Hill We Climb: An Inaugural
                                        Poem for the…
                                    </a><br><a href="#" class="link-success">Amanda Gorman</a></h5>
                                <p class="card-text p-2"><small class="text-muted fw-bolder">Hardcover<br>
                                        $12.25</small>
                                        <button class="btn btn-outline-warning"name="add_to_cart" type="submit">Add to cart</button>
                                        <input type="hidden" name="item_name" value="bag17">
                                        <input type="hidden" name="price" value="$12.25">
                                        </p>
                            </div>
                            </form>
                        </div>
                        <div class="card rounded-3">
                            <img src="pics/6.jpg" class="card-img-top p-3 " alt="...">
                            <form action="handlecart.php" method="post">
                            <div class="card-body">
                                <h5 class="card-title"><a href="#" class="link-success">The Sanatorium: A Novel
                                    </a><br><a href="#" class="link-success">
                                        Sarah Pearse</a></h5>
                                <p class="card-text p-4"><small class="text-muted fw-bolder">Hardcover<br>
                                        $18.88</small>
                                        <button class="btn btn-outline-warning" name="add_to_cart" type="submit">Add to cart</button>
                                        <input type="hidden" name="item_name" value="bag18">
                                        <input type="hidden" name="price" value="$18.88">
                                        </p>
                            </div>
                           </form> 
                        </div>
                        <div class="card  rounded-3">
                            <img src="pics/7.jpg" class="card-img-top p-3 " alt="...">
                            <form action="handlecart.php" method="post">
                            <div class="card-body">
                                <h5 class="card-title"><a href="#" class="link-success">The Haunted Mansion (Disney
                                        Classic) (Little…
                                    </a><br><a href="#" class="link-success">
                                        Lauren Clauss</a></h5>
                                <p class="card-text p-4"><small class="text-muted fw-bolder">Hardcover<br>
                                        $5.99</small>
                                        <button class="btn btn-outline-warning" name="add_to_cart" type="submit">Add to cart</button>
                                        <input type="hidden" name="item_name" value="bag19">
                                        <input type="hidden" name="price" value="$5.99">
                                        </p>
                            </div>
                        </div>
                        <div class="card  rounded-3">
                            <img src="pics/1.jpg" class="card-img-top p-3 " alt="...">
                            <form action="handlecart.php" method="post">
                            <div class="card-body">
                                <h5 class="card-title"><a href="#" class="link-success">The Four Winds: A
                                        Novel</a><br><a href="#" class="link-success"> Kristin Hannah</a></h5>
                                <p class="card-text p-4"><small class="text-muted fw-bolder">Hardcover<br>
                                        $17.39</small>
                                        <button class="btn btn-outline-warning" name="add_to_cart" type="submit">Add to cart</button>
                                        <input type="hidden" name="item_name" value="bag20">
                                        <input type="hidden" name="price" value="$17.39">
                                        </p>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </a>
            </div>
        </div>

        <div class="box-1">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active p-5">
                        <img src="pics/kid.jpg" class="d-block w-100" alt="...">
                    </div>

                </div>
            </div>
        </div>

        <div class="box-2">
            <div class="text-center p-4 ">
                <h1 class="display-5 fw-bold">
                    <span class="border-bottom border-danger border-3 fw-6 font-italic">
                        Children and Young Adult Books
                    </span>
                </h1>

            </div>
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
                    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
                </ol>
                <div class="carousel-inner p-5  shadow-lg p-3 mb-5 bg-secondary rounded ">
                    <div class="carousel-item active mb-4" style="height:450px">
                        <div class="card-group gap-3 mx-auto" style="width: 1200px;">
                            <div class="card rounded-3">
                                <img src="pics/mother.jpg" class="card-img-top p-4" alt="..." width="20" height="260">
                                <form action="handlecart.php" method="post">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="#" class="link-success">A Mother's Love</a><br><a
                                            href="#" class="link-success">
                                            Marilee Joy Mayfield</a></h5>
                                    <p class="card-text p-4"><small class="text-muted fw-bolder">Hardcover<br>
                                            $14.95</small>
                                            <button class="btn btn-outline-warning" name="add_to_cart" type="submit">Add to cart</button>
                                            <input type="hidden" name="item_name" value="bag21">
                                        <input type="hidden" name="price" value="$14.95">
                                            </p>
                                </div>
                                </form>
                            </div>
                            <div class="card  rounded-3">
                                <img src="pics/fiona.jpg" class="card-img-top p-4" alt="..." width="20" height="260">
                                <form action="handlecart.php" method="post">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="#" class="link-success">Fiona Flamingo Rachael
                                            Urrutia Chu</a><br><a href="#" class="link-success">Rachael Urrutia Chu,
                                            Kate Jeffery</a></h5>
                                    <p class="card-text p-2"><small class="text-muted fw-bolder">Hardcover<br>
                                            $13.46</small>
                                            <button class="btn btn-outline-warning" name="add_to_cart" type="submit">Add to cart</button>
                                            <input type="hidden" name="item_name" value="bag22">
                                        <input type="hidden" name="price" value="$13.46">
                                            </p>
                                </div>
                                </form>
                            </div>
                            <div class="card rounded-3 ">
                                <img src="pics/hello.jpg" class="card-img-top p-4" alt="..." width="20" height="260">
                                <form action="handlecart.php" method="post">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="#" class="link-success">Hello, Little Dreamer
                                        </a><br><a href="#" class="link-success">Kathie Lee Gifford</a></h5>
                                    <p class="card-text p-4"><small class="text-muted fw-bolder">Hardcover<br>
                                            $11.89 </small>
                                            <button class="btn btn-outline-warning" name="add_to_cart" type="submit">Add to cart</button>
                                            <input type="hidden" name="item_name" value="bag23">
                                        <input type="hidden" name="price" value="$11.89">
                                            </p>
                                </div>
                                </form>
                            </div>
                            <div class="card  rounded-3">
                                <img src="pics/kid1.jpg" class="card-img-top p-4" alt="..." width="20" height="260">
                                <form action="handlecart.php" method="post">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="#" class="link-success">Love from the Crayons
                                        </a><br><a href="#" class="link-success">Drew Daywalt, Oliver Jeffers</a></h5>
                                    <p class="card-text p-0"><small class="text-muted fw-bolder">Hardcover<br>
                                            $5.11</small></p>

                                    <p class="card-text text-decoration-line-through"><small
                                            class="text-muted fw-bolder">
                                            $9.99</small>
                                            <button class="btn btn-outline-warning" name="add_to_cart" type="submit">Add to cart</button>
                                            <input type="hidden" name="item_name" value="bag24">
                                        <input type="hidden" name="price" value="$5.11">
                                            </p>
                                </div>
                                </form>
                                
                            </div>
                            <div class="card rounded-3 ">
                                <img src="pics/tiny.jpg" class="card-img-top p-4" alt="..." width="20" height="260">
                                <form action="handlecart.php" method="post">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="#" class="link-success">The Super Tiny Ghost
                                        </a><br><a href="#" class="link-success">Marilee Joy Mayfield</a></h5>
                                    <p class="card-text p-2"><small class="text-muted fw-bolder">Hardcover<br>
                                            $13.79</small>
                                            <button class="btn btn-outline-warning" name="add_to_cart" type="submit">Add to cart</button>
                                            <input type="hidden" name="item_name" value="bag25">
                                        <input type="hidden" name="price" value="$13.79">
                                            </p>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item mb-4 " style="height:450px">
                        <div class="card-group gap-3 mx-auto" style="width: 1200px; ">
                            <div class="card rounded-3 ">
                                <img src="pics/fiona.jpg" class="card-img-top p-4" alt="..." width="20" height="260">
                                <form action="handlecart.php" method="post">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="#" class="link-success">Fiona Flamingo Rachael
                                            Urrutia Chu</a><br><a href="#" class="link-success">
                                            Rachael Urrutia Chu, Kate Jeffery</a></h5>
                                    <p class="card-text p-2"><small class="text-muted fw-bolder">Hardcover<br>
                                            $13.46</small>
                                            <button class="btn btn-outline-warning" name="add_to_cart" type="submit">Add to cart</button>
                                            <input type="hidden" name="item_name" value="bag26">
                                        <input type="hidden" name="price" value="$13.46">
                                            </p>
                                </div>
                                </form>
                            </div>
                            <div class="card rounded-3 ">
                                <img src="pics/hello.jpg" class="card-img-top p-4" alt="..." width="20" height="260">
                                <form action="handlecart.php" method="post">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="#" class="link-success">Hello, Little Dreamer
                                        </a><br><a href="#" class="link-success">Kathie Lee Gifford</a></h5>
                                    <p class="card-text p-4"><small class="text-muted fw-bolder">Hardcover<br>
                                            $11.89</small>
                                            <button class="btn btn-outline-warning" name="add_to_cart" type="submit">Add to cart</button>
                                            <input type="hidden" name="item_name" value="bag27">
                                        <input type="hidden" name="price" value="$11.89">
                                            </p>
                                </div>
                                </form>
                            </div>
                            <div class="card rounded-3 ">
                                <img src="pics/kid1.jpg" class="card-img-top p-4" alt="..." width="20" height="260">
                                <form action="handlecart.php" method="post">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="#" class="link-success">Love from the Crayons
                                        </a><br><a href="#" class="link-success">Drew Daywalt, Oliver Jeffers</a></h5>
                                    <p class="card-text p-0"><small class="text-muted fw-bolder">Hardcover<br>
                                            $5.11</small></p>

                                    <p class="card-text text-decoration-line-through"><small
                                            class="text-muted fw-bolder">
                                            $9.99</small>
                                            <button class="btn btn-outline-warning" name="add_to_cart" type="submit">Add to cart</button>
                                            <input type="hidden" name="item_name" value="bag28">
                                        <input type="hidden" name="price" value="$5.11">
                                            </p>
                                </div>
                                </form>
                            </div>
                            <div class="card rounded-3 ">
                                <img src="pics/tiny.jpg" class="card-img-top p-4" alt="..." width="20" height="260">
                                <form action="handlecart.php" method="post">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="#" class="link-success">The Super Tiny Ghost
                                        </a><br><a href="#" class="link-success">Marilee Joy Mayfield</a></h5>
                                    <p class="card-text p-2"><small class="text-muted fw-bolder">Hardcover<br>
                                            $13.79</small>
                                            <button class="btn btn-outline-warning" name="add_to_cart" type="submit">Add to cart</button>
                                            <input type="hidden" name="item_name" value="bag29">
                                        <input type="hidden" name="price" value="$13.79">
                                            </p>
                                </div>
                                </form>
                            </div>
                            <div class="card rounded-3 ">
                                <img src="pics/turtle.jpg" class="card-img-top p-4" alt="..." width="20" height="260">
                                <form action="handlecart.php" method="post">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="#" class="link-success">Slow Down Turtle
                                        </a><br><a href="#" class="link-success">
                                            Craig Jones</a></h5>
                                    <p class="card-text p-4"><small class="text-muted fw-bolder">Hardcover<br>
                                            $17.99 </small>
                                            <button class="btn btn-outline-warning" name="add_to_cart" type="submit">Add to cart</button>
                                            <input type="hidden" name="item_name" value="bag30">
                                        <input type="hidden" name="price" value="$17.99">
                                            </p>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item mb-4" style="height:450px">
                        <div class="card-group gap-3 mx-auto" style="width: 1200px;">
                            <div class="card rounded-3 ">
                                <img src="pics/hello.jpg" class="card-img-top p-4" alt="..." width="20" height="260">
                                <form action="handlecart.php" method="post">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="#" class="link-success">Hello, Little Dreamer
                                        </a><br><a href="#" class="link-success">Kathie Lee Gifford</a></h5>
                                    <p class="card-text p-4"><small class="text-muted fw-bolder">Hardcover<br>
                                            $11.89</small>
                                            <button class="btn btn-outline-warning" name="add_to_cart" type="submit">Add to cart</button>
                                            <input type="hidden" name="item_name" value="bag31">
                                        <input type="hidden" name="price" value="$11.89">
                                            </p>
                                </div>
                                </form>
                            </div>
                            <div class="card rounded-3 ">
                                <img src="pics/kid1.jpg" class="card-img-top p-4" alt="..." width="20" height="260">
                                <form action="handlecart.php" method="post">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="#" class="link-success">Love from the Crayons
                                        </a><br><a href="#" class="link-success">Drew Daywalt, Oliver Jeffers</a></h5>
                                    <p class="card-text p-0"><small class="text-muted fw-bolder">Hardcover<br>
                                            $5.11</small></p>

                                    <p class="card-text text-decoration-line-through"><small
                                            class="text-muted fw-bolder">
                                            $9.99</small>
                                            <button class="btn btn-outline-warning" name="add_to_cart" type="submit">Add to cart</button>
                                            <input type="hidden" name="item_name" value="bag32">
                                        <input type="hidden" name="price" value="$5.11">
                                            </p>
                                </div>
                                </form>
                            </div>
                            <div class="card ">
                                <img src="pics/tiny.jpg" class="card-img-top p-4" alt="..." width="20" height="260">
                                <form action="handlecart.php" method="post">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="#" class="link-success">The Super Tiny Ghost
                                        </a><br><a href="#" class="link-success">Marilee Joy Mayfield</a></h5>
                                    <p class="card-text p-2"><small class="text-muted fw-bolder">Hardcover<br>
                                            $13.79</small>
                                            <button class="btn btn-outline-warning" name="add_to_cart" type="submit">Add to cart</button>
                                            <input type="hidden" name="item_name" value="bag33">
                                        <input type="hidden" name="price" value="$13.79">
                                            </p>
                                </div>
                                </form>
                            </div>
                            <div class="card rounded-3 ">
                                <img src="pics/turtle.jpg" class="card-img-top p-4" alt="..." width="20" height="260">
                                <form action="handlecart.php" method="post">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="#" class="link-success">Slow Down Turtle
                                        </a><br><a href="#" class="link-success">
                                            Craig Jones</a></h5>
                                    <p class="card-text p-4"><small class="text-muted fw-bolder">Hardcover<br>
                                            $17.99 </small>
                                            <button class="btn btn-outline-warning" name="add_to_cart" type="submit">Add to cart</button>
                                            <input type="hidden" name="item_name" value="bag34">
                                        <input type="hidden" name="price" value="$17.99">
                                            </p>
                                </div>
                                </form>
                            </div>
                            <div class="card rounded-3 ">
                                <img src="pics/jun.jpg" class="card-img-top p-4" alt="..." width="20" height="260">
                                <form action="handlecart.php" method="post">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="#" class="link-success">The Secret Words Dominic
                                            Anglim, Marta MagnuskaDominic Anglim
                                        </a><br><a href="#" class="link-success">
                                            Marta Magnuska</a></h5>
                                    <p class="card-text p-4"><small class="text-muted fw-bolder">Hardcover<br>
                                            $14.95</small>
                                            <button class="btn btn-outline-warning" name="add_to_cart" type="submit">Add to cart</button>
                                            <input type="hidden" name="item_name" value="bag35">
                                        <input type="hidden" name="price" value="$14.95">
                                            </p>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item mb-4" style="height:450px">
                        <div class="card-group gap-3  mx-auto" style="width: 1200px;">
                            <div class="card rounded-3  ">
                                <img src="pics/kid1.jpg" class="card-img-top p-4" alt="..." width="20" height="260">
                                <form action="handlecart.php" method="post">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="#" class="link-success">Love from the Crayons
                                        </a><br><a href="#" class="link-success">Drew Daywalt, Oliver Jeffers</a></h5>
                                    <p class="card-text p-0"><small class="text-muted fw-bolder">Hardcover<br>
                                            $5.11</small></p>

                                    <p class="card-text text-decoration-line-through"><small
                                            class="text-muted fw-bolder">
                                            $9.99</small>
                                            <button class="btn btn-outline-warning" name="add_to_cart" type="submit">Add to cart</button>
                                            <input type="hidden" name="item_name" value="bag36">
                                        <input type="hidden" name="price" value="$5.11">
                                            </p>
                                </div>
                                </form>
                            </div>
                            <div class="card rounded-3 ">
                                <img src="pics/tiny.jpg" class="card-img-top p-4" alt="..." width="20" height="260">
                                <form action="handlecart.php" method="post">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="#" class="link-success">The Super Tiny Ghost
                                        </a><br><a href="#" class="link-success">Marilee Joy Mayfield</a></h5>
                                    <p class="card-text p-2"><small class="text-muted fw-bolder">Hardcover<br>
                                            $13.79</small>
                                            <button class="btn btn-outline-warning" name="add_to_cart" type="submit">Add to cart</button>
                                            <input type="hidden" name="item_name" value="bag37">
                                        <input type="hidden" name="price" value="$13.79">
                                            </p>
                                </div>
                                </form>
                            </div>
                            <div class="card rounded-3 ">
                                <img src="pics/turtle.jpg" class="card-img-top p-4" alt="..." width="20" height="260">
                                <form action="handlecart.php" method="post">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="#" class="link-success">Slow Down Turtle
                                        </a><br><a href="#" class="link-success">
                                            Craig Jones</a></h5>
                                    <p class="card-text p-4"><small class="text-muted fw-bolder">Hardcover<br>
                                            $17.99 </small>
                                            <button class="btn btn-outline-warning" name="add_to_cart" type="submit">Add to cart</button>
                                            <input type="hidden" name="item_name" value="bag38">
                                        <input type="hidden" name="price" value="$17.99">
                                            </p>
                                </div>
                                </form>
                            </div>
                            <div class="card rounded-3 ">
                                <img src="pics/jun.jpg" class="card-img-top p-4" alt="..." width="20" height="260">
                                <form action="handlecart.php" method="post">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="#" class="link-success">The Secret Words Dominic
                                            Anglim, Marta MagnuskaDominic Anglim
                                        </a><br><a href="#" class="link-success">
                                            Marta Magnuska</a></h5>
                                    <p class="card-text p-4"><small class="text-muted fw-bolder">Hardcover<br>
                                            $14.95</small>
                                            <button class="btn btn-outline-warning" name="add_to_cart" type="submit">Add to cart</button>
                                            <input type="hidden" name="item_name" value="bag39">
                                        <input type="hidden" name="price" value="$14.95">
                                            </p>
                                </div>
                                </form>
                            </div>
                            <div class="card rounded-3 ">
                                <img src="pics/mother.jpg" class="card-img-top p-4 " alt="..." width="20" height="260">
                                <form action="handlecart.php" method="post">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="#" class="link-success">A Mother's Love</a><br><a
                                            href="#" class="link-success">
                                            Marilee Joy Mayfield</a></h5>
                                    <p class="card-text p-4"><small class="text-muted fw-bolder">Hardcover<br>
                                            $14.95</small>
                                            <button class="btn btn-outline-warning" name="add_to_cart" type="submit">Add to cart</button>
                                            <input type="hidden" name="item_name" value="bag40">
                                        <input type="hidden" name="price" value="$14.95">
                                            </p>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="box-3">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active p-4">
                            <img src="pics/best.jpg" class="d-block w-100" alt="...">
                        </div>

                    </div>
                </div>
            </div>


            <div class="box-3">
                <div class="text-center p-4 ">
                    <h1 class="display-5 fw-bold">
                        <span class="border-bottom border-danger border-3 fw-6 font-italic">
                            BestSellers
                        </span>
                    </h1>

                </div>
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner p-5  shadow-lg p-3 mb-5 bg-warning rounded ">
                        <div class="carousel-item active mb-4" style="height:450px">
                            <div class="card-group gap-3 mx-auto" style="width: 1200px;">
                                <div class="card rounded-3">
                                    <img src="pics/yogi1.jpeg" class="card-img-top p-5" alt="..." width="10px"
                                        height="260px">
                                    <div class="card-body">
                                        <h5 class="card-title"><a href="#" class="link-success">Adiyogi : The Source of
                                                Yoga
                                            </a><br><a href="#" class="link-success">
                                                Sadhguru</a></h5>
                                        <p class="card-text p-4"><small class="text-muted fw-bolder">Available<br>
                                                Rs194</small></p>
                                    </div>
                                </div>
                                <div class="card rounded-3">
                                    <img src="pics/chet2.jpeg" class="card-img-top p-5" alt="..." width="10px"
                                        height="260px">
                                    <div class="card-body">
                                        <h5 class="card-title"><a href="#" class="link-success">The Girl in Room 105
                                            </a><br><a href="#" class="link-success">
                                                Chetan Bhagat</a></h5>
                                        <p class="card-text p-4"><small class="text-muted fw-bolder">Available<br>
                                                Rs. 151</small>
                                                <button class="btn btn-outline-warning" type="submit">Add to cart</button>
                                                </p>
                                    </div>
                                </div>
                                <div class="card rounded-3">
                                    <img src="pics/nag.jpeg" class="card-img-top p-5" alt="..." width="10px" height="260px">
                                    <div class="card-body">
                                        <h5 class="card-title"><a href="#" class="link-success">Secret of the Nagas
                                            </a><br><a href="#" class="link-success">
                                                Amish Tripathi</a></h5>
                                        <p class="card-text p-4"><small class="text-muted fw-bolder">Available<br>
                                                Rs.299</small>
                                                <button class="btn btn-outline-warning" type="submit">Add to cart</button>
                                                </p>
                                    </div>
                                </div>
                                <div class="card rounded-3">
                                    <img src="pics/ind4.jpeg" class="card-img-top p-5" alt="..." width="10px" height="260px">
                                    <div class="card-body">
                                        <h5 class="card-title"><a href="#" class="link-success">Making India Awesome:
                                                New Essays and Columns
                                            </a><br><a href="#" class="link-success">
                                                Chetan Bhagat</a></h5>
                                        <p class="card-text p-4"><small class="text-muted fw-bolder">Available<br>
                                                Rs.137</small>
                                                <button class="btn btn-outline-warning" type="submit">Add to cart</button>
                                                </p>
                                    </div>
                                </div>
                                <div class="card rounded-3">
                                    <img src="pics/light5.jpeg" class="card-img-top p-5" alt="..." width="10px"
                                        height="260px">
                                    <div class="card-body">
                                        <h5 class="card-title"><a href="#" class="link-success">All the Light we Cannot
                                                See
                                            </a><br><a href="#" class="link-success">
                                                Anthony Doerr</a></h5>
                                        <p class="card-text p-4"><small class="text-muted fw-bolder">Available<br>
                                                Rs334</small>
                                                <button class="btn btn-outline-warning" type="submit">Add to cart</button>
                                                </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item  mb-3" style="height:600px">
                            <div class="card-group gap-3 mx-auto" style="width: 1200px; ">
                                <div class="card rounded-3 ">
                                    <img src="pics/chet2.jpeg" class="card-img-top p-5" alt="..." width="10px"
                                        height="260px">
                                    <div class="card-body">
                                        <h5 class="card-title"><a href="#" class="link-success">The Girl in Room 105
                                            </a><br><a href="#" class="link-success">
                                                Chetan Bhagat</a></h5>
                                        <p class="card-text p-4"><small class="text-muted fw-bolder">Available<br>
                                                Rs. 151</small>
                                                <button class="btn btn-outline-warning" type="submit">Add to cart</button>
                                                </p>
                                    </div>
                                </div>
                                <div class="card">
                                    <img src="pics/nag.jpeg" class="card-img-top p-5" alt="..." width="10px" height="260px">
                                    <div class="card-body rounded-3">
                                        <h5 class="card-title"><a href="#" class="link-success">Secret of the Nagas
                                            </a><br><a href="#" class="link-success">
                                                Amish Tripathi</a></h5>
                                        <p class="card-text p-4"><small class="text-muted fw-bolder">Available<br>
                                                Rs.299</small>
                                                <button class="btn btn-outline-warning" type="submit">Add to cart</button>
                                                </p>
                                    </div>
                                </div>
                                <div class="card rounded-3">
                                    <img src="pics/ind4.jpeg" class="card-img-top p-5" alt="..." width="10px" height="260px">
                                    <div class="card-body">
                                        <h5 class="card-title"><a href="#" class="link-success">Making India Awesome:
                                                New Essays and Columns
                                            </a><br><a href="#" class="link-success">
                                                Chetan Bhagat</a></h5>
                                        <p class="card-text p-4"><small class="text-muted fw-bolder">Available<br>
                                                Rs.137</small>
                                                <button class="btn btn-outline-warning" type="submit">Add to cart</button>
                                                </p>
                                    </div>
                                </div>
                                <div class="card rounded-3">
                                    <img src="pics/light5.jpeg" class="card-img-top p-5" alt="..." width="10px"
                                        height="260px">
                                    <div class="card-body">
                                        <h5 class="card-title"><a href="#" class="link-success">All the Light we Cannot
                                                See
                                            </a><br><a href="#" class="link-success">
                                                Anthony Doerr</a></h5>
                                        <p class="card-text p-4"><small class="text-muted fw-bolder">Available<br>
                                                Rs334</small>
                                                <button class="btn btn-outline-warning" type="submit">Add to cart</button>
                                                </p>
                                    </div>
                                </div>
                                <div class="card rounded-3">
                                    <img src="pics/got6.jpeg" class="card-img-top p-5" alt="..." width="10px" height="260px">
                                    <div class="card-body">
                                        <h5 class="card-title"><a href="#" class="link-success">A Game of Thrones (A
                                                Song of Ice and Fire)
                                            </a><br><a href="#" class="link-success">
                                                George Rr Martin</a></h5>
                                        <p class="card-text p-4"><small class="text-muted fw-bolder">Available<br>
                                                Rs854</small>
                                                <button class="btn btn-outline-warning" type="submit">Add to cart</button>
                                                </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item " style="height:600px">
                            <div class="card-group gap-3 mx-auto" style="width: 1200px; ">
                                <div class="card rounded-3 ">
                                    <img src="pics/nag.jpeg" class="card-img-top p-5" alt="..." width="10px" height="260px">
                                    <div class="card-body">
                                        <h5 class="card-title"><a href="#" class="link-success">Secret of the Nagas
                                            </a><br><a href="#" class="link-success">
                                                Amish Tripathi</a></h5>
                                        <p class="card-text p-4"><small class="text-muted fw-bolder">Available<br>
                                                Rs.299</small>
                                                <button class="btn btn-outline-warning" type="submit">Add to cart</button>
                                                </p>
                                    </div>
                                </div>
                                <div class="card rounded-3">
                                    <img src="pics/ind4.jpeg" class="card-img-top p-5" alt="..." width="10px" height="260px">
                                    <div class="card-body">
                                        <h5 class="card-title"><a href="#" class="link-success">Making India Awesome:
                                                New Essays and Columns
                                            </a><br><a href="#" class="link-success">
                                                Chetan Bhagat</a></h5>
                                        <p class="card-text p-4"><small class="text-muted fw-bolder">Available<br>
                                                Rs.137</small>
                                                <button class="btn btn-outline-warning" type="submit">Add to cart</button>
                                                </p>
                                    </div>
                                </div>
                                <div class="card rounded-3">
                                    <img src="pics/light5.jpeg" class="card-img-top p-5" alt="..." width="10px"
                                        height="260px">
                                    <div class="card-body">
                                        <h5 class="card-title"><a href="#" class="link-success">All the Light we Cannot
                                                See
                                            </a><br><a href="#" class="link-success">
                                                Anthony Doerr</a></h5>
                                        <p class="card-text p-4"><small class="text-muted fw-bolder">Available<br>
                                                Rs334</small>
                                                <button class="btn btn-outline-warning" type="submit">Add to cart</button>
                                                </p>
                                    </div>
                                </div>
                                <div class="card rounded-3">
                                    <img src="pics/got6.jpeg" class="card-img-top p-5" alt="..." width="10px" height="260px">
                                    <div class="card-body">
                                        <h5 class="card-title"><a href="#" class="link-success">A Game of Thrones (A
                                                Song of Ice and Fire)
                                            </a><br><a href="#" class="link-success">
                                                George Rr Martin</a></h5>
                                        <p class="card-text p-4"><small class="text-muted fw-bolder">Available<br>
                                                Rs854</small>
                                                <button class="btn btn-outline-warning" type="submit">Add to cart</button>
                                                </p>
                                    </div>
                                </div>
                                <div class="card rounded-3">
                                    <img src="pics/black7.jpeg" class="card-img-top p-5" alt="..." width="10px"
                                        height="260px">
                                    <div class="card-body">
                                        <h5 class="card-title"><a href="#" class="link-success">Black Holes: The Reith
                                                Lectures
                                            </a><br><a href="#" class="link-success">
                                                Stephen Hawking</a></h5>
                                        <p class="card-text p-4"><small class="text-muted fw-bolder">Available<br>
                                                Rs66</small>
                                                <button class="btn btn-outline-warning" type="submit">Add to cart</button>
                                                </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item" style="height:600px">
                            <div class="card-group gap-3 mx-auto" style="width: 1200px; ">
                                <div class="card rounded-3 ">
                                    <img src="pics/ind4.jpeg" class="card-img-top p-5" alt="..." width="10px" height="260px">
                                    <div class="card-body">
                                        <h5 class="card-title"><a href="#" class="link-success">Making India Awesome:
                                                New Essays and Columns
                                            </a><br><a href="#" class="link-success">
                                                Chetan Bhagat</a></h5>
                                        <p class="card-text p-4"><small class="text-muted fw-bolder">Available<br>
                                                Rs.137</small>
                                                <button class="btn btn-outline-warning" type="submit">Add to cart</button>
                                                </p>
                                    </div>
                                </div>
                                <div class="card rounded-3">
                                    <img src="pics/light5.jpeg" class="card-img-top p-5" alt="..." width="10px"
                                        height="260px">
                                    <div class="card-body">
                                        <h5 class="card-title"><a href="#" class="link-success">All the Light we Cannot
                                                See
                                            </a><br><a href="#" class="link-success">
                                                Anthony Doerr</a></h5>
                                        <p class="card-text p-4"><small class="text-muted fw-bolder">Available<br>
                                                Rs334</small>
                                                <button class="btn btn-outline-warning" type="submit">Add to cart</button>
                                                </p>
                                    </div>
                                </div>
                                <div class="card rounded-3">
                                    <img src="pics/got6.jpeg" class="card-img-top p-5" alt="..." width="10px" height="260px">
                                    <div class="card-body">
                                        <h5 class="card-title"><a href="#" class="link-success">A Game of Thrones (A
                                                Song of Ice and Fire)
                                            </a><br><a href="#" class="link-success">
                                                George Rr Martin</a></h5>
                                        <p class="card-text p-4"><small class="text-muted fw-bolder">Available<br>
                                                Rs854</small>
                                                <button class="btn btn-outline-warning" type="submit">Add to cart</button>
                                                </p>
                                    </div>
                                </div>
                                <div class="card rounded-3">
                                    <img src="pics/black7.jpeg" class="card-img-top p-5" alt="..." width="10px"
                                        height="260px">
                                    <div class="card-body">
                                        <h5 class="card-title"><a href="#" class="link-success">Black Holes: The Reith
                                                Lectures
                                            </a><br><a href="#" class="link-success">
                                                Stephen Hawking</a></h5>
                                        <p class="card-text p-4"><small class="text-muted fw-bolder">Available<br>
                                                Rs66</small>
                                                <button class="btn btn-outline-warning" type="submit">Add to cart</button>
                                                </p>
                                    </div>
                                </div>
                                <div class="card rounded-3 ">
                                    <img src="pics/yogi1.jpeg" class="card-img-top p-5" alt="..." width="10px"
                                        height="260px">
                                    <div class="card-body">
                                        <h5 class="card-title"><a href="#" class="link-success">Adiyogi : The Source of
                                                Yoga
                                            </a><br><a href="#" class="link-success">
                                                Sadhguru</a></h5>
                                        <p class="card-text p-4"><small class="text-muted fw-bolder">Available<br>
                                                Rs194</small>
                                                <button class="btn btn-outline-warning" type="submit">Add to cart</button>
                                                </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </a>
                </div>

            </div>
            <?php require 'partial/footer.php' ?>

            <!-- Optional JavaScript; choose one of the two! -->

            <!-- Option 1: Bootstrap Bundle with Popper -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
                crossorigin="anonymous"></script>

            <!-- Option 2: Separate Popper and Bootstrap JS -->
            <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
</body>

</html>