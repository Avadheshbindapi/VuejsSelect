<?php
    include('./app/init.php');
    header('Access-Control-Allow-Origin: *');

    header('Access-Control-Allow-Methods: GET, POST');

    header("Access-Control-Allow-Headers: X-Requested-With");
    $Controller = new StateController (new StateModel($conn));
    $data = $Controller->getAllState($_GET['country_id']);
    header("Content-type: application/json; charset=utf-8");
    echo json_encode($data);