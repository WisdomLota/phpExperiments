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
                'author' => 'Andy Weir',  // Fix typo (should be "Weir")
                'releaseYear' => 2011,
                'purchaseUrl' => 'http://example.com'
            ],
            [
                'name' => 'The Martian',
                'author' => 'Andy Weir',  // Fix typo (should be "Weir")
                'releaseYear' => 2022,
                'purchaseUrl' => 'http://example.com'
            ]
        ];

        // Function to filter books by author
        function filterByAuthor($books, $author) {
            $filteredBooks = [];
            foreach($books as $book) {
                if($book['author'] === $author) {
                    $filteredBooks[] = $book;
                }
            }
            return $filteredBooks;
        }
    ?>

    <!-- First approach -->
    <ul>
        <?php foreach($books as $book) :?>
            <!-- Filtering books by author -->
            <?php if($book['author'] === 'Andy Weir') :?>
                <li>
                    <a href="<?= $book['purchaseUrl'] ?>">
                        <?= $book['name'] ?> (<?= $book['releaseYear'] ?>) - By <?= $book['author'] ?>
                    </a>
                </li>
            <?php endif ?>
        <?php endforeach; ?>
    </ul>

    <!-- Second approach (better) -->
    <ul>
        <?php foreach(filterByAuthor($books, 'Philip K. Dick') as $book) :?>  <!-- Correct PHP function call -->
            <li>
                <a href="<?= $book['purchaseUrl'] ?>">
                    <?= $book['name'] ?> (<?= $book['releaseYear'] ?>) - By <?= $book['author'] ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
