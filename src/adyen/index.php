<?php 
    // Set your X-API-KEY with the API key from the Customer Area.
    $client = new \Adyen\Client();
    $client->setXApiKey("AQE5hmfuXNWTK0Qc+iSXm2gKov2eW61YH51DTHBEw1mlmlROjsZ/AvVpCSeRZ98Uvz/4AaqTM6KaOGV3EMFdWw2+5HzctViMSCJMYAc=-ZYJWIfyIfKaOnd/0eNSZk5wr+XHFGBn2AnbCKlTyiYM=-bsfu=mI2pM.I*j_C");
    $service = new \Adyen\Service\Checkout($client);
    
    $params = array(
    "amount" => array(
        "currency" => "PHP",
        "value" => 1000
    ),
    "reference" => "payment-test",
    "paymentMethod" => array(
        "type" => "gcash"
    ),
    "returnUrl" => "https://your-company.com/checkout?shopperOrder=12xy..",
    "merchantAccount" => "GilReyesFurnitureAndRepairShopECOM"
    );

    $result = $service->payments($params);
?>