<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/css.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/register.css">
    <script type="text/javascript" src="javascript/js.js"></script>
</head>

<body>
          <!--Headeri-->
          <?php include 'includes/header.php'; ?>
          <!--Headeri-->
<main class="log">
    <form name="Login" id="LoginForm" action="includes/login.inc.php" method="post" onsubmit="return validateforms()">
        <label>Username:</label>
        <input class="input" type="text" name="name" placeholder="username..." />
        <div class="error" id="nameErr"></div>
        <label>Password:</label>
        <input class="input" type="password" name="password" placeholder="password..." />
        <div class="error" id="passwordErr"></div>
        <input id="submit" type="submit" name="login-register" class="input submit" value="Login" />
        <div class="sgnp">
            <a>Don't have an account?</a><a href="signup.html"> Create one!</a>
        </div>
    </form>
</main>
            <!--Footeri-->
            <?php include 'includes/footer.php'; ?>
            <!--Footeri-->


</body>

</html>