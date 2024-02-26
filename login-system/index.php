<?php
require_once "includes/config_session.inc.php";
require_once "includes/signup_view.inc.php";
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
            background-color: #f1f1f1;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        section {
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
        <h2>Log In</h2>
        <form action="includes/login.inc.php" method="post">
            <input type="text" name="username" placeholder="User name">
            <input type="password" name="pwd" placeholder="Password">
            <button>Dealé</button>
        </form>
    </section>
    <section>
        <h2 >Sign Up</h2>
        <form action="includes/signup.inc.php" method="post">
            <input type="text" name="username" placeholder="User name">
            <input type="text" name="email" placeholder="Email">
            <input type="password" name="pwd" placeholder="Password">
            <button>Dealé</button>
        </form>

        <?php
        check_signup_errors();
        ?>
    </section>

   
</body>

</html>