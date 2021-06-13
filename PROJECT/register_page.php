<?php

include 'functions.php';

/*registering*/
if (isset($_POST['login']) && isset($_POST['password'])) {
    $givenLogin = $_POST['login'];
    $givenPassword = $_POST['password'];
    $givenConfirmedPassword = $_POST['password_Confirmed'];
    $adress = $_POST['adress'];


    $row = mysqli_fetch_assoc(DbQuery("SELECT login FROM users WHERE login = '$givenLogin'"));

    if ($givenLogin == $row['login']) {
        echo "<h3>Login is already used, try again!!</h3>";
        if ($givenPassword != $givenConfirmedPassword) {
            echo "Passwords aren't the same";
        }
    } else {
        DbQuery("INSERT INTO users(login,password,adress) VALUES ('$givenLogin','$givenPassword','$adress')");
        header("Location: logging_page.php");
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>RandomShop/RegistrationPage</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
</head>
<body class="body_login_and_register">
<FORM action="register_page.php" method="POST">
    <h1>RandomShop - the best online shop worldwide </h1>
    <h2>Registration page</h2>
    <table>
        <TR>
            <TD>
                <input class="input100" type="text" name="login" placeholder="Login" required>
            </TD>
        </TR>

        <TR>
            <TD>
                <input class="input100" type="password" name="password" placeholder="Password" required>
            </TD>
        </TR>
        <TR>
            <TD>
                <input class="input100" type="password" name="password_Confirmed" placeholder="Confirm password" required>
            </TD>
        </TR>
        <TR>
            <TD>
                <input class="input100" type="text" name="adress" placeholder="Street,City,Postal-code" required>
            </TD>
        </TR>
        <TR>
            <TD>
                <button class="button_register_registerSite" type="submit" name="sign_up_button">Sign up</button>
            </TD>
        </TR>

    </table>
</FORM>
<FORM action="logging_page.php">
    <table>
        <TR>
            <TD>
                <button class="button_register_registerSite" type="submit" name="backToSignIn" >Back to Sign in</button>
            </TD>
        </TR>
    </table>
</FORM>


<footer>
    <p style="font-size:14px; color:#dbdbdb">(c) Made by RandomE</p>
</footer>


</body>
</html>
