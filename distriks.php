<?php
include './app/init.php';
$Controller = new DistrictController (new DistrictModel($conn));
$data = $Controller->getDistrik($_GET['state_id']);
header("Content-type: application/json; charset=utf-8");
echo json_encode( $data );