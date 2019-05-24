<?php

include '../model/Posts.php';
$p_model = new Posts();

// conditions
if(isset($_GET['posts'])){
    echo $p_model->getPost();
}