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
  define('LABTITLE', 'Lab Activity No. 6');
  define('DESCRIPTION', 'String Functions in PHP');
?>

<head>
  <meta charset="utf-8">
  <title><?php echo LABTITLE; ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="lab6.css">
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

    <!-- Content Section -->
    <div class="rightcolumn">
    <?php
      // CONTENT SECTION
      $string = isset($_POST['string']) ? $_POST['string'] : ' ';
      echo '<form method=post action="">';
      echo '<h1>String Functions in PHP</h2>';
      echo '<input type="text" name="string" value="', $string, '" size=100><br /><br />';
      echo '<input type="submit" value="Apply Functions">&nbsp;';
      echo '<input type="reset" value="Reset"><br />';
      echo '</form>';

      echo '<table id = "result"><tr>';
        echo '<th>No.</th>';
   			echo '<th>Description</th>';
        echo '<th>Output</th>';
      echo '</tr><tr>';
        echo '<td>1.</td>';
        echo '<td>Original value of $string</td>';
        echo '<td>*', htmlspecialchars($string), '*</td>';
      echo '</tr><tr>';
        echo '<td>2.</td>';
        echo '<td>Number of characters</td>';
        echo '<td>*', strlen($string), '*</td>';
      echo '</tr><tr>';
        echo '<td>3.</td>';
        echo '<td>Number of words</td>';
        echo '<td>*', str_word_count($string), '*</td>';
      echo '</tr><tr>';
        echo "<th colspan='3'><br></th>";
      echo '</tr><tr>';
        echo '<td>4.</td>';
        echo '<td>First character to uppercase</td>';
        echo '<td>*', ucfirst(htmlspecialchars($string)), '*</td>';
      echo '</tr><tr>';
        echo '<td>5.</td>';
        echo '<td>First character of each word to uppercase</td>';
        echo '<td>*', ucwords(htmlspecialchars($string)), '*</td>';
      echo '</tr><tr>';
        echo '<td>6.</td>';
        echo '<td>To lowercase</td>';
        echo '<td>*', strtolower(htmlspecialchars($string)), '*</td>';
      echo '</tr><tr>';
        echo '<td>7.</td>';
        echo '<td>To uppercase</td>';
        echo '<td>*', strtoupper(htmlspecialchars($string)), '*</td>';
      echo '</tr><tr>';
        echo "<th colspan='3'><br></th>";
      echo '</tr><tr>';
        echo '<td>8.</td>';
        echo '<td>Without leading spaces</td>';
        echo '<td>*', ltrim(htmlspecialchars($string)), '*</td>';
      echo '</tr><tr>';
        echo '<td>9.</td>';
        echo '<td>Without trailing spaces</td>';
        echo '<td>*', rtrim(htmlspecialchars($string)), '*</td>';
      echo '</tr><tr>';
        echo '<td>10.</td>';
        echo '<td>Without leading and trailing spaces</td>';
        echo '<td>*', trim(htmlspecialchars($string)), '*</td>';
      echo '</tr><tr>';
        echo "<th colspan='3'><br></th>";
      echo '</tr><tr>';
        echo '<td>11.</td>';
        echo '<td>MD5 value of $string</td>';
        echo '<td>*', md5($string), '*</td>';
      echo '</tr><tr>';
        echo '<td>12.</td>';
        echo '<td>Base64 value of $sting</td>';
        echo '<td>*', base64_encode($string), '*</td>';
      echo '</tr><tr>';
        echo "<th colspan='3'><br></th>";
      echo '</tr><tr>';
        echo '<td>13.</td>';
        echo '<td>First 16 characters</td>';
        echo '<td>*', substr(htmlspecialchars($string), 0, 16), '*</td>';
      echo '</tr><tr>';
        echo '<td>14.</td>';
        echo '<td>Last 4 characters</td>';
        echo '<td>*', substr(htmlspecialchars($string), -4), '*</td>';
      echo '</tr><tr>';
        echo '<td>15.</td>';
        echo '<td>4 characters starting from the 20th Position</td>';
        echo '<td>*', substr(htmlspecialchars($string), 20, 4), '*</td>';
      echo '</tr><tr>';
        echo "<th colspan='3'><br></th>";
      echo '</tr><tr>';
        echo '<td>16.</td>';
        echo '<td>Position of the word "guide"</td>';
        if (strpos($string, "guide") == true) {
          echo '<td>*int(', strpos($string, "guide") ,')*</td>';
        }
        else {
          echo '<td>*bool(false)*</td>';
        }
      echo '</tr><tr>';
        echo '<td>17.</td>';
        echo '<td>Position of the word "UE"</td>';
        if (strpos($string, "UE") == true) {
          echo '<td>*int(', strpos($string, "guide") ,')*</td>';
        }
        else {
          echo '<td>*bool(false)*</td>';
        }
      echo '</tr><tr>';
        echo "<th colspan='3'><br></th>";
      echo '</tr><tr>';
        echo '<td>18.</td>';
        echo '<td>"HTML" word in uppercase</td>';
        echo '<td>*', str_replace("html", "HTML", htmlspecialchars($string)), '*</td>';
      echo '</tr><tr>';
        echo '<td>19.</td>';
        echo '<td>&lt;INPUT&gt; word in uppercase</td>';
        echo '<td>*', str_replace(htmlspecialchars("<input>"), htmlspecialchars("<INPUT>"), htmlspecialchars($string)), '*</td>';
      echo '</tr><tr>';
        echo "<th colspan='3'><br></th>";
      echo '</tr><tr>';
        echo '<td>20.</td>';
        echo '<td>Strings coverted to array</td><td>';
        $token = strtok(htmlspecialchars($string), " ");
        while ($token !== false) {
          echo '*',"$token" , '*<br>';
          $token= strtok(" ");
        }	
        echo '</td>';
      echo '</tr></table>';
    ?>
    </div>
  </div>

  <div class="footer">
    <h5><?php echo '&copy; ', date('Y'), ' ', NAME, ' :: Rundate ', date('m/d/Y'); ?></h5>
  </div>

</body>
</html>
