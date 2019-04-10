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
  define('LABTITLE', 'Javascript Hands-on Activity No. 7');
  define('DESCRIPTION', "Telephone Number and Postal Code Format Checker");
?>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo LABTITLE; ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
        function main() {
          var phoneNum = prompt("Please enter a Telephone Number:","e.g. 02 335-1787");
          var zipCode = prompt("Please Enter a Zip Code:", "e.g. 1016")
          document.getElementById('phoneNum').innerHTML = "Telephone Number: " + phoneNum;
          document.getElementById('zipCode').innerHTML = "Zip Code: " + zipCode;

          var phoneRegex = /^([\+][0-9]{1,3}([ \.\-])?)?([\(]{1}[0-9]{3}[\)])?([0-9A-Z \.\-]{1,32})((x|ext|extension)?[0-9]{1,4}?)$/;
          var zipRegex = /^\d{4}$/;
          var phoneTest;
          var zipTest;
          phoneTest = phoneRegex.test(phoneNum);
          if(phoneTest == true) {
            document.getElementById('phoneRes').innerHTML = "Telephone Number:\tValid in terms of Format.";
          }
          else {
            document.getElementById('phoneRes').innerHTML = "Telephone Number:\tInvalid formatting.";
          }
          zipTest = zipRegex.test(zipCode);
          if (zipTest == true) {
            document.getElementById('zipRes').innerHTML = "Zip Code:\tValid in terms of Format.";
          }
          else {
            document.getElementById('zipRes').innerHTML = "Zip Code:\tInvalid formatting.";
          }
        }
      </script>
      <p><b>Telephone and Postal Code Format Checker</b></p><br>
      <p id="phoneNum"></p>
      <p id="zipCode"></p><br>
      <p id="phoneRes"></p>
      <p id="zipRes"></p>
    </div>
  </div>

  <div class="footer">
    <h5><?php echo '&copy; ', date('Y'), ' ', "WebDevScrims", ' :: Rundate ', date('m/d/Y'); ?></h5>
  </div>

</body>
</html>
