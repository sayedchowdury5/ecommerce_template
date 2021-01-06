<?php
    require_once ('connect.php');

    $dataPoints = array();
    $sql = "SELECT temperature, date FROM sensor_data ORDER BY date DESC LIMIT 10";
    $handle = $conn->prepare($sql); 
    $handle->execute(); 
    $result = $handle->fetchAll(PDO::FETCH_OBJ);
		//echo json_encode($result);
    foreach($result as $row){
        array_push($dataPoints, array("x"=> (strtotime($row->date)*1000), "y"=> $row->temperature));
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce | IoT | Monitor</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/2c655b324d.js" crossorigin="anonymous"></script>

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

    <script src="assets/js/style.js"></script>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
    <?php include('top_nav.php'); ?>
    <div class="container">
        <div class="mb-5" id="temperature" style="height: 370px; width: 100%;"></div><hr>
        <div class="mb-5" id="humidity" style="height: 370px; width: 100%;"></div><hr>
        <div class="mb-5" id="sunlight" style="height: 370px; width: 100%;"></div><hr>
        <div class="mb-5" id="soil" style="height: 370px; width: 100%;"></div><hr>
    </div>
    <?php include('footer.php'); ?>
    <script>
        window.onload = function () {
    
        var chartTemperature = new CanvasJS.Chart("temperature", {
            animationEnabled: true,
            exportEnabled: true,
            theme: "light1", // "light1", "light2", "dark1", "dark2"
            title:{
                text: "Temperature Data"
            },
            axisX:{
                title: "Time Scale",
                valueFormatString: "hh:mm TT",
                labelAngle: -50
                //intervalType: "hour",
                //interval: 6
                //prefix: "Id"
            },
            axisY:{
                title: "Temperture",
                suffix: "^ C"
            },
            data: [{
                type: "spline", //change type to bar, line, area, pie, etc  
                xValueType: "dateTime",
                dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
            }]
        });
        chartTemperature.render();

        var chartHumidity = new CanvasJS.Chart("humidity", {
            animationEnabled: true,
            exportEnabled: true,
            theme: "light1", // "light1", "light2", "dark1", "dark2"
            title:{
                text: "Humidity Data"
            },
            axisX:{
                title: "Time Scale",
                valueFormatString: "hh:mm TT",
                labelAngle: -50
                //prefix: "Id"
            },
            axisY:{
                title: "Humidity",
                //suffix: "^ C"
            },
            data: [{
                type: "spline", //change type to bar, line, area, pie, etc  
                xValueType: "dateTime",
                dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
            }]
        });
        chartHumidity.render();

        var chartSunlight = new CanvasJS.Chart("sunlight", {
            animationEnabled: true,
            exportEnabled: true,
            theme: "light1", // "light1", "light2", "dark1", "dark2"
            title:{
                text: "Sunlight Data"
            },
            axisX:{
                title: "Time Scale",
                valueFormatString: "hh:mm TT",
                labelAngle: -50
                //prefix: "Id"
            },
            axisY:{
                title: "Sunlight",
                //suffix: "^ C"
            },
            data: [{
                type: "spline", //change type to bar, line, area, pie, etc 
                xValueType: "dateTime", 
                dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
            }]
        });
        chartSunlight.render();

        var chartSoil = new CanvasJS.Chart("soil", {
            animationEnabled: true,
            exportEnabled: true,
            theme: "light1", // "light1", "light2", "dark1", "dark2"
            title:{
                text: "Soil Moisture Data"
            },
            axisX:{
                title: "Time Scale",
                valueFormatString: "hh:mm TT",
                labelAngle: -50
                //prefix: "Id"
            },
            axisY:{
                title: "Soil Moisture",
                //suffix: "^ C"
            },
            data: [{
                type: "spline", //change type to bar, line, area, pie, etc 
                xValueType: "dateTime", 
                dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
            }]
        });
        chartSoil.render();
        
        }
        
    </script>
</body>
</html>