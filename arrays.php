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
        $books = [
            "Do Andriods Dream of Electric Sheep",
            "The Langoliers",
            "Hail Mary"
        ];
    ?>
    <ul>
        <!-- <?php 
            foreach ($books as $book) {
                echo "<li>{$book}™</li>";
            }
        ?> -->
        <!-- second pattern -->
        <?php foreach($books as $book) : ?>
            <li><?=$book; ?></li>
        <?php endforeach ?>
    </ul>

    <p>
        <?php echo $books[1] ?>
    </p>
</body>
</html>