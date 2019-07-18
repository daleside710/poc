<?php
    $products = array(
        "https://www.zillow.com/homes/for_sale/Thousand-Oaks-CA/66107878_zpid/34278_rid/globalrelevanceex_sort/34.315225,-118.73148,34.08181,-119.051457_rect/11_zm",
        "https://www.jbLcom/noise-cancelling-headphones/JBL+LIVE650BTNC.html?cgid=noise-cancelling-headphones&dwvar_JBL%20LIVE650BTNC_color=Black-USA-Current#start=1",
        "https://www.cars.com/vehicledetail/detail/776356359/overview",
        "https://www.carfax.com/vehicle/4A32B3FF6CE013372"
    );
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Product Catalog</title>

    <link rel="stylesheet" type="text/css" href="./assets/js/bootstrap-4.3.1/css/bootstrap.min.css">
</head>

<body>

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <p>On our consolidated web page - We will have their HTML links for the product.</p>
            <p>We will display our product catalog like:</p>
            <p>1. Gorgeous House in Thousand Oaks - See Details</p>
            <p>2. JBL Bluetooth Headphone - See Details</p>
            <p>3. Ford-F-150 Truck (White) for Sale - See Details</p>
            <p>4. White Mitsubishi Galant Car - See Details</p>
        </div>
    </div>

    <?php
        for( $i = 0; $i < count( $products ); $i ++ ){
            if( $i % 2 == 0 )
                echo '<div class="row mb-3">';

            echo    '<div class="col-md-6 col-12">' .
                        '<a href="javascript:void(0)" onclick="onClickIFrame( \'' . $products[$i] . '\' )">' .
                            '<div class="embed-responsive embed-responsive-16by9">' .
                                '<iframe class="embed-responsive-item" src="' . $products[$i] . '" style="pointer-events: none;"></iframe>'.
                            '</div>'.
                        '</a>'.
                    '</div>';

            if( $i % 2 == 1 )
                echo '</div>';
        }
    ?>
</div>

</body>

<script type="text/javascript" src="./assets/js/jquery-3.4.1/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="./assets/js/popper-1.15.0/popper-1.15.0.min.js"></script>
<script type="text/javascript" src="./assets/js/bootstrap-4.3.1/js/bootstrap.min.js"></script>

<script type="text/javascript">

    function onClickIFrame( url ){
        $.ajax({
            type: "POST",
            url: "addBuyerOffer-iframe.php",
            data: {
                url: url
            }
        }).done(function (msg) {
            alert("API Called");
        });
    }

    $(document).ready(function () {
        'use strict'


    });
</script>

</html>