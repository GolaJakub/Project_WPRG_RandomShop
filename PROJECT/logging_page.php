
<?php
include 'functions.php';
error_reporting(0);
/*logging in*/
if(isset($_POST['login']) && isset($_POST['password'])){
    $givenLogin = $_POST['login'];
    $givenPassword = $_POST['password'];

    $row = mysqli_fetch_assoc(DbQuery("SELECT login,password FROM users WHERE login = '$givenLogin' AND password = '$givenPassword'"));

    if($givenLogin == $row['login'] && $givenPassword == $row['password']){
        header("Location: main_page.php");
    }
    else{
        echo "<h1>Incorrect login or password!!!</h1>";
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <title>RandomShop/LoggingPage</title>

    <meta charset="UTF-8">

    <link rel="stylesheet" href="style.css">
</head>
    <body class="body_login_and_register">

        <FORM action="logging_page.php" method="POST" >
            <h1>RandomShop - the best online shop worldwide</h1>
            <h2>Logging page</h2>
                    <table>
                        <TR>
                            <TD>
                                <input class="input100" type="text" name="login" placeholder="login" required> <br>
                            </TD>
                        </TR>

                        <TR>
                            <TD>
                                <input class="input100" type="password" name="password" placeholder="password" required> <br>
                            </TD>
                        </TR>

                        <TR>
                            <TD>
                                <button class="button_log-in" type="submit" name="log_in_button">Sign in</button>
                            </TD>
                        </TR>
                    </table>

        </FORM>
        <FORM action="register_page.php" method="POST" >
            <table>
                <TR>
                    <TD>
                        <button class="button_register_loginSite" type="submit" name="register_button">Sign up</button>
                    </TD>
                </TR>
            </table>
        </FORM>


    <footer>
            <p style="font-size:14px; color:#aaaaaa">(c) Made by RandomE</p>
    </footer>


    </body>
</html>