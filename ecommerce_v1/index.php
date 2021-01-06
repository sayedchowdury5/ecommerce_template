<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/2c655b324d.js" crossorigin="anonymous"></script>

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="assets/js/style.js"></script>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">
    <?php include('top_nav.php'); ?>
    <div class="container mt-3">
        <!--Slide Show Carousel-->
        <div id="demo" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
            </ul>

            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img id="slider_img" src="assets/images/slide1.jpg" alt="Los Angeles" >
                    <div class="carousel-caption">
                    <h3>Los Angeles</h3>
                    <p>We had such a great time in LA!</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img id="slider_img" src="assets/images/slide4.jpg" alt="Chicago" >
                    <div class="carousel-caption">
                    <h3>Los Angeles</h3>
                    <p>We had such a great time in LA!</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img id="slider_img" src="assets/images/slide3.jpg" alt="New York" >
                    <div class="carousel-caption">
                    <h3>Los Angeles</h3>
                    <p>We had such a great time in LA!</p>
                    </div>
                </div>
            </div>
            <div>
                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
                </a>
            </div>
        </div><hr>
        <!--End Slide Show Carousel-->

        <!-- Category Start -->
        <div class="p-5" style="border: 2px solid #FF6F00;border-radius: 20px;">
            <div><h1 class="text-center">Category</h1></div>
            <div class="row text-center">
                <div class="col-3 col-lg-2 p-0">
                    <img class="category1" src="assets/images/category/food.jpg" alt="food">
                    <p>Foods</p>
                </div>
                <div class="col-3 col-lg-2 p-0">
                    <img class="category1" src="assets/images/category/camera.jpg" alt="camera">
                    <p>Camera</p>
                </div>
                <div class="col-3 col-lg-2 p-0">
                    <img class="category1" src="assets/images/category/clothes.jpg" alt="clothes">
                    <p>Clothes</p>
                </div>
                <div class="col-3 col-lg-2 p-0">
                    <img class="category1" src="assets/images/category/computer.jpg" alt="computer">
                    <p>Computer</p>
                </div>
                <div class="col-3 col-lg-2 p-0">
                    <img class="category1" src="assets/images/category/gadget.jpg" alt="gadget">
                    <p>Gadget</p>
                </div>
                <div class="col-3 col-lg-2 p-0">
                    <img class="category1" src="assets/images/category/groceries.jpg" alt="groceries">
                    <p>Groceries</p>
                </div>
                <div class="col-3 col-lg-2 p-0">
                    <img class="category1" src="assets/images/category/kids.jpg" alt="kids">
                    <p>Kids</p>
                </div>
                <div class="col-3 col-lg-2 p-0">
                    <img class="category1" src="assets/images/category/mobile.jpg" alt="mobile">
                    <p>Mobile</p>
                </div>
                <div class="col-3 col-lg-2 p-0">
                    <img class="category1" src="assets/images/category/shoes.jpg" alt="shoes">
                    <p>Shoes</p>
                </div>
                <div class="col-3 col-lg-2 p-0">
                    <img class="category1" src="assets/images/category/watch.jpg" alt="watch">
                    <p>Watch</p>
                </div>
                <div class="col-3 col-lg-2 p-0">
                    <img class="category1" src="assets/images/category/wedding.jpg" alt="wedding">
                    <p>Wedding</p>
                </div>
            </div>
        </div>
        <!-- Category End -->

        <!--Hot Sales Carousel-->
        <div class="section1">
            <h1 class="text-center"> Hot Sales </h1>
            <hr style="background-color:#FF6F00;">
            <div id="hotSales" class="carousel slide" data-ride="carousel">
                <div>
                    <!-- Left and right controls -->
                    <a class="carousel-control-prev" href="#hotSales" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next text-warning" href="#hotSales" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                    </a>
                </div>
                <!-- The slideshow -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row text-center">
                            <div class="col-sm-6 col-md-6 col-lg-3">
                                <!-- Card -->
                                <div class="">
                                    <div class="">
                                        <a href="#!">
                                            <img class="img-fluid w-100" src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/12a.jpg" alt="Sample">
                                        </a>
                                    </div>
                                    <div class=" pt-4">
                                        <h5>Fantasy T-shirt</h5>
                                        <p class="mb-2 text-muted text-uppercase small">Shirts</p>
                                        <div class="">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fas fa-star fa-sm text-success"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star fa-sm text-success"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star fa-sm text-success"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star fa-sm text-success"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star fa-sm text-success"></i></li>    
                                            </ul>
                                        </div>
                                        <hr>
                                        <h6 class="mb-3">12.99 $</h6>
                                        <button type="button" class="btn btn-primary btn-sm mr-1 mb-2"><i class="fas fa-shopping-cart pr-2"></i>Add to cart</button>
                                        <a href="quick_view.php"><button type="button" class="btn btn-info btn-sm px-3 mb-2 material-tooltip-main" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="far fa-eye"></i></button></a>
                                        <button type="button" class="btn btn-danger btn-sm px-3 mb-2 material-tooltip-main" data-toggle="tooltip" data-placement="top" title="Add to favourite"><i class="far fa-heart"></i></button>
                                    </div>
                                </div><hr>
                                <!-- Card -->
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-3">
                                <!-- Card -->
                                <div>
                                    <div class="">
                                        <a href="#!">
                                            <img class="img-fluid w-100" src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/12a.jpg" alt="Sample">
                                        </a>
                                    </div>
                                    <div class=" pt-4">
                                        <h5>Fantasy T-shirt</h5>
                                        <p class="mb-2 text-muted text-uppercase small">Shirts</p>
                                        <div class="">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fas fa-star fa-sm text-success"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star fa-sm text-success"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star fa-sm text-success"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star fa-sm text-success"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star fa-sm text-success"></i></li>    
                                            </ul>
                                        </div>
                                        <hr>
                                        <h6 class="mb-3">12.99 $</h6>
                                        <button type="button" class="btn btn-primary btn-sm mr-1 mb-2"><i class="fas fa-shopping-cart pr-2"></i>Add to cart</button>
                                        <button type="button" class="btn btn-info btn-sm px-3 mb-2 material-tooltip-main" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="far fa-eye"></i></button>
                                        <button type="button" class="btn btn-danger btn-sm px-3 mb-2 material-tooltip-main" data-toggle="tooltip" data-placement="top" title="Add to favourite"><i class="far fa-heart"></i></button>
                                    </div>
                                </div><hr>
                                <!-- Card -->
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-3">
                                <!-- Card -->
                                <div>
                                    <div class="">
                                        <a href="#!">
                                            <img class="img-fluid w-100" src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/12a.jpg" alt="Sample">
                                        </a>
                                    </div>
                                    <div class="pt-4">
                                        <h5>Fantasy T-shirt</h5>
                                        <p class="mb-2 text-muted text-uppercase small">Shirts</p>
                                        <div class="">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fas fa-star fa-sm text-success"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star fa-sm text-success"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star fa-sm text-success"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star fa-sm text-success"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star fa-sm text-success"></i></li>    
                                            </ul>
                                        </div>
                                        <hr>
                                        <h6 class="mb-3">12.99 $</h6>
                                        <button type="button" class="btn btn-primary btn-sm mr-1 mb-2"><i class="fas fa-shopping-cart pr-2"></i>Add to cart</button>
                                        <button type="button" class="btn btn-info btn-sm px-3 mb-2 material-tooltip-main" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="far fa-eye"></i></button>
                                        <button type="button" class="btn btn-danger btn-sm px-3 mb-2 material-tooltip-main" data-toggle="tooltip" data-placement="top" title="Add to favourite"><i class="far fa-heart"></i></button>
                                    </div>
                                </div><hr>
                                <!-- Card -->
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-3">
                                <!-- Card -->
                                <div>
                                    <div class="">
                                        <a href="#!">
                                            <img class="img-fluid w-100" src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/12a.jpg" alt="Sample">
                                        </a>
                                    </div>
                                    <div class="pt-4">
                                        <h5>Fantasy T-shirt</h5>
                                        <p class="mb-2 text-muted text-uppercase small">Shirts</p>
                                        <div class="">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fas fa-star fa-sm text-success"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star fa-sm text-success"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star fa-sm text-success"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star fa-sm text-success"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star fa-sm text-success"></i></li>    
                                            </ul>
                                        </div>
                                        <hr>
                                        <h6 class="mb-3">12.99 $</h6>
                                        <button type="button" class="btn btn-primary btn-sm mr-1 mb-2"><i class="fas fa-shopping-cart pr-2"></i>Add to cart</button>
                                        <button type="button" class="btn btn-info btn-sm px-3 mb-2 material-tooltip-main" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="far fa-eye"></i></button>
                                        <button type="button" class="btn btn-danger btn-sm px-3 mb-2 material-tooltip-main" data-toggle="tooltip" data-placement="top" title="Add to favourite"><i class="far fa-heart"></i></button>
                                    </div>
                                </div><hr>
                                <!-- Card -->
                            </div>
                        </div>   
                    </div>

                    <div class="carousel-item">
                        <div class="row text-center">
                            <div class="col-sm-6 col-md-6 col-lg-3">
                                <!-- Card -->
                                <div>
                                    <div class="">
                                        <a href="#!">
                                            <img class="img-fluid w-100" src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/12a.jpg" alt="Sample">
                                        </a>
                                    </div>
                                    <div class=" pt-4">
                                        <h5>Fantasy T-shirt</h5>
                                        <p class="mb-2 text-muted text-uppercase small">Shirts</p>
                                        <div class="">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fas fa-star fa-sm text-success"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star fa-sm text-success"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star fa-sm text-success"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star fa-sm text-success"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star fa-sm text-success"></i></li>    
                                            </ul>
                                        </div>
                                        <hr>
                                        <h6 class="mb-3">12.99 $</h6>
                                        <button type="button" class="btn btn-primary btn-sm mr-1 mb-2"><i class="fas fa-shopping-cart pr-2"></i>Add to cart</button>
                                        <button type="button" class="btn btn-info btn-sm px-3 mb-2 material-tooltip-main" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="far fa-eye"></i></button>
                                        <button type="button" class="btn btn-danger btn-sm px-3 mb-2 material-tooltip-main" data-toggle="tooltip" data-placement="top" title="Add to favourite"><i class="far fa-heart"></i></button>
                                    </div>
                                </div><hr>
                                <!-- Card -->
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-3">
                                <!-- Card -->
                                <div>
                                    <div class="">
                                        <a href="#!">
                                            <img class="img-fluid w-100" src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/12a.jpg" alt="Sample">
                                        </a>
                                    </div>
                                    <div class="pt-4">
                                        <h5>Fantasy T-shirt</h5>
                                        <p class="mb-2 text-muted text-uppercase small">Shirts</p>
                                        <div class="">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fas fa-star fa-sm text-success"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star fa-sm text-success"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star fa-sm text-success"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star fa-sm text-success"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star fa-sm text-success"></i></li>    
                                            </ul>
                                        </div>
                                        <hr>
                                        <h6 class="mb-3">12.99 $</h6>
                                        <button type="button" class="btn btn-primary btn-sm mr-1 mb-2"><i class="fas fa-shopping-cart pr-2"></i>Add to cart</button>
                                        <button type="button" class="btn btn-info btn-sm px-3 mb-2 material-tooltip-main" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="far fa-eye"></i></button>
                                        <button type="button" class="btn btn-danger btn-sm px-3 mb-2 material-tooltip-main" data-toggle="tooltip" data-placement="top" title="Add to favourite"><i class="far fa-heart"></i></button>
                                    </div>
                                </div><hr>
                                <!-- Card -->
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-3">
                                <!-- Card -->
                                <div>
                                    <div class="">
                                        <a href="#!">
                                            <img class="img-fluid w-100" src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/12a.jpg" alt="Sample">
                                        </a>
                                    </div>
                                    <div class=" pt-4">
                                        <h5>Fantasy T-shirt</h5>
                                        <p class="mb-2 text-muted text-uppercase small">Shirts</p>
                                        <div class="">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fas fa-star fa-sm text-success"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star fa-sm text-success"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star fa-sm text-success"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star fa-sm text-success"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star fa-sm text-success"></i></li>    
                                            </ul>
                                        </div>
                                        <hr>
                                        <h6 class="mb-3">12.99 $</h6>
                                        <button type="button" class="btn btn-primary btn-sm mr-1 mb-2"><i class="fas fa-shopping-cart pr-2"></i>Add to cart</button>
                                        <button type="button" class="btn btn-info btn-sm px-3 mb-2 material-tooltip-main" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="far fa-eye"></i></button>
                                        <button type="button" class="btn btn-danger btn-sm px-3 mb-2 material-tooltip-main" data-toggle="tooltip" data-placement="top" title="Add to favourite"><i class="far fa-heart"></i></button>
                                    </div>
                                </div><hr>
                                <!-- Card -->
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-3">
                                <!-- Card -->
                                <div>
                                    <div class="">
                                        <a href="#!">
                                            <img class="img-fluid w-100" src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/12a.jpg" alt="Sample">
                                        </a>
                                    </div>
                                    <div class=" pt-4">
                                        <h5>Fantasy T-shirt</h5>
                                        <p class="mb-2 text-muted text-uppercase small">Shirts</p>
                                        <div class="">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fas fa-star fa-sm text-success"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star fa-sm text-success"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star fa-sm text-success"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star fa-sm text-success"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star fa-sm text-success"></i></li>    
                                            </ul>
                                        </div>
                                        <hr>
                                        <h6 class="mb-3">12.99 $</h6>
                                        <button type="button" class="btn btn-primary btn-sm mr-1 mb-2"><i class="fas fa-shopping-cart pr-2"></i>Add to cart</button>
                                        <button type="button" class="btn btn-info btn-sm px-3 mb-2 material-tooltip-main" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="far fa-eye"></i></button>
                                        <button type="button" class="btn btn-danger btn-sm px-3 mb-2 material-tooltip-main" data-toggle="tooltip" data-placement="top" title="Add to favourite"><i class="far fa-heart"></i></button>
                                    </div>
                                </div><hr>
                                <!-- Card -->
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row text-center">
                            <div class="col-sm-6 col-md-6 col-lg-3">
                                <!-- Card -->
                                <div>
                                    <div class="">
                                        <a href="#!">
                                            <img class="img-fluid w-100" src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/12a.jpg" alt="Sample">
                                        </a>
                                    </div>
                                    <div class=" pt-4">
                                        <h5>Fantasy T-shirt</h5>
                                        <p class="mb-2 text-muted text-uppercase small">Shirts</p>
                                        <div class="">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fas fa-star fa-sm text-success"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star fa-sm text-success"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star fa-sm text-success"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star fa-sm text-success"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star fa-sm text-success"></i></li>    
                                            </ul>
                                        </div>
                                        <hr>
                                        <h6 class="mb-3">12.99 $</h6>
                                        <button type="button" class="btn btn-primary btn-sm mr-1 mb-2"><i class="fas fa-shopping-cart pr-2"></i>Add to cart</button>
                                        <button type="button" class="btn btn-info btn-sm px-3 mb-2 material-tooltip-main" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="far fa-eye"></i></button>
                                        <button type="button" class="btn btn-danger btn-sm px-3 mb-2 material-tooltip-main" data-toggle="tooltip" data-placement="top" title="Add to favourite"><i class="far fa-heart"></i></button>
                                    </div>
                                </div><hr>
                                <!-- Card -->
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-3">
                                <!-- Card -->
                                <div>
                                    <div class="">
                                        <a href="#!">
                                            <img class="img-fluid w-100" src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/12a.jpg" alt="Sample">
                                        </a>
                                    </div>
                                    <div class=" pt-4">
                                        <h5>Fantasy T-shirt</h5>
                                        <p class="mb-2 text-muted text-uppercase small">Shirts</p>
                                        <div class="">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fas fa-star fa-sm text-success"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star fa-sm text-success"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star fa-sm text-success"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star fa-sm text-success"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star fa-sm text-success"></i></li>    
                                            </ul>
                                        </div>
                                        <hr>
                                        <h6 class="mb-3">12.99 $</h6>
                                        <button type="button" class="btn btn-primary btn-sm mr-1 mb-2"><i class="fas fa-shopping-cart pr-2"></i>Add to cart</button>
                                        <button type="button" class="btn btn-info btn-sm px-3 mb-2 material-tooltip-main" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="far fa-eye"></i></button>
                                        <button type="button" class="btn btn-danger btn-sm px-3 mb-2 material-tooltip-main" data-toggle="tooltip" data-placement="top" title="Add to favourite"><i class="far fa-heart"></i></button>
                                    </div>
                                </div><hr>
                                <!-- Card -->
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-3">
                                <!-- Card -->
                                <div>
                                    <div class="">
                                        <a href="#!">
                                            <img class="img-fluid w-100" src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/12a.jpg" alt="Sample">
                                        </a>
                                    </div>
                                    <div class=" pt-4">
                                        <h5>Fantasy T-shirt</h5>
                                        <p class="mb-2 text-muted text-uppercase small">Shirts</p>
                                        <div class="">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fas fa-star fa-sm text-success"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star fa-sm text-success"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star fa-sm text-success"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star fa-sm text-success"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star fa-sm text-success"></i></li>    
                                            </ul>
                                        </div>
                                        <hr>
                                        <h6 class="mb-3">12.99 $</h6>
                                        <button type="button" class="btn btn-primary btn-sm mr-1 mb-2"><i class="fas fa-shopping-cart pr-2"></i>Add to cart</button>
                                        <button type="button" class="btn btn-info btn-sm px-3 mb-2 material-tooltip-main" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="far fa-eye"></i></button>
                                        <button type="button" class="btn btn-danger btn-sm px-3 mb-2 material-tooltip-main" data-toggle="tooltip" data-placement="top" title="Add to favourite"><i class="far fa-heart"></i></button>
                                    </div>
                                </div><hr>
                                <!-- Card -->
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-3">
                                <!-- Card -->
                                <div>
                                    <div class="">
                                        <a href="#!">
                                            <img class="img-fluid w-100" src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/12a.jpg" alt="Sample">
                                        </a>
                                    </div>
                                    <div class=" pt-4">
                                        <h5>Fantasy T-shirt</h5>
                                        <p class="mb-2 text-muted text-uppercase small">Shirts</p>
                                        <div class="">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fas fa-star fa-sm text-success"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star fa-sm text-success"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star fa-sm text-success"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star fa-sm text-success"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star fa-sm text-success"></i></li>    
                                            </ul>
                                        </div>
                                        <hr>
                                        <h6 class="mb-3">12.99 $</h6>
                                        <button type="button" class="btn btn-primary btn-sm mr-1 mb-2"><i class="fas fa-shopping-cart pr-2"></i>Add to cart</button>
                                        <button type="button" class="btn btn-info btn-sm px-3 mb-2 material-tooltip-main" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="far fa-eye"></i></button>
                                        <button type="button" class="btn btn-danger btn-sm px-3 mb-2 material-tooltip-main" data-toggle="tooltip" data-placement="top" title="Add to favourite"><i class="far fa-heart"></i></button>
                                    </div>
                                </div><hr>
                                <!-- Card -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><hr style="background-color:#FF6F00;">
        <!--End Hot Sales Carousel-->

        <!--Categories Section-->
        <div style="background-color: #ECEFF1;">
            <h1 class="text-center">Collections</h1>
            <hr>
            <div class="row no-gutters text-center">
                <div class="col-sm-4 col-lg-4">
                    <a href="#">
                        <img class="category" src="assets/images/hot1.jpg" alt="Category">
                        <div class="text-block">
                        <h3>Classics</h3>
                        </div>
                    </a>
                </div>
                <div class="col-sm-4 col-lg-4">
                    <a href="#">
                        <img class="category" src="assets/images/hot2.jpg" alt="Category">
                        <div class="text-block">
                        <h3>Fashions</h3>
                        </div>
                    </a>
                </div>
                <div class="col-sm-4 col-lg-4">
                    <a href="#">
                        <img class="category" src="assets/images/hot3.jpg" alt="Category">
                        <div class="text-block">
                        <h3>Sports</h3>
                        </div>
                    </a>
                </div>
            </div>
        </div><hr style="background-color:#FF6F00;">
        <!--End Categoris Section-->

        <!--Best Products Section-->
        <div style="background-color: #ECEFF1;">
            <h1 class="text-center">Featured Products</h1>
            <hr>
            <div class="row no-gutters text-center">
                <div class="col-sm-4">
                    <img class="category" src="assets/images/best1.jpg" alt="Category">
                </div>
                <div class="col-sm-4">
                    <img class="category" src="assets/images/best2.jpg" alt="Category">
                </div>
                <div class="col-sm-4">
                    <img class="category" src="assets/images/best3.jpg" alt="Category">
                </div>
                <div class="col-sm-4">
                    <img class="category" src="assets/images/best4.jpg" alt="Category">
                </div>
                <div class="col-sm-4">
                    <img class="category" src="assets/images/best5.jpg" alt="Category">
                </div>
                <div class="col-sm-4">
                    <img class="category" src="assets/images/best6.jpg" alt="Category">
                </div>
            </div>
        </div><hr style="background-color:#FF6F00;">
        <!--End Best Products Section-->

        <!-- Partners Section -->
        <div style="background-color: #ECEFF1;">
            <h1 class="text-center">Our Partners</h1>
            <hr>
            <div class="row text-center">
                <div class="col"><img class="partner" src="assets/images/partner1.jpg" alt="partner"></div>
                <div class="col"><img class="partner" src="assets/images/partner2.jpg" alt="partner"></div>
                <div class="col"><img class="partner" src="assets/images/partner5.jpg" alt="partner"></div>
                <div class="col"><img class="partner" src="assets/images/partner4.jpg" alt="partner"></div>
                <div class="col"><img class="partner" src="assets/images/partner7.jpg" alt="partner"></div>   
            </div>
        </div>
        <!-- End Partners Section -->
        <hr style="background-color:#FF6F00;">
        <!--Section: Contact v.2-->
        <section class="mb-4" style="background-color: #ECEFF1;">
            <!--Section heading-->
            <h1 class="text-center">Contact us</h1><hr>
            <!--Section description-->
            <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
                a matter of hours to help you.</p>

            <div class="row">
                <!--Grid column-->
                <div class="col-md-8 mb-md-0 mb-5">
                    <form id="contact-form" name="contact-form" action="#" method="POST">

                        <!--Grid row-->
                        <div class="row">
                            <!--Grid column-->
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" id="name" name="name" class="form-control">
                                    <label for="name" class="text-muted">Your name</label>
                                </div>
                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" id="email" name="email" class="form-control">
                                    <label for="email" class="text-muted">Your email</label>
                                </div>
                            </div>
                            <!--Grid column-->
                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form mb-0">
                                    <input type="text" id="subject" name="subject" class="form-control">
                                    <label for="subject" class="text-muted">Subject</label>
                                </div>
                            </div>
                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row">
                            <!--Grid column-->
                            <div class="col-md-12">

                                <div class="md-form">
                                    <textarea type="text" id="message" name="message" rows="5" class="form-control md-textarea"></textarea>
                                    <label for="message" class="text-muted">Your message</label>
                                </div>

                            </div>
                        </div>
                        <!--Grid row-->
                    </form>
                    <div class="text-center ">
                        <button type="button" class="btn" id="comment_submit" style="background-color:#FF6F00; color:white;">Send</button>
                    </div>
                    <div class="status"></div>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-4 text-center">
                    <ul class="list-unstyled mb-0">
                        <li><i class="fas fa-map-marker-alt fa-2x" style="color:#FF6F00"></i>
                            <p>Kuching, Sarawak, Malaysia</p>
                        </li>

                        <li><i class="fas fa-phone mt-4 fa-2x" style="color:#FF6F00"></i>
                            <p>+601110445260</p>
                        </li>

                        <li><i class="fas fa-envelope mt-4 fa-2x" style="color:#FF6F00"></i>
                            <p>sayedchowdury5@gmail.com</p>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->
            </div>
        </section><hr style="background-color:#FF6F00;">
        <!--Section: Contact v.2-->
        <!--Google map-->
        <div id="map-container-google-3" class="z-depth-1-half map-container-3">
            <iframe src="https://maps.google.com/maps?q=warsaw&t=k&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
            style="border:0" allowfullscreen></iframe>
        </div><hr>
    </div>
    <?php include('footer.php'); ?>
</body>
</html>