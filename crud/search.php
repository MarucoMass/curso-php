<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $searchName = $_POST["searchname"];
    try {
        require_once "includes/dbh.inc.php";
        $query = "SELECT * FROM comments WHERE username = :searchname";

        $stmt = $pdo->prepare($query);

        $stmt->bindParam(":searchname", $searchName);
        $stmt->execute();

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $pdo = null;
        $stmt = null;

    } catch (PDOException $e) {
        die("Error en la query " . $e->getMessage());
    }
} else {
   header("Location: ../index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        section{
            width: fit-content;
            background-color: lightblue;
            padding: 1rem;
            margin-bottom: 1rem;
            
        }
    </style>
</head>
<body>
    
    <h1>Resultados:</h1>

    <?php

    if (empty($results)) {
        echo "No hay resultado";
    } else {
        foreach($results as $result){
            echo "<section>";
            echo "<h2>Nombre: " . htmlspecialchars($result["username"]) . "</h2>";
            echo "<h2>Comentario: " . htmlspecialchars($result["comment_text"]) . "</h2>";
            echo "</section>";
        }
    }
    

    ?>

</body>
</html>