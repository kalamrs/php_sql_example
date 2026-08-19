<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Form</title>
    <link rel="stylesheet" href="styles/LoginSignupStyle.css"/>
</head>
<body>
<?php
if (isset($_GET['error'])) {
    echo "<p style='color: black;'>" . htmlspecialchars($_GET['error']) . "</p>";
}
?>
    <div class="signUpContainer">
        <h2>Sign Up</h2>
        <form class="signUpForm" action="sql/eggrafi.php" method="post">
            
                <label for="firstName">First Name</label>
                <input type="text" id="firstName" name="firstName" required>
            
            
                <label for="lastName">Last Name</label>
                <input type="text" id="lastName" name="lastName" required>
            
            
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            
            
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            
            
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
           
            <button type="submit" class="signUpbtn" name="submit" >Sign Up</button>
            <a class="home" href=index.php >Home</a>
        </form>
    </div>
</body>
</html>
