<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce</title>
    
    <script src="assets/js/main.js"></script>
    <?php //include('assets/cdn.php'); ?>
</head>
<body>
    <?php include('nav.php'); ?>
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
                    <img class="slider_img" src="assets/images/slide1.jpg" alt="Los Angeles" style="width:100%; height:70%;">
                    <div class="carousel-caption">
                    <h3>Los Angeles</h3>
                    <p>We had such a great time in LA!</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="slider_img" src="assets/images/slide4.jpg" alt="Chicago" style="width:100%; height:70%;">
                    <div class="carousel-caption">
                    <h3>Los Angeles</h3>
                    <p>We had such a great time in LA!</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="slider_img" src="assets/images/slide3.jpg" alt="New York" style="width:100%; height:70%;">
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
        </div>
        <!--End Slide Show Carousel-->

        <!--Hot Sales Carousel-->
        <div class="section1">
            <h1> <i class="text-muted">Hot Sales</i> </h1>
            <hr>
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
                                    <div class="zoom">
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
                                    <div class="zoom">
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
                                    <div class="zoom">
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
                                    <div class="zoom">
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
                                    <div class="zoom">
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
                                    <div class="zoom">
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
                                    <div class="zoom">
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
                                    <div class="zoom">
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
                                    <div class="zoom">
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
                                    <div class="zoom">
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
                                    <div class="zoom">
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
                                    <div class="zoom">
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
        </div><hr>
        <!--End Hot Sales Carousel-->

        <!--Categories Section-->
        <div>
            <h1><i class="text-muted">Collections</i></h1>
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
        </div><hr>
        <!--End Categoris Section-->

        <!--Best Products Section-->
        <div>
            <h1><i class="text-muted">Featured Products</i></h1>
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
        </div><hr>
        <!--End Best Products Section-->

        <!-- Partners Section -->
        <div>
            <h1><i class="text-muted">Our Partners</i></h1>
            <hr>
            <div class="row no-gutters text-center">
                <img class="partner" src="assets/images/partner1.jpg" alt="Category">
                <img class="partner" src="assets/images/partner2.jpg" alt="Category">
                <img class="partner" src="assets/images/partner3.jpg" alt="Category">
                <img class="partner" src="assets/images/partner5.jpg" alt="Category">
                <img class="partner" src="assets/images/partner4.jpg" alt="Category">
                <img class="partner" src="assets/images/partner6.jpg" alt="Category">
                <img class="partner" src="assets/images/partner7.jpg" alt="Category">
                <img class="partner" src="assets/images/partner8.jpg" alt="Category">
            </div>
        </div>
        <!-- End Partners Section -->
        <hr>
    </div>
    <?php include('footer.php'); ?>
</body>
</html>