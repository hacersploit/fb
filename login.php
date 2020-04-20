<?php
session_start();
?>

<!DOCTYPE html>

<html>

    <head>
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

    <body>
        <form action="check.php" method="POST">
            <input type="text" class="input" name="username" placeholder="username">
            <input  type="password" class="input" name="pass" placeholder="pass">
            <input class="button" type="submit" id="login" name="login" value="login">  
                <?php
                    if(isset($_SESSION["error"])){
                        $error = $_SESSION["error"];
                        echo "<span>$error</span>";
                    }
                ?>  
        </form>
    </body>
</html>

<?php
    unset($_SESSION["error"]);
?>
