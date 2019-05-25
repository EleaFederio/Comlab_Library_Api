<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');

include '../model/Posts.php';
$p_model = new Posts();


// conditions
if(isset($_GET['posts'])){
    echo $p_model->getPost();
}

if(isset($_GET['id'])){
    echo $p_model->getSingle($_GET['id']);
}

//Get POST data
$data = json_decode(file_get_contents("php://input"));