<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
    <style>
        body {
            font-family: sans-serif;
        }
    </style>
</head>
<body>
    <h1>Recommended Books</h1>

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

        // Lambda functions are basically anonymous functions

        //flexible
        $filterByAuthor = function ($books, $author) {
            $filteredBooks = [];
            foreach($books as $book) {
                if($book['author'] === $author) {
                    $filteredBooks[] = $book;
                }
            }
            return $filteredBooks;
        };

        $filteredBooks = $filterByAuthor($books, 'Philip K. Dick')
    ?>
    <ul>
        <?php foreach($filteredBooks as $book) :?> 
            <li>
                <a href="<?= $book['purchaseUrl'] ?>">
                    <?= $book['name'] ?> (<?= $book['releaseYear'] ?>) - By <?= $book['author'] ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>

    <!-- more flexible -->
    <?php 
    function filterItems($items, $key, $value) {
        $filteredItems = [];
        foreach($items as $item) {
            if($item[$key] === $value) {
                $filteredItems[] = $item;
            }
        }
        return $filteredItems;
    };

    $filteredItems = filterItems($books, 'releaseYear', 2022)
    ?>

    <ul>
        <?php foreach($filteredItems as $item) :?> 
            <li>
                <a href="<?= $item['purchaseUrl'] ?>">
                    <?= $item['name'] ?> (<?= $item['releaseYear'] ?>) - By <?= $item['author'] ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>


    <!-- even more flexible -->
    <?php 
    function filter($items, $fn) {
        $filteredItems = [];
        foreach($items as $item) {
            if($fn($item)) {
                $filteredItems[] = $item;
            }
        }
        return $filteredItems;
    };

    $filteredItems = filter($books, function ($book) {
        return $book['releaseYear'] < 2000;
    })
    ?>

    <ul>
        <?php foreach($filteredItems as $item) :?> 
            <li>
                <a href="<?= $item['purchaseUrl'] ?>">
                    <?= $item['name'] ?> (<?= $item['releaseYear'] ?>) - By <?= $item['author'] ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>

    <!-- most flexible php inbuilt array_filter function-->
    <?php 
    $filteredItems = array_filter($books, function ($book) {
        return $book['name'] === 'Project Hail Mary';
    })
    ?>

    <ul>
        <?php foreach($filteredItems as $item) :?> 
            <li>
                <a href="<?= $item['purchaseUrl'] ?>">
                    <?= $item['name'] ?> (<?= $item['releaseYear'] ?>) - By <?= $item['author'] ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>

</body>
</html>
