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
  define('NAME','THEO LEONARD P. TEJADA');
  define('STUDENT NUMBER', '2015-01331-MN-0');
  define('ADDRESS','Navotas City');
  define('EMAILADDRESS','tlp.tejada@iskolarngbayan.pup.edu.ph');
  define('CONTACTNUMBER','+639052895824');
  define('WEBADDRESS','kkshinichi.me');
  define('LABTITLE', 'Javascript Hands-on Activity No. 5');
  define('DESCRIPTION', "User's Age");
?>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo LABTITLE; ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src = "https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.23.0/moment.js"></script>
  <link rel="stylesheet" type="text/css" href="js2.css">
</head>

<body onload="main()">

 <div class="header">
    <h1>WebDevScrims</h1>
  </div>

  <div class="menu">
  <ul>
    <li><a href="Home.php">Home</a></li>
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

    <div id="rightcolumn">
      <script>
         function main(){
          var months = prompt("Please Enter Birth Month:", "e.g. 1, 12");
          months--;
          var days = prompt("Please Enter Birth Date:", "e.g. 1, 21, 31");
          var years = prompt("Please Enter Birth Year:","e.g. 1999, 2019");
          var birthDate = moment([years, months, days]);
          var today = moment();
          var resYear = today.diff(birthDate, 'years');
          var resMonth = today.diff(birthDate, 'months') - (resYear * 12);
          months++;
          document.getElementById('birthDate').innerHTML = 'Birth Date: ' + months + "/" + days + "/" + years;
          document.getElementById('age').innerHTML = 'You are ' + resYear + " years and " + resMonth + " months old.";
         }
      </script>
      <p><b>User's Age</b></p><br>
      <p id="birthDate"></p>
      <p id="age"></p>
    </div>
  </div>

  <div class="footer">
    <h5><?php echo '&copy; ', date('Y'), ' ', "WebDevScrims", ' :: Rundate ', date('m/d/Y'); ?></h5>
  </div>

</body>
</html>
