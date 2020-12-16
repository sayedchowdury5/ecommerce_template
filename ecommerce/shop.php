<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <script src="assets/js/main.js"></script>
</head>
<body>
<?php include('nav.php'); ?>
<div class="container">
    <hr>
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-2">
            <div>
                <h6 class="font-weight-bold mb-3">Subcategories</h6>
                <p>RETURN TO CLOTHING, SHOES, ACCESSORIES</p>
                <p>TOPS, TEES & BLOUSES</p>
                <p>FASHION HOODIES & SWEATSHIRTS</p>
            </div><hr>
            <div>
                <!-- Section: Condition -->
                <h6 class="font-weight-bold mb-3">Condition</h6>

                <div class="form-check pl-0 mb-3">
                    <input type="checkbox" class="form-check-input filled-in" id="new">
                    <label class="form-check-label small text-uppercase card-link-secondary" for="new">New</label>
                </div>
                <div class="form-check pl-0 mb-3">
                    <input type="checkbox" class="form-check-input filled-in" id="used">
                    <label class="form-check-label small text-uppercase card-link-secondary" for="used">Used</label>
                </div>
                <div class="form-check pl-0 mb-3">
                    <input type="checkbox" class="form-check-input filled-in" id="collectible">
                    <label class="form-check-label small text-uppercase card-link-secondary" for="collectible">Collectible</label>
                </div>
                <div class="form-check pl-0 mb-3 pb-1">
                    <input type="checkbox" class="form-check-input filled-in" id="renewed">
                    <label class="form-check-label small text-uppercase card-link-secondary" for="renewed">Renewed</label>
                </div>
                <!-- Section: Condition -->
            </div><hr>
            <div>
                <h6 class="font-weight-bold mb-3">Avg. Customer Review</h6>

                <a href="#!">
                    <ul class="list-inline">
                        <li class="list-inline-item"><i class="fas fa-star fa-sm text-success"></i></li>
                        <li class="list-inline-item"><i class="fas fa-star fa-sm text-success"></i></li>
                        <li class="list-inline-item"><i class="fas fa-star fa-sm text-success"></i></li>
                        <li class="list-inline-item"><i class="fas fa-star fa-sm text-success"></i></li>
                        <li class="list-inline-item"><i class="fas fa-star fa-sm text-muted"></i></li>
                        <li><p class="small text-uppercase card-link-secondary px-2">& Up</p></li>   
                    </ul>
                </a>
                <a href="#!">
                    <ul class="list-inline">
                        <li class="list-inline-item"><i class="fas fa-star fa-sm text-success"></i></li>
                        <li class="list-inline-item"><i class="fas fa-star fa-sm text-success"></i></li>
                        <li class="list-inline-item"><i class="fas fa-star fa-sm text-success"></i></li>
                        <li class="list-inline-item"><i class="fas fa-star fa-sm text-muted"></i></li>
                        <li class="list-inline-item"><i class="fas fa-star fa-sm text-muted"></i></li> 
                        <li><p class="small text-uppercase card-link-secondary px-2">& Up</p></li>   
                    </ul>
                </a>
                <a href="#!">
                    <ul class="list-inline">
                        <li class="list-inline-item"><i class="fas fa-star fa-sm text-success"></i></li>
                        <li class="list-inline-item"><i class="fas fa-star fa-sm text-success"></i></li>
                        <li class="list-inline-item"><i class="fas fa-star fa-sm text-muted"></i></li>
                        <li class="list-inline-item"><i class="fas fa-star fa-sm text-muted"></i></li>
                        <li class="list-inline-item"><i class="fas fa-star fa-sm text-muted"></i></li>  
                        <li><p class="small text-uppercase card-link-secondary px-2">& Up</p></li>  
                    </ul>
                </a>
                <a href="#!">
                    <ul class="list-inline">
                        <li class="list-inline-item"><i class="fas fa-star fa-sm text-success"></i></li>
                        <li class="list-inline-item"><i class="fas fa-star fa-sm text-muted"></i></li>
                        <li class="list-inline-item"><i class="fas fa-star fa-sm text-muted"></i></li>
                        <li class="list-inline-item"><i class="fas fa-star fa-sm text-muted"></i></li>
                        <li class="list-inline-item"><i class="fas fa-star fa-sm text-muted"></i></li>
                        <li><p class="small text-uppercase card-link-secondary px-2">& Up</p></li>    
                    </ul>
                </a>
            </div><hr>
            <div>
                <h6 class="font-weight-bold mb-3">Price</h6>

                <div class="form-check pl-0 mb-3">
                    <input type="radio" class="form-check-input" id="under25" name="materialExampleRadios">
                    <label class="form-check-label small text-uppercase card-link-secondary" for="under25">Under $25</label>
                </div>
                <div class="form-check pl-0 mb-3">
                    <input type="radio" class="form-check-input" id="2550" name="materialExampleRadios">
                    <label class="form-check-label small text-uppercase card-link-secondary" for="2550">$25 to $50</label>
                </div>
                <div class="form-check pl-0 mb-3">
                    <input type="radio" class="form-check-input" id="50100" name="materialExampleRadios">
                    <label class="form-check-label small text-uppercase card-link-secondary" for="50100">$50 to $100</label>
                </div>
                <div class="form-check pl-0 mb-3">
                    <input type="radio" class="form-check-input" id="100200" name="materialExampleRadios">
                    <label class="form-check-label small text-uppercase card-link-secondary" for="100200">$100 to $200</label>
                </div>
                <div class="form-check pl-0 mb-3">
                    <input type="radio" class="form-check-input" id="200above" name="materialExampleRadios">
                    <label class="form-check-label small text-uppercase card-link-secondary" for="200above">$200 & Above</label>
                </div>
                <form>
                    <div class="d-flex align-items-center mt-4 pb-1">
                        <div class="md-form md-outline my-0">
                            <input id="from" type="text" class="form-control mb-0">
                            <label for="form">$ Min</label>
                        </div>
                        <p class="px-2 mb-0 text-muted"> - </p>
                        <div class="md-form md-outline my-0">
                            <input id="to" type="text" class="form-control mb-0">
                            <label for="to">$ Max</label>
                        </div>
                    </div>
                </form>
            </div><hr>
            <div>
                <h6 class="font-weight-bold mb-3">Price</h6>

                <div class="slider-price d-flex align-items-center my-4">
                    <span class="font-weight-normal small text-muted mr-2">$0</span>
                    <form class="multi-range-field w-100 mb-1">
                        <input id="multi" class="multi-range" type="range" />
                    </form>
                    <span class="font-weight-normal small text-muted ml-2">$100</span>
                </div>
            </div><hr>
            <div>
                <h6 class="font-weight-bold mb-3">Size</h6>

                <div class="form-check pl-0 mb-3">
                    <input type="checkbox" class="form-check-input filled-in" id="34">
                    <label class="form-check-label small text-uppercase card-link-secondary" for="34">34</label>
                </div>
                <div class="form-check pl-0 mb-3">
                    <input type="checkbox" class="form-check-input filled-in" id="36">
                    <label class="form-check-label small text-uppercase card-link-secondary" for="36">36</label>
                </div>
                <div class="form-check pl-0 mb-3">
                    <input type="checkbox" class="form-check-input filled-in" id="38">
                    <label class="form-check-label small text-uppercase card-link-secondary" for="38">38</label>
                </div>
                <div class="form-check pl-0 mb-3">
                    <input type="checkbox" class="form-check-input filled-in" id="40">
                    <label class="form-check-label small text-uppercase card-link-secondary" for="40">40</label>
                </div>
                <a class="btn btn-link text-muted p-0" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                More
                </a>
                <div class="collapse pt-3" id="collapseExample">
                    <div class="form-check pl-0 mb-3">
                        <input type="checkbox" class="form-check-input filled-in" id="42">
                        <label class="form-check-label small text-uppercase card-link-secondary" for="42">42</label>
                    </div>
                    <div class="form-check pl-0 mb-3">
                        <input type="checkbox" class="form-check-input filled-in" id="44">
                        <label class="form-check-label small text-uppercase card-link-secondary" for="44">44</label>
                    </div>
                    <div class="form-check pl-0 mb-3">
                        <input type="checkbox" class="form-check-input filled-in" id="46">
                        <label class="form-check-label small text-uppercase card-link-secondary" for="46">46</label>
                    </div>
                    <div class="form-check pl-0 mb-3">
                        <input type="checkbox" class="form-check-input filled-in" id="50">
                        <label class="form-check-label small text-uppercase card-link-secondary" for="50">50</label>
                    </div>
                </div>
            </div><hr>
            <div>
                <h6 class="font-weight-bold mb-3">Color</h6>

                <div class="btn-group btn-group-toggle btn-color-group d-block mt-n2 ml-n2" data-toggle="buttons">
                    <label class="btn rounded-circle btn-primary border-inset-grey p-3 m-2">
                        <input type="checkbox" autocomplete="off">
                    </label>
                    <label class="btn rounded-circle btn-secondary p-3 m-2">
                        <input type="checkbox" autocomplete="off">
                    </label>
                    <label class="btn rounded-circle btn-success p-3 m-2">
                        <input type="checkbox" autocomplete="off">
                    </label>
                    <label class="btn rounded-circle btn-info p-3 m-2">
                        <input type="checkbox" autocomplete="off">
                    </label>
                    <label class="btn rounded-circle btn-warning p-3 m-2">
                        <input type="checkbox" autocomplete="off">
                    </label>
                    <label class="btn rounded-circle btn-danger p-3 m-2">
                        <input type="checkbox" autocomplete="off">
                    </label>
                    <label class="btn rounded-circle btn-dark p-3 m-2">
                        <input type="checkbox" autocomplete="off">
                    </label>
                    <label class="btn rounded-circle btn-light p-3 m-2">
                        <input type="checkbox" checked autocomplete="off">
                    </label>
                    <label class="btn rounded-circle btn-primary p-3 m-2">
                        <input type="checkbox" autocomplete="off">
                    </label>
                    <label class="btn rounded-circle btn-primary p-3 m-2">
                        <input type="checkbox" autocomplete="off">
                    </label>
                </div>
            </div><hr>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-10">
            <div class="row text-center">
                <div class="col-sm-6 col-md-6 col-lg-4">
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
                            <a href="quick_view.php"><button type="button" class="btn btn-info btn-sm px-3 mb-2 material-tooltip-main" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="far fa-eye"></i></button></a>
                            <button type="button" class="btn btn-danger btn-sm px-3 mb-2 material-tooltip-main" data-toggle="tooltip" data-placement="top" title="Add to favourite"><i class="far fa-heart"></i></button>
                        </div>
                    </div><hr>
                    <!-- Card -->
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4">
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
                                    <li class="list-inline-item"><i class="fas fa-star fa-sm text-muted"></i></li>
                                    <li class="list-inline-item"><i class="fas fa-star fa-sm text-muted"></i></li>    
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
                <div class="col-sm-6 col-md-6 col-lg-4">
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
            

                <div class="col-sm-6 col-md-6 col-lg-4">
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
                                    <li class="list-inline-item"><i class="fas fa-star fa-sm text-muted"></i></li>    
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
                <div class="col-sm-6 col-md-6 col-lg-4">
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
                <div class="col-sm-6 col-md-6 col-lg-4">
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
                                    <li class="list-inline-item"><i class="fas fa-star fa-sm text-muted"></i></li>
                                    <li class="list-inline-item"><i class="fas fa-star fa-sm text-muted"></i></li>
                                    <li class="list-inline-item"><i class="fas fa-star fa-sm text-muted"></i></li>    
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
<?php include('footer.php'); ?>
</body>
</html>