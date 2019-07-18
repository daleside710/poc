<?php
function addBuyerOffer($data){

    $HOST = "http://robo.liaison.website";
    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_URL => $HOST."/api/addBuyerOffer",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => $data,
        CURLOPT_HTTPHEADER => array(),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        echo "cURL Error #:" . $err;
    } else {
        echo $response;
    }
}

$data = array(
    'api_password' => '05797c664d6627b52617123ce900831f7be825b4',// Same as what we used in other API
    'buyer_email' => 'buyer@robonegotiator.com',
    'buyer_phone' => '9379697626',
    'buyer_orignal_quantity' => '1',
    'buyer_offer_price' => '8200', // This will be replaced with 9% discouted price from listing price
    'buyer_negotiation_mode' => 'auto',
    'buyer_highest_offer_price' => '8300',// This will be replaced with 12% discounted price from listing price
    'upc_product_code' => 'URL', // Replace with original URL  - Will be same as it was used while uploading that URL
    'buyer_currency' => 'USD',
    'buyer_zip' => '94024'
);

addBuyerOffer($data);