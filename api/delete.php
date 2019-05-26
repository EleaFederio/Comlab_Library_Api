<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: DELETE');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');

include '../model/Posts.php';
$p_model = new Posts();


//Update POST data
if($data = json_decode(file_get_contents("php://input"))){
    $id = $data->posts_id; 

    $p_model->postsDelete($id);
}
