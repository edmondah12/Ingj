<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/css.css">
    <link rel="stylesheet" href="css/signup.css">
    <script type="text/javascript" src="javascript/signup.js"></script>
</head>

 <!--Headeri-->
 <?php include 'includes/header.php'; ?>
<!--Headeri-->
<main class="sign">
    <form name="Signup" id="SignupForm" action="includes/signup.inc.php" method="post" onsubmit="return validateForm()">
        <label>Emri:</label>
        <input class="input" type="text" name="emri" placeholder="Emri..." />
        <div class="errors" id="EmriErr"></div>
        <label>Mbiemri:</label>
        <input class="input" type="text" name="mbiemri" placeholder="Mbiemri..." />
        <div class="errors" id="MbiemriErr"></div>
        <label>Username:</label>
        <input class="input" type="text" name="username" placeholder="Username..." />
        <div class="errors" id="usernameErr"></div>
        <label>Email:</label>
        <input class="input" type="text" name="email" placeholder="Emaili..." />
        <div class="errors" id="emailErr"></div>
        <label>Password:</label>
        <input class="input" type="password" name="password" placeholder="Password..." />
        <div class="errors" id="passwordErr"></div>
        <label>Konfirmo Password-in:</label>
        <input class="input" type="password" name="KonfPassword" placeholder="Konfirmo Password-in..." />
        <div class="errors" id="KpasswordErr"></div>

        <input id="submit" type="submit" name="signup-register" class="input submit" value="register" />


    </form>
</main>
            <!--Footeri-->
            <?php include 'includes/footer.php'; ?>
            <!--Footeri-->

<body>

</body>

</html>