<?php

require 'modle.php';

$blogs = [];

if (isset($_GET['id'])) {
    $blogs = getBlogById($_GET['id']);
}else{
    $blogs = getAllBlogs();
}

include 'blogs.php';

?>