<?php
require_once "includes/config_session.inc.php";
require_once "includes/signup_view.inc.php";
require_once "includes/login_view.inc.php";
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
            justify-content: flex-start;
            align-items: center;
            flex-direction: column;
            gap: 3rem;
            padding-block-start: 4rem;
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

    <h1>
        <?php
        output_login();
        ?>
    </h1>

    <?php if (!isset($_SESSION["user_id"])) { ?>

        <section>
            <h2>Log In</h2>
            <form action="includes/login.inc.php" method="post">
                <input type="text" name="username" placeholder="Username">
                <input type="password" name="pwd" placeholder="Password">
                <button>Dealé</button>
            </form>
        </section>

    <?php } check_login_errors(); ?>


    <section>
        <h2>Sign Up</h2>
        <form action="includes/signup.inc.php" method="post">
            <?php
            signup_inputs();
            ?>
            <button>Dealé</button>
        </form>

        <?php
        check_signup_errors();
        ?>
    </section>


    <section>
    <h2>Log out</h2>
        <form action="includes/logout.inc.php" method="post">
            <button>Salirse</button>
        </form>
    </section>

</body>

</html>