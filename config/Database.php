<?php
class Database{
    

    function connect(){
        $server = '127.0.0.1';
        $user = 'root';
        $password = '';
        $db_name = 'myblog';
        return new mysqli($server, $user, $password, $db_name);
    }

}