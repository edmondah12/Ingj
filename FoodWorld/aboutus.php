<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food World</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/css.css">
    <link rel="stylesheet" href="css/aboutus.css">
</head>

<body>
          <!--Headeri-->
          <?php include 'includes/header.php'; ?>
          <!--Headeri-->
    <main class="cover1">
        <h4>CONTACT US</h4>
        <form name="AboutUs" id="Aboutus" action="includes/about.inc.php" method="post" onsubmit="return validateForm()">
            <label>Emri:</label>
            <input class="input" type="text" name="emri" placeholder="Emri..." />
            <div class="errors" id="EmriErr"></div>
            <label>Mbiemri:</label>
            <input class="input" type="text" name="mbiemri" placeholder="Mbiemri..." />
            <div class="errors" id="MbiemriErr"></div>
            <label>Email:</label>
            <input class="input" type="text" name="email" placeholder="Emaili..." />
            <div class="errors" id="emailErr"></div>
            <label>Shteti:</label>
            <select id="Shteti" name="Shteti">  
                <option value="Kosovë">Kosovë</option>
                <option value="Shqipri">Shqiperi</option>
                <option value="Gjermoni">Gjermani</option>
              </select>
            <label for="subject">Arsyeja</label>
            <textarea id="Arsyeja" name="Arsyeja" placeholder="Shkruaj arsyen e kontaktimi apo problemete teknike.." style="height:170px"></textarea>
            <div class="errors" id="arsyejaErr"></div>

            <input id="submit" type="submit" name="dergo" class="input submit" value="Dërgo" />


        </form>
    </main>
            <!--Footeri-->
            <?php include 'includes/footer.php'; ?>
            <!--Footeri-->
    <script type="text/javascript" src="javascript/aboutus.js"></script>
</body>

</html>