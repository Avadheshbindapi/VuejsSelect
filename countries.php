<?php


include('./app/init.php');
$Controller = new CountryController (new CountryModel($conn));
$data = $Controller->getCountry();
header("Content-type: application/json; charset=utf-8");
echo json_encode( $data );