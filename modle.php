<?php

require_once 'connect.php';

function getAllBlogs(){    
    $conn = $GLOBALS["conn"];
    // Performing SQL query
    $result = $conn->query('SELECT * FROM `blog`');
    
    $blogs = [];

    while ($row = $result->fetch_assoc()){
        $blogs[] = $row;    
    }
    
    return $blogs;
}

function getBlogById($id){
    $conn = $GLOBALS["conn"];
    // Performing SQL query
    $result = $conn->query("SELECT * FROM `blog` where id = $id");
    
    $blogs = [];

    while ($row = $result->fetch_assoc()){
        $blogs[] = $row;
    }
    
    return $blogs;
}