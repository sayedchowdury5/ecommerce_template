<!-- Footer Start -->
<footer class="page-footer font-small unique-color-dark" style="border:3px solid #FF6F00; font-size:13px;">

<div class="">
    <div class="container">

        <!-- Grid row-->
        <div class="row py-4 d-flex align-items-center">

            <!-- Grid column -->
            <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                <h4 class="mb-0" style="font-size:15px; color:#FF6F00">Get connected with us on social networks!</h4>
            </div>
            <!-- Grid column -->
    
            <!-- Grid column -->
            <div class="col-md-6 col-lg-7 text-center text-md-right footer-icon">
    
                <!-- Facebook -->
                <a href="www.facebook.com" class="fb-ic">
                <i class="fab fa-facebook-f mr-4" style="color:#FF6F00"> </i>
                </a>
                <!-- Twitter -->
                <a href="https://twitter.com/" class="tw-ic">
                <i class="fab fa-twitter mr-4" style="color:#FF6F00"> </i>
                </a>
                <!-- Google +-->
                <a href="www.facebook.com" class="gplus-ic">
                <i class="fab fa-google-plus-g mr-4" style="color:#FF6F00"> </i>
                </a>
                <!--Linkedin -->
                <a href="www.facebook.com" class="li-ic">
                <i class="fab fa-linkedin-in mr-4" style="color:#FF6F00"> </i>
                </a>
                <!--Instagram-->
                <a href="www.facebook.com" class="ins-ic">
                <i class="fab fa-instagram" style="color:#FF6F00"> </i>
                </a>
    
            </div>
            <!-- Grid column -->

        </div><hr style="background-color:#FF6F00;">
        <!-- Grid row-->

    </div>
</div>

<!-- Footer Links -->
<div class="container text-center text-md-left mt-5">

    <!-- Grid row -->
    <div class="row mt-3">

        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

            <!-- Content -->
            <h6 class="text-uppercase font-weight-bold" style="font-size:13px;">Company name</h6>
            <hr class=" mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color:#FF6F00;">
            <p>Here is the company details</p>

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

            <!-- Links -->
            <h6 class="text-uppercase font-weight-bold" style="font-size:13px;">Products</h6>
            <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color:#FF6F00;">
            <p>
                <a class="text-dark" href="#!">Affiliate</a>
            </p>
            <p>
                <a class="text-dark" href="#!">Dropship</a>
            </p>
            <p>
                <a class="text-dark" href="#!">BrandFlow</a>
            </p>
            <p>
                <a class="text-dark" href="#!">Free Shipping</a>
            </p>

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

            <!-- Links -->
            <h6 class="text-uppercase font-weight-bold" style="font-size:13px;">Useful links</h6>
            <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color:#FF6F00;">
            <p>
                <a class="text-dark" href="#!">Your Account</a>
            </p>
            <p>
                <a class="text-dark" href="#!">Become an Affiliate</a>
            </p>
            <p>
                <a  class="text-dark" href="#!">Shipping Rates</a>
            </p>
            <p>
                <a class="text-dark" href="#!">Help</a>
            </p>

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase font-weight-bold" style="font-size:13px;">Contact</h6>
            <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color:#FF6F00;">
            <p><i class="fas fa-home mr-3"></i> Kuching, Sarawak, Malaysia</p>
            <p><i class="fas fa-envelope mr-3"></i> sayedchowdury5@gmail.com</p>
            <p><i class="fas fa-phone mr-3"></i> +601110445260</p>
            <p><i class="fas fa-print mr-3"></i> +601110445260</p>
        </div>
        <!-- Grid column -->

    </div><hr style="background-color:#FF6F00;">
    <div>
        <div>
            <img class="payment" src="assets/images/payment1.jpg" alt="Payment Method">
            <img class="payment" src="assets/images/payment2.jpg" alt="Payment Method">
            <img class="payment" src="assets/images/payment3.jpg" alt="Payment Method">
            <img class="payment" src="assets/images/payment4.jpg" alt="Payment Method">
        </div>   
    </div>
</div>

</div>
<!-- Footer Links -->

<!-- Copyright -->
<div class="text-center text-white" style="background-color: #FF6F00;">
    <div class=" "><h6 style="font-size:12px;">&copy; <?php 
        $copyYear = 2020; 
        $curYear = date('Y'); 
        echo $copyYear . (($copyYear != $curYear) ? '-' . $curYear : '');
        ?>, All Rights Reserved by X Company</h6>
    </div>
    <div><button class="btn fa fa-chevron-up text-white back-top" style="font-size: 25px;"></button></div>
</div>
<!-- Copyright -->
</footer>
<!-- Footer End-->
<script>
$(document).ready(function(){
    //footer style
  $('.back-top').tooltip({title: "Back To Top", placement: "top"}); 

  //GO To Top Feature Style for Every Page
$('.back-top').click(function(event) {
    event.preventDefault();
    $('html, body').animate({
        scrollTop: $("body").offset().top
    }, 500);
});
});
</script>