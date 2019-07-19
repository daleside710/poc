<?php
    $urls = array(
        "https://symfony.com/",
        "https://laravel.com/",
        "https://angular.io/",
        "https://www.salesforceben.com/"
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
        </div>
        <div class="col-12 mb-3">
            <form action="index.php" method="POST">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">URL 1:</span>
                    </div>
                    <input type="text" name="url1" class="form-control" value="<?php echo isset($_POST['url1']) ? $_POST['url1'] : $urls[0]; ?>">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">URL 2:</span>
                    </div>
                    <input type="text" name="url2" class="form-control" value="<?php echo isset($_POST['url2']) ? $_POST['url2'] : $urls[1]; ?>">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">URL 3:</span>
                    </div>
                    <input type="text" name="url3" class="form-control" value="<?php echo isset($_POST['url3']) ? $_POST['url3'] : $urls[2]; ?>">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">URL 4:</span>
                    </div>
                    <input type="text" name="url4" class="form-control" value='<?php echo isset($_POST['url4']) ? $_POST['url4'] : $urls[3]; ?>'>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <iframe name="ifrm_result" style="display: none;"></iframe>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-md-6 col-12">
            <a href="javascript:void(0)" onclick="onClickIFrame('<?php echo isset($_POST['url1']) ? $_POST['url1'] : $urls[0]; ?>')">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe allowfullscreen class="embed-responsive-item" src='<?php echo isset($_POST['url1']) ? $_POST['url1'] : $urls[0]; ?>' style="pointer-events: none;"></iframe>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-12">
            <a href="javascript:void(0)" onclick="onClickIFrame('<?php echo isset($_POST['url2']) ? $_POST['url2'] : $urls[1]; ?>')">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe allowfullscreen class="embed-responsive-item" src='<?php echo isset($_POST['url2']) ? $_POST['url2'] : $urls[1]; ?>' style="pointer-events: none;"></iframe>
                </div>
            </a>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-md-6 col-12">
            <a href="javascript:void(0)" onclick="onClickIFrame('<?php echo isset($_POST['url3']) ? $_POST['url3'] : $urls[2]; ?>')">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe allowfullscreen class="embed-responsive-item" src='<?php echo isset($_POST['url3']) ? $_POST['url3'] : $urls[2]; ?>' style="pointer-events: none;"></iframe>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-12">
            <a href="javascript:void(0)" onclick="onClickIFrame('<?php echo isset($_POST['url4']) ? $_POST['url4'] : $urls[3]; ?>')">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe allowfullscreen class="embed-responsive-item" src='<?php echo isset($_POST['url4']) ? $_POST['url4'] : $urls[3]; ?>' style="pointer-events: none;"></iframe>
                </div>
            </a>
        </div>
    </div>
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