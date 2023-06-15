<html>
    <head>
        <title>Registration</title>
        <link rel="stylesheet" type="text/css" href="../style/style.css">
    </head>
    <body>
        <h1><a style="text-decoration: none;" href="../home.html">Customer Registration</a></h1>
        <?php
            if (isset($_COOKIE['msg'])) {
                echo $_COOKIE['msg'];
            }
        ?>
        <br>
        <form action="../controller/registrationController.php" method="POST">
            <fieldset> 
                <label for="id">ID</label><br>
                <input type="text" name="id"><br>
                <label for="name">Name</label><br>
                <input type="text" name="name"><br>
                <label for="address">Address</label><br>
                <input type="text" name="address"><br>
                <label for="phone">Phone</label><br>
                <input type="text" name="phone"><br>
                <label for="email">Email</label><br>
                <input type="email" name="email"><br>
                <label for="id">username</label><br>
                <input type="text" name="username"><br>
                <label for="id">Password</label><br>
                <input type="password" name="password"><br>
                <input type="submit" name="submit" id="submit-btn" value="Register">
                
            </fieldset>
        </form>
    </body>
</html>