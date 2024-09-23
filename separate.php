<?php 
    // creating an associative array 
    $books = [
        [
            'name' => 'Do Androids Dream of Electric Sheep',
            'author' => 'Philip K. Dick',
            'releaseYear' => 1968,
            'purchaseUrl' => 'http://example.com'
        ],
        [
            'name' => 'Project Hail Mary',
            'author' => 'Andy Weir',  
            'releaseYear' => 2011,
            'purchaseUrl' => 'http://example.com'
        ],
        [
            'name' => 'The Martian',
            'author' => 'Andy Weir',  
            'releaseYear' => 2022,
            'purchaseUrl' => 'http://example.com'
        ]
    ];
    $filteredItems = array_filter($books, function ($book) {
        return $book['releaseYear'] >= 1950 && $book['releaseYear'] <= 2020;
    });
    require "separate.view.php";

