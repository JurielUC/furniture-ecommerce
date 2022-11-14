<?php 

    require __DIR__ . '/vendor/autoload.php';

    $value=$_REQUEST['amount'];
    $ref_no = mt_rand();

    // Set your X-API-KEY with the API key from the Customer Area.
    $client = new \Adyen\Client();
    $client->setEnvironment(\Adyen\Environment::TEST);
    $client->setXApiKey("AQE5hmfuXNWTK0Qc+iSXm2gKov2eW61YH51DTHBEw1mlmlROjsZ/AvVpCSeRZ98Uvz/4AaqTM6KaOGV3EMFdWw2+5HzctViMSCJMYAc=-ZYJWIfyIfKaOnd/0eNSZk5wr+XHFGBn2AnbCKlTyiYM=-bsfu=mI2pM.I*j_C");
    $service = new \Adyen\Service\Checkout($client);
    
    $params = array(
    "amount" => array(
        "currency" => "PHP",
        "value" => $value
    ),
    "reference" => $ref_no,
    "paymentMethod" => array(
        "type" => "gcash"
    ),
    "channel" => "web",
    "returnUrl" => "http://localhost/furniture-ecommerce/src/adyen/success.php",
    "merchantAccount" => "GilReyesFurnitureAndRepairShopECOM"
    );

    $result = $service->payments($params);

    $redirect = $result['action']['url'];

    echo "Redirecting in 3 seconds...";
    header('Refresh: 3;URL='.$redirect)
?>