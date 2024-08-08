<?php

$books = [
    [
        'name' => 'John Smith',
        'book' => 'War Doctrine',
        'year' => 1892
    ],
    [
        'name' => 'Curt Adams',
        'book' => 'The Book of Life',
        'year' => 1992
    ],
    [
        'name' => 'Greta Louise',
        'book' => 'Paradisean',
        'year' => 2009
    ]
];

function filtered_by_author($books, $author)
{
    $another_array = [];
    foreach ($books as $book) {
        if ($book['name'] == $author) {
            $another_array[] = $book;
        }
    }

    return $another_array;
}

$variable = array("nombre" => "John", "edad" => 30);

echo "Con echo:\n";
echo "Nombre: John\n";  // Solo cadenas de texto
echo "<br>";

print "Con print:\n";
print "Edad: 30\n";     // Solo cadenas de texto
echo "<br>";

print_r("Con print_r:\n");
print_r($variable);     // Imprime estructuras completas, más legible para arrays y objetos
echo "<br>";

var_dump("Con var_dump:\n");
var_dump($variable);    // Imprime estructuras con tipo y detalles, muy detallado
echo "<br>";

echo "Con var_export:\n";
var_export($variable);  // Imprime estructuras en formato PHP, puede ser evaluado por PHP
echo "<br>";


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
        <?php foreach (filtered_by_author($books, "Curt Adams") as $book) : ?>
            <li>
                <?= $book['name'] ?>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>