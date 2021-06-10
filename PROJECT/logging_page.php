<?php

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <title>RandomShop/LoggingPage</title>
</head>
    <body>
    <h1>RandomShop - the best online shop worldwide</h1>
        <FORM action="main_page.php" method="POST">
            <table>
                <TR>
                    <TD>
                        <input type="text" name="login" placeholder="login">
                    </TD>
                </TR>
                <TR>
                    <TD>
                        <input type="password" name="password" placeholder="password">
                    </TD>
                </TR>
                <TR>
                    <TD>
                        <button type="submit" name="log_in_button">Log in</button>
                    </TD>
                </TR>
            </table>
        </FORM>
        <FORM action="register_page.php" method="POST">
            <table>
                <TR>
                    <TD>
                        <button type="submit" name="register_button">Click here to register</button>
                    </TD>
                </TR>
            </table>
        </FORM>



    <footer>
            <p style="font-size:14px; color:#dbdbdb">(c) Made by RandomE</p>
    </footer>



    </body>
</html>