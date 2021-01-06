<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <style>
        a{
            text-decoration: none;
        }
    </style>
</head>
<body>
<?php include('top_nav.php'); ?>
<div class="container">
    <hr>
    <!--Section: Block Content-->
    <section>
        <!--Grid row-->
        <div class="row">
            <!--Grid column-->
            <div class="col-lg-8">
                <!-- Card -->
                <div class="card wish-list mb-3">
                    <div class="card-body">
                        <h5 class="mb-4">Cart (<span>2</span> items)</h5>
                        <div class="row mb-4">
                            <div class="col-md-5 col-lg-3 col-xl-3 text-center">
                                <div class="view zoom overlay z-depth-1 rounded mb-3 mb-md-0">
                                    <img class="img-fluid w-100" src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/12a.jpg" alt="Sample">
                                </div>
                            </div>
                            <div class="col-md-7 col-lg-9 col-xl-9">
                                <h5>Blue denim shirt</h5>
                                <div>
                                    <div class="d-flex justify-content-between">
                                        <div>   
                                            <p class="mb-3 text-muted text-uppercase small">Shirt - blue</p>
                                            <p class="mb-2 text-muted text-uppercase small">Color: blue</p>
                                            <p class="mb-3 text-muted text-uppercase small">Size: M</p>
                                        </div>
                                        <div>
                                            <div class="my-3 text-center">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item"><span class="btn minus" onclick=""><h5>-</h5></span></li>
                                                    <li class="list-inline-item"><input type="text" class="form-control text-center" min="0" value="1" style="max-width:50px;"></li>
                                                    <li class="list-inline-item"><span class="btn plus" onclick=""><h5>+</h5></span></li>   
                                                </ul>
                                            </div>
                                            <small id="passwordHelpBlock" class="form-text text-muted text-center">(Note, 1 piece)</small>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <a href="#!" type="button" class="card-link-secondary small text-uppercase mr-3 text-muted"><i class="fas fa-trash-alt mr-1"></i> Remove item </a>
                                            <a href="#!" type="button" class="card-link-secondary small text-uppercase text-muted"><i class="fas fa-heart mr-1 text-danger"></i> Move to favourite </a>
                                        </div>
                                        <p class="mb-0"><span><strong>$17.99</strong></span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="mb-4">
                        <div class="row mb-4">
                            <div class="col-md-5 col-lg-3 col-xl-3 text-center">
                                <div class="view zoom overlay z-depth-1 rounded mb-3 mb-md-0">
                                    <img class="img-fluid w-100" src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/13a.jpg" alt="Sample">
                                </div>
                            </div>
                            <div class="col-md-7 col-lg-9 col-xl-9">
                                <div>
                                    <h5>Red hoodie</h5>
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <p class="mb-3 text-muted text-uppercase small">Shirt - red</p>
                                            <p class="mb-2 text-muted text-uppercase small">Color: red</p>
                                            <p class="mb-3 text-muted text-uppercase small">Size: M</p>
                                        </div>
                                        <div>
                                            <div class="my-3 text-center">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item"><span class="btn minus" onclick=""><h5>-</h5></span></li>
                                                    <li class="list-inline-item"><input type="text" class="form-control text-center" min="0" value="1" style="max-width:50px;"></li>
                                                    <li class="list-inline-item"><span class="btn plus" onclick=""><h5>+</h5></span></li>   
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <a href="#!" type="button" class="card-link-secondary small text-uppercase mr-3 text-muted"><i  class="fas fa-trash-alt mr-1"></i> Remove item </a>
                                            <a href="#!" type="button" class="card-link-secondary small text-uppercase text-muted"><i class="fas fa-heart mr-1 text-danger"></i> Move to favourite </a>
                                        </div>
                                        <p class="mb-0"><span><strong>$35.99</strong></span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="text-info mb-0"><i class="fas fa-info-circle mr-1 text-danger"></i> Do not delay the purchase, adding items to your cart does not mean booking them.</p>
                    </div>
                </div>
                <!-- Card -->

                <!-- Card -->
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="mb-4">Expected shipping delivery</h5>
                        <p class="mb-0"> Thu., 12.03. - Mon., 16.03.</p>
                    </div>
                </div>
                <!-- Card -->

                <!-- Card -->
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="mb-4">We accept</h5>
                        <img class="mr-2" width="45px" src="https://mdbootstrap.com/wp-content/plugins/woocommerce-gateway-stripe/assets/images/visa.svg" alt="Visa">
                        <img class="mr-2" width="45px" src="https://mdbootstrap.com/wp-content/plugins/woocommerce-gateway-stripe/assets/images/amex.svg" alt="American Express">
                        <img class="mr-2" width="45px"  src="https://mdbootstrap.com/wp-content/plugins/woocommerce-gateway-stripe/assets/images/mastercard.svg"  alt="Mastercard">
                        <img class="mr-2" width="100px" src="assets/images/payment3.jpg" alt="PayPal acceptance mark">
                    </div>
                </div>
                <!-- Card -->
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-4">
                <!-- Card -->
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="mb-3">The total amount of</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                                Temporary amount
                                <span>$25.98</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                Shipping
                                <span>Gratis</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                                <div>
                                    <strong>The total amount of</strong><strong><p class="mb-0">(including VAT)</p></strong>
                                </div><span><strong>$53.98</strong></span>
                            </li>
                        </ul>
                        <button type="button" class="btn btn-dark text-warning btn-block waves-effect waves-light">Checkout</button>
                    </div>
                </div>
                <!-- Card -->

                <!-- Card -->
                <div class="card mb-3">
                    <div class="card-body">
                        <a class="dark-grey-text d-flex justify-content-between text-muted" data-toggle="collapse" href="#collapseExample1" aria-expanded="false" aria-controls="collapseExample1">Add a discount code (optional)<span><i class="fas fa-chevron-down pt-1"></i></span></a>
                        <div class="collapse" id="collapseExample1">
                            <div class="mt-3">
                                <div class="md-form md-outline mb-0">
                                    <input type="text" id="discount-code1" class="form-control font-weight-light" placeholder="Enter discount code">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card -->
            </div>
            <!--Grid column-->
        </div>
        <!--Grid row-->
    </section>
    <!--Section: Block Content-->
</div>
<?php include('footer.php'); ?>
</body>
</html>