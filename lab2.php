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
  define('LABTITLE', 'Lab Activity No. 2');
  define('DESCRIPTION', 'Creating Basic PHP Script')
?>

<head>
  <meta charset="utf-8">
  <title><?php echo LABTITLE; ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="lab2.css">
</head>

<body>

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

    <div class="rightcolumn">
      <?php
        echo '<table width="95%" border=1 style="border-collapse: collapse;">';
        echo '<tr><td colspan=2><strong>My Academic Information</strong></td></tr>';
        echo '<tr><td>School</td><td>', $school, '</td></tr>';
        echo '<tr><td>Course</td><td>', $course, '</td></tr>';
        echo '<tr><td>Year Level</td><td>', $yearlevel, '</td></tr>';
        echo '<tr><td>Date of Birth</td><td>', $dateofbirth, '</td></tr>';
        echo '<tr><td>Sex</td><td>', $gender, '</td></tr>';
        echo '</table>'
      ?>
    </div>
  </div>

  <div class="footer">
    <h5><?php echo '&copy; ', date('Y'), ' ', NAME, ' :: Rundate ', date('m/d/Y'); ?></h5>
  </div>

</body>
</html>
