<!-- i created a seperate file to distinguish the php logic and the html that renders the view to user -->
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
