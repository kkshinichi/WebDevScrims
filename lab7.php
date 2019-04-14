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
  define('LABTITLE', 'Lab Activity No. 7');
  define('DESCRIPTION', 'Regular Expression');
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
    <li><a href="index.php">Home</a></li>
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

    <!-- Content Section -->
    <div class="rightcolumn">
    <?php
      // SUPPLY THE MISSING PATTERN
      // $patterns IS A TWO DIMENSIONAL ARRAY CONTAINING [description, regex]
      $patterns[] = array('String containing "PHP"', 'PHP');
      $patterns[] = array('Starting with "PHP"', '^PHP');
      $patterns[] = array('Ends with "PHP"', 'PHP$');
      $patterns[] = array('String equal to "PHP"', '^PHP$');
      $patterns[] = array('Word starting with letter "C"', '^C');
      $patterns[] = array('Non-empty lowercase string', '^[a-z]+$');
      $patterns[] = array('Non-empty uppercase string', '^[A-Z]+$');
      $patterns[] = array('Minimum 10 letters Maximum 20 letters', '^[A-Za-z]{10,20}$');
      $patterns[] = array('Minimum 10 digits Maximum 20 digits', '^[0-9]{10,20}$');
      $patterns[] = array('Minimum 10 characters Maximum 20 characters', '^.{10,20}$');
      $patterns[] = array('Valid PHP variable name', '[a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*');
      $patterns[] = array('Valid PHP constant name', '[a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*');
      $patterns[] = array('Valid decimal (base-10) integer', '[1-9][0-9]*|0');
      $patterns[] = array('Valid float number', '^[+-]?((\.\d+)|(\d+(\.\d+)?))$');
      $patterns[] = array('5-letter string', '^[A-Za-z]{5}$');
      $patterns[] = array('5-digit string', '^[0-9]{5}$');
      $patterns[] = array('5 ascii characters', '^[\x00-\x7F]{5}$');
      $patterns[] = array('5 non-alphanumeric characters', '[^a-zA-Z\d\s:]{5}');
      $patterns[] = array('Passing Grade (1.00,1.25,1.50 to 3.00)', '(^((\(?[1,2]{1}\)?)\.?((25)|(50)|(5)|(75)|(0)|(00)))$)|(^((\(?[3]{1}\)?)\.?((0)|(00)))$)');
      $patterns[] = array('Sub-domain Name (Ex. .edu or .ue.edu or .ccss.ue.edu)', '^(\.\w+)+$');

      echo '<form method="post">';
      $i=1;
      echo '<table border=1>';
      echo '<tr><th colspan=5 align=center>Regular Expression Test</th></tr>';
      echo '<tr><th>No.</th><th>Description</th><th>String</th><th>RegEx Pattern</th><th>Result</th>';
      foreach ($patterns as $pattern_item) {
        $description = $pattern_item[0];
        $pattern = $pattern_item[1];
        $value = isset($_POST["field$i"]) ? $_POST["field$i"] : '';
        if ($pattern == '') {
          $result = 'Missing pattern';
          $pattern = '&nbsp;';
        }
        else {
          $pattern = '/' . $pattern . '/';
          if (preg_match($pattern, $value))
            $result = 'Valid';
          else
            $result = 'Invalid';
        }
        echo "<tr>";
        echo "<td>$i.</td><td>$description</td>";
        echo "<td><input type=text name=\"field$i\" value=\"$value\"></td>";
        echo "<td>$pattern</td><td>$result</td>";
        echo '<tr>';
        $i++;
      }
      echo '</table><br />';
      echo '<input type="submit" name="validate" value="Validate Data">&nbsp';
      echo '<input type="reset" value="Reset">&nbsp';
      echo '</form>';
      ?>
    </div>
  </div>

  <div class="footer">
    <h5><?php echo '&copy; ', date('Y'), ' ', "WebDevScrims", ' :: Rundate ', date('m/d/Y'); ?></h5>
  </div>

</body>
</html>