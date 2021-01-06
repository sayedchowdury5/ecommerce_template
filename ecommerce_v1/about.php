<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>E-Commerce | About US</title>
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
      
  </style>
  <script>
    $('.carousel.carousel-multi-item.v-2 .carousel-item').each(function(){
      var next = $(this).next();
      if (!next.length) {
        next = $(this).siblings(':first');
      }
      next.children(':first-child').clone().appendTo($(this));

      for (var i=0;i<4;i++) {
        next=next.next();
        if (!next.length) {
          next=$(this).siblings(':first');
        }
        next.children(':first-child').clone().appendTo($(this));
      }
    });
  </script>
</head>
<body>
<?php include('top_nav.php'); ?>
<div class="container">
<div id="carousel-example-multi" class="carousel slide carousel-multi-item v-2" data-ride="carousel">

<!--Controls-->
<div class="controls-top text-center">
  <a class="btn-floating" href="#carousel-example-multi" data-slide="prev"><i
      class="fas fa-chevron-left"></i></a>
  <a class="btn-floating" href="#carousel-example-multi" data-slide="next"><i
      class="fas fa-chevron-right"></i></a>
</div>
<!--/.Controls-->

<!-- Indicators -->
<ol class="carousel-indicators">
  <li data-target="#carousel-example-multi" data-slide-to="0" class="active"></li>
  <li data-target="#carousel-example-multi" data-slide-to="1"></li>
  <li data-target="#carousel-example-multi" data-slide-to="2"></li>
  <li data-target="#carousel-example-multi" data-slide-to="3"></li>
  <li data-target="#carousel-example-multi" data-slide-to="4"></li>
  <li data-target="#carousel-example-multi" data-slide-to="5"></li>
</ol>
<!--/.Indicators-->

<div class="carousel-inner v-2 bg-secondary" role="listbox">

  <div class="carousel-item active">
    <div class="col-12 col-md-4 col-lg-4">
      <div class="card mb-2">
        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/img (36).jpg"
          alt="Card image cap">
        <div class="card-body">
          <h4 class="card-title font-weight-bold">Card title</h4>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
            card's content.</p>
          <a class="btn btn-primary btn-md btn-rounded">Button</a>
        </div>
      </div>
    </div>
  </div>
  <div class="carousel-item">
    <div class="col-12 col-md-4 col-lg-4">
      <div class="card mb-2">
        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/img (34).jpg"
          alt="Card image cap">
        <div class="card-body">
          <h4 class="card-title font-weight-bold">Card title</h4>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
            card's content.</p>
          <a class="btn btn-primary btn-md btn-rounded">Button</a>
        </div>
      </div>
    </div>
  </div>
  <div class="carousel-item">
    <div class="col-12 col-md-4 col-lg-4">
      <div class="card mb-2">
        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/img (38).jpg"
          alt="Card image cap">
        <div class="card-body">
          <h4 class="card-title font-weight-bold">Card title</h4>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
            card's content.</p>
          <a class="btn btn-primary btn-md btn-rounded">Button</a>
        </div>
      </div>
    </div>
  </div>
  <div class="carousel-item">
    <div class="col-12 col-md-4 col-lg-4">
      <div class="card mb-2">
        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/img (29).jpg"
          alt="Card image cap">
        <div class="card-body">
          <h4 class="card-title font-weight-bold">Card title</h4>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
            card's content.</p>
          <a class="btn btn-primary btn-md btn-rounded">Button</a>
        </div>
      </div>
    </div>
  </div>
  <div class="carousel-item">
    <div class="col-12 col-md-4 col-lg-4">
      <div class="card mb-2">
        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/img (30).jpg"
          alt="Card image cap">
        <div class="card-body">
          <h4 class="card-title font-weight-bold">Card title</h4>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
            card's content.</p>
          <a class="btn btn-primary btn-md btn-rounded">Button</a>
        </div>
      </div>
    </div>
  </div>
  <div class="carousel-item">
    <div class="col-12 col-md-4 col-lg-4">
      <div class="card mb-2">
        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/img (27).jpg"
          alt="Card image cap">
        <div class="card-body">
          <h4 class="card-title font-weight-bold">Card title</h4>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
            card's content.</p>
          <a class="btn btn-primary btn-md btn-rounded">Button</a>
        </div>
      </div>
    </div>
  </div>

</div>

</div>
</div>

<?php include('footer.php'); ?>
</body>
</html>