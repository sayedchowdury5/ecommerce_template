
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
  <script>
      function showProducts(minPrice, maxPrice) {
    $("#products li").hide().filter(function() {
        var price = parseInt($(this).data("price"), 10);
        return price >= minPrice && price <= maxPrice;
    }).show();
}

$(function() {
    var options = {
        range: true,
        min: 0,
        max: 500,
        values: [50, 300],
        slide: function(event, ui) {
            var min = ui.values[0],
                max = ui.values[1];

            $("#amount").val("$" + min + " - $" + max);
            showProducts(min, max);
        }
    }, min, max;

    $("#slider-range").slider(options);

    min = $("#slider-range").slider("values", 0);
    max = $("#slider-range").slider("values", 1);

    $("#amount").val("$" + min + " - $" + max);

    showProducts(min, max);
});
    </script>
</head>
<body>
<div class="demo">

<p>
    <label for="amount">Price range:</label>
    <input type="text" id="amount" style="border:1; color:#f6931f; font-weight:bold;" />
</p>

<div id="slider-range"></div>
<ul id="products">
        <li data-price="10"> product - £10 </li>
        <li data-price="50"> product - £50 </li>
        <li data-price="100"> product - £100 </li>
        <li data-price="150"> product - £150 </li>
        <li data-price="200"> product - £200 </li>
    </ul>
</div>
</body>
</html>

    