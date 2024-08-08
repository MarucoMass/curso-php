<?php

$books = [
    [
        'author' => 'John Smith',
        'book' => 'War Doctrine',
        'year' => 1892
    ],
    [
        'author' => 'Curt Adams',
        'book' => 'The Book of Life',
        'year' => 2002
    ],
    [
        'author' => 'Greta Louise',
        'book' => 'Paradisean',
        'year' => 2009
    ]
];

$filter = function ($items, $fn)
{
    $filteredItems = [];
    foreach ($items as $item) {
        if ($fn($item)) {
            $filteredItems[] = $item;
        }
    }

    return $filteredItems;
};

$filteredBooks = array_filter($books, function($book) {
    return $book['year'] > 2000;
});

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ul>
        <?php foreach ($filteredBooks as $book) : ?>
            <li>
                <?= $book['author'] ?> - <?= $book['book'] ?>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>