<!DOCTYPE html>
<html>

<?php
  // Variables
  $school = "POLYTECHNIC UNIVERSITY OF THE PHILIPPINES";
  $course = "BSCpE";
  $yearlevel = "4th Year";
  $dateofbirth = "01/04/1999";
  $gender = "Male";
  // Constants
  define('LABTITLE', 'Javascript Hands-on Activity No. 1');
  define('DESCRIPTION', "What's in your Birthday?")
?>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo LABTITLE; ?></title>
  <script src="jquery-3.3.1.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Montserrat|Raleway|Thasadith" rel="stylesheet">
  <link rel="shortcut icon" type="image/x-icon" href="BirthAtts/TITLE ICON.jpg" />
  <link rel="stylesheet" type="text/css" href="js1.css">
</head>

<body onload = "main()">
  <div class="header">
    <h1>WebDevScrims</h1>
  </div>

  <div class="menu">
  <ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="lab2.php">Laboratory Exercises</a></li>
    <li><a href="js1.php">JavaScript Activities</a>
    <li><a href="OurTeam.php">Our Team</a></li>
  </ul>
  </div>

  <div class="row">
    <div class="leftcolumn">
      <ul>
        <p>JavaScript Hands-on</p>
        <li><a href="js1.php">JavaScript Hands-on Activity 1</a></li>
        <li><a href="js2.php">JavaScript Hands-on Activity 2</a></li>
        <li><a href="js3.php">JavaScript Hands-on Activity 3</a></li>
        <li><a href="js4.php">JavaScript Hands-on Activity 4</a></li>
        <li><a href="js5.php">JavaScript Hands-on Activity 5</a></li>
        <li><a href="js6.php">JavaScript Hands-on Activity 6</a></li>
        <li><a href="js7.php">JavaScript Hands-on Activity 7</a></li>
      </ul>
    </div>

    <div class="rightcolumn">
      <script src="js1.js"></script>
      <div id="spacer_0" style="height: 25px"></div>
      <h1 id="DATE"></h1>
      <div id="spacer" style="heightht: 50px"></div>
      <div id="STONE_DIV">
        <img id="STONE_IMAGE" src="BirthAtts/BLANK CANVAS.jpg" alt="Birth Stone" width="200" height="200" style="filter: brightness(45%);vertical-align:middle;">
        <div id="STONES">
          <p id="STONE_LABEL" style="font-family: 'Thasadith', sans-serif;font-size: 15px;">Birth Stone</p>
          <p id="STONE" style="font-family: 'Raleway', sans-serif;font-size: 25px"></p>
        </div>
      </div>
      <div id="FLOWER_DIV">
        <img id="FLOWER_IMAGE" src="BirthAtts/BLANK CANVAS.jpg" alt="Birth Flower" width="200" height="200" style="filter: brightness(45%);vertical-align:middle;">
        <div id="FLOWERS">
            <p id="FLOWER_LABEL" style="font-family: 'Thasadith', sans-serif;font-size: 15px;">Birth Flower</p>
            <p id="FLOWER" style="font-family: 'Raleway', sans-serif;font-size: 25px"></p>
        </div>
      </div>
      <div id="ZODIAC_DIV">
        <img id="ZODIAC_IMAGE" src="BirthAtts/BLANK CANVAS.jpg" alt="Zodiac Sign" width="200" height="200" style="filter: brightness(45%);vertical-align:middle;">
        <div id="ZODIACS">
            <p id="ZODIAC_LABEL" style="font-family: 'Thasadith', sans-serif;font-size: 15px;">Zodiac Sign</p>
            <p id="ZODIAC" style="font-family: 'Raleway', sans-serif;font-size: 25px"></p>
        </div>
      </div>
      <div id="CNZODIAC_DIV">
        <img id="CNZODIAC_IMAGE" src="BirthAtts/BLANK CANVAS.jpg" alt="Chinese Zodiac Sign" width="200" height="200" style="filter: brightness(45%);vertical-align:middle;">
        <div id="CNZODIACS">
            <p id="CNZODIAC_LABEL" style="font-family: 'Thasadith', sans-serif;font-size: 15px;">Chinese Lunar Zodiac</p>
            <p id="CNZODIAC" style="font-family: 'Raleway', sans-serif;font-size: 20px"></p>
        </div>
      </div>
      <div id="spacer_1" style="height: 30px;margin-top: 250px"></div>
    </div>
  </div>


  <div class="footer">
    <h5><?php echo '&copy; ', date('Y'), ' ', "WebDevScrims", ' :: Rundate ', date('m/d/Y'); ?></h5>
  </div>

</body>
</html>
