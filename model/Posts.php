<?php
include '../config/Database.php';

class Posts{

    public function __construct(){
        $this->db = new Database();
    }

    function getPost(){
        $post_arr = array();
        $post_arr['data'] = array();

        $query = "SELECT * FROM `posts` JOIN `categories` ON `posts`.`category_id` = `categories`.`id`";
        if($result = $this->db->connect()->query($query)){
            while($row = $result->fetch_object()){
                $post_item = array(
                    'id' => $row->id,
                    'title' => $row->title,
                    'body' => $row->body,
                    'author' => $row->author,
                    'category_id' => $row->category_id,
                    'category_name' => $row->name
                );
                array_push($post_arr['data'], $post_item);
            }
            // echo '<pre>';
            return json_encode($post_arr);
            // echo '</pre>';
        }
    }

    function getSingle($id){
        $post_arr = array();
        $post_arr['data'] = array();

    $query = "SELECT * FROM `posts` JOIN `categories` ON `posts`.`category_id` = `categories`.`id` WHERE `posts`.`id` = {$id} ";
    echo $query;    
    if($result = $this->db->connect()->query($query)){
            while($row = $result->fetch_object()){
                $post_item = array(
                    'id' => $row->id,
                    'title' => $row->title,
                    'body' => $row->body,
                    'author' => $row->author,
                    'category_id' => $row->category_id,
                    'category_name' => $row->name
                );
                array_push($post_arr['data'], $post_item);
            }
            // echo '<pre>';
            return json_encode($post_arr);
            // echo '</pre>';
        }
    }

    function postsCreate($user, $title, $body, $category){
        
    }

}

$post = new Posts();
$post->getPost();