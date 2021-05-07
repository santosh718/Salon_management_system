<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="div1">
        <form action="CreateAccountConnect.php" method="POST">
            <table>
                    <tr>
                        <th class="th">Name</th>
                    </tr>
                    <tr>
                        <td><input type="text" name="Name" class="inputs1" id="Name" placeholder="Enter Username" required></td>
                    </tr>

                    <tr>
                        <th class="th">Username</th>
                    </tr>
                    <tr>
                        <td><input type="text" name="UserName" class="inputs1" id="UserName" placeholder="Enter Username"required></td>
                    </tr>

                    <tr>
                        <th class="th">Mobile No</th>
                    </tr>
                    <tr>
                        <td><input type="text" name="Mobile" class="inputs1" id="Mobile" placeholder="Enter Username" required></td>
                    </tr>

                    <tr>
                        <th class="th">Email ID</th>
                    </tr>
                    <tr>
                        <td><input type="email" name="Email" class="inputs1" id="Email" placeholder="Enter Username" required></td>
                    </tr>

                    <tr>
                        <th class="th">Password</th>
                    </tr>
                    <tr>
                        <td><input type="password" name="Password" class="inputs1" id="Password" placeholder="Enter Password" required></td>
                    </tr>

                    <tr>
                        <th class="th">Conform Password</th>
                    </tr>
                    <tr>
                        <td><input type="password" name="ConformPassword" class="inputs1" id="ConformPassword" placeholder="Enter Password" required></td>
                    </tr>

                    <tr>
                        <td>
                            <button type="submit" class="button">Create Account</button>
                        </td>
                    </tr>                    
                </table>
        </form>
    </div>
</body>
</html>