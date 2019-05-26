<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: PUT');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');

include '../model/Posts.php';
$p_model = new Posts();


//Update POST data
if($data = json_decode(file_get_contents("php://input"))){
    $title = $data->title;
    $body = $data->body;
    $author = $data->author;
    $category = $data->category;
    $id = $data->posts_id; 

    echo $title.' :: '.$body.' :: '.$author.' :: '.$category.' :: '.$id;

    $p_model->postsUpdate($title, $body, $author, $category, $id);
}
