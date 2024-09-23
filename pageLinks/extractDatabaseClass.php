<?php 

require 'functions.php';
require 'Database.php';

// dd($_GET);

$config = require ('config.php');

$db = new Database($config['database']);

$id = $_GET['id'];
$query = "select * from posts where id= :id"; //never ever accept user input and inline it as part of the database query

$posts = $db -> query($query, [':id' => $id]) -> fetch();

dd($posts);

// foreach ($posts as $post) {
//     echo '<li>' . $post['title'] . '</li>';
// }