<?php
// require_once "config.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *,
        *::after,
        *::before {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            min-height: 100dvh;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            gap: 3rem;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        section {
            background-color: lightblue;
            padding: 1rem;
            border-radius: 1rem;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            gap: 1rem;
            min-width: 300px;
        }
    </style>
</head>

<body>
    <section>
        <h2>Formulario</h2>
        <form action="includes/formhandler.inc.php" method="post">
            <input type="text" name="username" placeholder="User name">
            <input type="text" name="email" placeholder="Email">
            <input type="password" name="pwd" placeholder="Password">
            <button>Dealé</button>
        </form>
    </section>

    <section>
        <h2>Actualizar usuario del formulario</h2>
        <form action="includes/userupdate.inc.php" method="post">
            <input type="text" name="username" placeholder="User name">
            <input type="text" name="email" placeholder="Email">
            <input type="password" name="pwd" placeholder="Password">
            <button>Dealé</button>
        </form>
    </section>

    <section>
        <h2>Borrar usuario del formulario</h2>
        <form action="includes/userdelete.inc.php" method="post">
            <input type="text" name="username" placeholder="User name">
            <input type="password" name="pwd" placeholder="Password">
            <button>Dealé</button>
        </form>
    </section>

    <section>
        <h2>Buscar usuario</h2>
        <form action="search.php" method="post">
            <label for="search">Buscar el nombre:</label>
            <input type="text" name="searchname" id="search" placeholder="Buscar...">
            <button>Buscar</button>
        </form>
    </section>
</body>

</html>