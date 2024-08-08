<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            min-height: 100dvh;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        form{
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }
    </style>
</head>

<body>
    <h2>Formulario</h2>
    <form action="includes/formhandler.inc.php" method="post">
        <input type="text" name="username" placeholder="User name">
        <input type="text" name="email" placeholder="Email">
        <input type="password" name="pwd" placeholder="Password">
        <button>Dealé</button>
    </form>

    <h2>Actualizar usuario del formulario</h2>
    <form action="includes/userupdate.inc.php" method="post">
        <input type="text" name="username" placeholder="User name">
        <input type="text" name="email" placeholder="Email">
        <input type="password" name="pwd" placeholder="Password">
        <button>Dealé</button>
    </form>

    <h2>Borrar usuario del formulario</h2>
    <form action="includes/userdelete.inc.php" method="post">
        <input type="text" name="username" placeholder="User name">
        <input type="password" name="pwd" placeholder="Password">
        <button>Dealé</button>
    </form>
</body>

</html>