<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="div1">
        <form action="Loginconnect.php" method="POST">
            <table>
                    <tr>
                        <th class="th">Username</th>
                    </tr>
                    <tr>
                        <td><input type="text" name="UserName" class="inputs1" id="UserName" placeholder="Enter Username"></td>
                    </tr>

                    <tr>
                        <th class="th">Password</th>
                    </tr>
                    <tr>
                        <td><input type="password" name="Password" class="inputs1" id="Password" placeholder="Enter Password"></td>
                    </tr>

                    <tr>
                        <td>
                            <button type="submit" class="button">Login</button>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input type="checkbox" checkbox="checked" name="Remember" id="Remember">Remember me
                        </td>
                    </tr>

                    
                </table>
        </form>
        <div class="container"style="background-color:#f1f1f1">
                        <button type="button" class="cancelbtn">Cancel</button>
                     <span class="psw">Forgot <a href="#">password?</a></span>
        </div>
    </div>
</body>
</html>