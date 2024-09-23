<?php 

require './pageLinks/functions.php';

$dsn = "mysql:host=localhost;port=3306;user=root;dbname=demoapp;charset=utf8mb4";
$pdo = new PDO($dsn); //dsn stands for data source name

$statement = $pdo -> prepare('select * from posts');
$statement -> execute();

$posts = $statement -> fetchAll(PDO::FETCH_ASSOC);

// dd($posts);

foreach ($posts as $post) {
    echo '<li>' . $post['title'] . '</li>';
}