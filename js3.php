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
  define('LABTITLE', 'Javascript Hands-on Activity No. 3');
  define('DESCRIPTION', "XYZ Company's Mid-Year Bonus Calculator");
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
    <h1><?php echo NAME; ?></h1>
  </div>

  <div class="row">
    <div class="leftcolumn">
      <ul>
        <p>Laboratory Activities</p>
        <li><a href="lab1.php">Hello World</a></li>
        <li><a href="lab2.php">Creating Basic PHP Script</a></li>
        <li><a href="lab3.php">Lab 3</a></li>
        <li><a href="lab4.php">Lab 4</a></li>
        <li><a href="lab5.php">Lab 5</a></li>
        <li><a href="lab6.php">Lab 6</a></li>
        <li><a href="lab7.php">Lab 7</a></li>
        <li><a href="lab8.php">Lab 8</a></li>
        <li><a href="lab9.php">Lab 9</a></li>
        <li><a href="lab10.php">Lab 10</a></li>
        <li><a href="lab11.php">Lab 11</a></li>
        <li><a href="lab12.php">Lab 12</a></li>
        <li><a href="lab13.php">Lab 13</a></li>
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
          var salary = prompt("Please enter your monthly salary:", "e.g. 20000, 38365");
         salary = parseInt(salary);
          var years = prompt("Please enter your years of service with XYZ Company:", "e.g. 1, 10, 23");
          var bonus;
          if(years >= 1 && years <= 5) {
            bonus = salary / 2;
          }
          else if (years >= 6 && years <= 15) {
            bonus = salary * 0.75;
          }
          else if (years >= 16){
            bonus = salary;
          }
          else {
            window.alert("Please refresh the page. Invalid service years entered.")
          }
          document.getElementById('salary').innerHTML = 'Salary: ' + salary;
          document.getElementById('years').innerHTML = 'Years of Service: ' + years;
          document.getElementById('bonus').innerHTML = 'Bonus: ' + bonus;
         }
      </script>
      <p><b>XYZ Company's Mid-Year Bonus Calculator</b></p><br>
      <p id="salary"></p>
      <p id="years"></p>
      <p id="bonus"></p>
    </div>
  </div>

  <div class="footer">
    <h5><?php echo '&copy; ', date('Y'), ' ', NAME, ' :: Rundate ', date('m/d/Y'); ?></h5>
  </div>

</body>
</html>
