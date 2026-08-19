<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="styles/LoginSignupStyle.css" />
</head>
<body>
    <?php
    if (isset($_GET['error'])) {
        echo "<p style='color: black;'>" . htmlspecialchars($_GET['error']) . "</p>";
    }
    ?>
    <div class="loginContainer">
        <h2>Login</h2>
        <form class="loginForm" action="sql/eisodos.php" method="post">
            <div class="inputs">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="inputs">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="loginbtn" name="submit">Login</button>
        </form>
        <h3>Not a member yet? <a href="SignUp.php">Sign Up Here</a></h3>
    </div>
</body>
</html>
