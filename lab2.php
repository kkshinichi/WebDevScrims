<!DOCTYPE html>
<html>

<?php
  // Variables
  $school = "POLYTECHNIC UNIVERSITY OF THE PHILIPPINES";
  $course = "BSCpE";
  $yearlevel = "4th Year";
  $dateofbirth = "12/18/1998";
  $gender = "Female";

  $school1 = "POLYTECHNIC UNIVERSITY OF THE PHILIPPINES";
  $course1 = "BSCpE";
  $yearlevel1 = "4th Year";
  $dateofbirth1 = "05/12/1999";
  $gender1 = "Male";

  $school2 = "POLYTECHNIC UNIVERSITY OF THE PHILIPPINES";
  $course2 = "BSCpE";
  $yearlevel2 = "4th Year";
  $dateofbirth2 = "10/27/1998";
  $gender2 = "Male";

  $school3 = "POLYTECHNIC UNIVERSITY OF THE PHILIPPINES";
  $course3 = "BSCpE";
  $yearlevel3 = "4th Year";
  $dateofbirth3 = "01/04/1999";
  $gender3 = "Male";
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
      </ul>
    </div>

    <div class="rightcolumn">
      <?php
        echo '<table width="95%" border=1 style="border-collapse: collapse;">';
        echo '<tr><td colspan=2><strong>My Academic Information</strong> - Abordo, Gellyne G.</td></tr>';
        echo '<tr><td>School</td><td>', $school, '</td></tr>';
        echo '<tr><td>Course</td><td>', $course, '</td></tr>';
        echo '<tr><td>Year Level</td><td>', $yearlevel, '</td></tr>';
        echo '<tr><td>Date of Birth</td><td>', $dateofbirth, '</td></tr>';
        echo '<tr><td>Sex</td><td>', $gender, '</td></tr>';
        echo '</table><br>';

        echo '<table width="95%" border=1 style="border-collapse: collapse;">';
        echo '<tr><td colspan=2><strong>My Academic Information</strong> - Lomibao, Allen Jed P.</td></tr>';
        echo '<tr><td>School</td><td>', $school1, '</td></tr>';
        echo '<tr><td>Course</td><td>', $course1, '</td></tr>';
        echo '<tr><td>Year Level</td><td>', $yearlevel1, '</td></tr>';
        echo '<tr><td>Date of Birth</td><td>', $dateofbirth1, '</td></tr>';
        echo '<tr><td>Sex</td><td>', $gender1, '</td></tr>';

        echo '</table><br>';
        echo '<table width="95%" border=1 style="border-collapse: collapse;">';
        echo '<tr><td colspan=2><strong>My Academic Information</strong> - Mahaguay, Edrian Charles M.</td></tr>';
        echo '<tr><td>School</td><td>', $school2, '</td></tr>';
        echo '<tr><td>Course</td><td>', $course2, '</td></tr>';
        echo '<tr><td>Year Level</td><td>', $yearlevel2, '</td></tr>';
        echo '<tr><td>Date of Birth</td><td>', $dateofbirth2, '</td></tr>';
        echo '<tr><td>Sex</td><td>', $gender2, '</td></tr>';
        echo '</table><br>';

        echo '<table width="95%" border=1 style="border-collapse: collapse;">';
        echo '<tr><td colspan=2><strong>My Academic Information</strong> - Tejada, Theo Leonard P.</td></tr>';
        echo '<tr><td>School</td><td>', $school3, '</td></tr>';
        echo '<tr><td>Course</td><td>', $course3, '</td></tr>';
        echo '<tr><td>Year Level</td><td>', $yearlevel3, '</td></tr>';
        echo '<tr><td>Date of Birth</td><td>', $dateofbirth3, '</td></tr>';
        echo '<tr><td>Sex</td><td>', $gender3, '</td></tr>';
        echo '</table><br>';
      ?>
    </div>
  </div>

  <div class="footer">
    <h5><?php echo '&copy; ', date('Y'), ' ', "WebDevScrims", ' :: Rundate ', date('m/d/Y'); ?></h5>
  </div>

</body>
</html>
