<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Methods: PUT');
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
if($data = json_decode(file_get_contents("php://input"))){
    $title = $data->title;
    $body = $data->body;
    $author = $data->author;
    $category = $data->category;

    echo $title.' :: '.$body.' :: '.$author.' :: '.$category;
    echo '+++Hahaha+++';

    $p_model->postsCreate($title, $body, $author, $category);
}

//Update POST data
if(isset($_POST['put_id'])){
    if($data = json_decode(file_get_contents("php://input"))){
        $title = $data->title;
        $body = $data->body;
        $author = $data->author;
        $category = $data->category;
        $id = $data->posts_id; 
    
        echo $title.' :: '.$body.' :: '.$author.' :: '.$category.' :: '.$id;
    
        // $p_model->postsCreate($title, $body, $author, $category);
    }
}
