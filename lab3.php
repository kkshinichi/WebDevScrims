<!DOCTYPE html>
<html>

<?php
  // Constants
  define('NAME','THEO LEONARD P. TEJADA');
  define('STUDENT NUMBER', '2015-01331-MN-0');
  define('ADDRESS','Navotas City');
  define('EMAILADDRESS','tlp.tejada@iskolarngbayan.pup.edu.ph');
  define('CONTACTNUMBER','+639052895824');
  define('WEBADDRESS','kkshinichi.me');
  define('LABTITLE', 'Lab Activity No. 3');
  define('DESCRIPTION', 'Working with Data Types and Operators');

  // Lab 3 Variables
  $myinteger = 10;
  $myfloat = 10.57;
  $mystring = '10 apples';
  $myboolean = TRUE;
  $mynull = NULL;
  $myarray = array(1,2,3);
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
        echo '<p>1. PHP Data Types</p>';
        echo '<table width="60%" border=1 style="border-collapse: collapse;">';
        echo '<tr><td>1a. $myinteger</td><td>', var_dump($myinteger), '</td></tr>';
        echo '<tr><td>1b. $myfloat</td><td>', var_dump($myfloat), '</td></tr>';
        echo '<tr><td>1c. $mystring</td><td>', var_dump($mystring), '</td></tr>';
        echo '<tr><td>1d. $myboolean</td><td>', var_dump($myboolean), '</td></tr>';
        echo '<tr><td>1e. $mynull</td><td>', var_dump($mynull), '</td></tr>';
        echo '<tr><td>1f. $myarray</td><td>', var_dump($myarray), '</td></tr>';
        echo '</table>';

        echo '<p>2. PHP Arithmetic Operations</p>';
        echo '<table width="95%" border=1 style="border-collapse: collapse;">';
        echo '<tr><td>2a. $myinteger + 10</td><td>', var_dump($myinteger + 10), '</td></tr>';
        echo '<tr><td>2b. $myinteger - 5</td><td>', var_dump($myinteger - 5), '</td></tr>';
        echo '<tr><td>2c. $myinteger * 2</td><td>', var_dump($myinteger * 2), '</td></tr>';
        echo '<tr><td>2d. $myinteger / 3</td><td>', var_dump($myinteger / 3), '</td></tr>';
        echo '<tr><td>2e. $myboolean + 1</td><td>', var_dump($myboolean + 1), '</td></tr>';
        echo '<tr><td>2f. $mystring * 2</td><td>', var_dump($mystring * 2), '</td></tr>';
        echo '</table>';

        echo '<p>3. PHP Bitwise Operators</p>';
        echo '<table width="50%" border=1 style="border-collapse: collapse;">';
        echo '<tr><td>3a. $myinteger & 8</td><td>', var_dump($myinteger & 8), '</td></tr>';
        echo '<tr><td>3b. $myinteger | 8</td><td>', var_dump($myinteger | 8), '</td></tr>';
        echo '<tr><td>3c. $myinteger << 1</td><td>', var_dump($myinteger << 1), '</td></tr>';
        echo '<tr><td>3d. $myinteger >> 1</td><td>', var_dump($myinteger >> 1), '</td></tr>';
        echo '</table>';

        echo '<p>4. PHP Comparison Operators</p>';
        echo '<table width="50%" border=1 style="border-collapse: collapse;">';
        echo '<tr><td>3a. $myinteger == 10</td><td>', var_dump($myinteger == 10), '</td></tr>';
        echo '<tr><td>3b. $myinteger > 10</td><td>', var_dump($myinteger > 10), '</td></tr>';
        echo '<tr><td>3c. $myinteger >= 10</td><td>', var_dump($myinteger >= 10), '</td></tr>';
        echo '<tr><td>3d. $myinteger < 20</td><td>', var_dump($myinteger < 20), '</td></tr>';
        echo '<tr><td>3e. $myinteger <= 20</td><td>', var_dump($myinteger <= 20), '</td></tr>';
        echo '<tr><td>3f. $myinteger == $mystring</td><td>', var_dump($myinteger == $mystring), '</td></tr>';
        echo '<tr><td>3g. $myinteger === $mystring</td><td>', var_dump($myinteger === $mystring), '</td></tr>';
        echo '</table>';

        echo '<p>5. PHP Logical Operators</p>';
        echo '<table width="50%" border=1 style="border-collapse: collapse;">';
        echo '<tr><td>3a. $myinteger >= 10 AND $myinteger <= 20</td><td>', var_dump($myinteger >= 10 AND $myinteger <= 20), '</td></tr>';
        echo '<tr><td>3b. $myinteger == 10 OR $myinteger == 20</td><td>', var_dump($myinteger == 10 OR $myinteger == 20), '</td></tr>';
        echo '<tr><td>3c. $myinteger == 10 XOR  $myinteger == 20</td><td>', var_dump($myinteger == 10 XOR $myinteger == 20), '</td></tr>';
        echo '</table>';
      ?>
    </div>
  </div>

  <div class="footer">
    <h5><?php echo '&copy; ', date('Y'), ' ', NAME, ' :: Rundate ', date('m/d/Y'); ?></h5>
  </div>

</body>
</html>
