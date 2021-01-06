<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce | IoT | Control</title>
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
<body>
<?php include('top_nav.php'); ?>
<div class="container">
    <form action="#" method="POST" encypt="multipart/form-data">
        <div class="row text-center">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="p-5 mb-3" style="border: 1px solid #FF6F00; border-radius:15px;">
                    <h2 class="mb-3">Relay 1</h2>
                    <button id="ondevice1" class="btn btn-secondary mr-1">ON</button>
                    <button id="offdevice1" class="btn btn-danger">OFF</button>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="p-5 mb-3" style="border: 1px solid #FF6F00; border-radius:15px;">
                    <h2 class="mb-3">Relay 2</h2>
                    <button id="ondevice2" class="btn btn-secondary mr-1">ON</button>
                    <button id="offdevice2" class="btn btn-danger">OFF</button>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="p-5 mb-3" style="border: 1px solid #FF6F00; border-radius:15px;">
                    <h2 class="mb-3">Relay 3</h2>
                    <button id="ondevice3" class="btn btn-secondary mr-1">ON</button>
                    <button id="offdevice3" class="btn btn-danger">OFF</button>
                </div>
            </div>
        </div>
    </form><hr>
</div>
<?php include('footer.php'); ?>
<script>
    $(document).ready(function() {
    $('#ondevice1').click(function(e) {
        e.preventDefault();
        $(this).css("background-color","green");
        $('#offdevice1').css("background-color", "gray");
    });
    $('#offdevice1').click(function(e) {
        e.preventDefault();
        $(this).css("background-color","red");
        $('#ondevice1').css("background-color", "gray");
    });

    $('#ondevice2').click(function(e) {
        e.preventDefault();
        $(this).css("background-color","green");
        $('#offdevice2').css("background-color", "gray");
    });
    $('#offdevice2').click(function(e) {
        e.preventDefault();
        $(this).css("background-color","red");
        $('#ondevice2').css("background-color", "gray");
    });

    $('#ondevice3').click(function(e) {
        e.preventDefault();
        $(this).css("background-color","green");
        $('#offdevice3').css("background-color", "gray");
    });
    $('#offdevice3').click(function(e) {
        e.preventDefault();
        $(this).css("background-color","red");
        $('#ondevice3').css("background-color", "gray");
    });
});
</script>
</body>
</html>