<!DOCTYPE html>
<html>

<?php
  // Constants
  define('NAME','GELLYNE G. ABORDO');
  define('STUDENT NUMBER', '2015-03065-MN-0');
  define('ADDRESS','Sta. Rosa, Laguna');
  define('EMAILADDRESS','gellyneabordo@gmail.com');
  define('CONTACTNUMBER','+639157507428');
  define('WEBADDRESS','N/A');
  define('LABTITLE', 'Lab Activity No. 8');
  define('DESCRIPTION', 'Array Manipulations (Word Counter)');
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
        $text = (isset($_POST['text'])) ? $_POST['text'] : '';
        echo '<form method="post">';
        echo 'Enter text:<br />';
        echo '<textarea name="text" style="width:500px">';
        echo $text;
        echo '</textarea><br />';
        echo '<input type=submit value="Process">&nbsp;';
        echo '<input type=reset>&nbsp;';
        echo '</form>';

        $text = preg_replace('/[^a-zA-Z0-9 ]/','',trim($text));
        $colors[] = '#00CCFF';
  
        // No 1. Add at least 10 color values to array $colors
        $colors = array("crimson", "darkorange", "yellow", "seagreen", "cyan", "blue", "purple", "hotpink", "mistyrose", "gray");
        if ($text <> '') {
          // No. 2. Convert the $text to lowercase and assign to $text
          $text = strtolower(htmlspecialchars($text));
          // No. 3. Explode $text into array and assign to $allwords
          $allwords = explode(" ", $text);
          // No. 4. Remove duplicate items and assign to $uniquewordlist
          $uniquewordlist = array_unique($allwords);
          // No. 5. sort the array $uniquewordlist
          sort($uniquewordlist);
          // No. 6. Check the first element of $uniquewordlist if equal to space
          if ($uniquewordlist[0] == '') {
            // No. 7. Remove the first element from $uniquewordlist
            $deleteditem = array_shift($uniquewordlist);
          }

          foreach ($uniquewordlist as $word)
            $counter[$word] = 0;
            $totalwords = 0;

          foreach ($allwords as $word) {
            if ($word != '') {
              $counter[$word]++;
              $totalwords++;
            }
          }
          echo '<table border=1 style="width:500px">';
          echo '<tr><td colspan=4 align=center>Array Manipulation - Word Counter</td></tr>';
          echo '<tr><td>No.</td><td>Word</td><td>Frequency</td><td>Percent</td></tr>';
          $i=1;
      
          foreach ($uniquewordlist as $word) {
            // No. 8. Get the current element of array $colors (IAP function)
            $color = current($colors);
            $length = number_format($counter[$word] / $totalwords * 100.00,2);

            echo '<tr>';
            echo '<td>',$i, '.</td>';
            echo '<td>', $word, '</td>';
            echo '<td>', $counter[$word],'</td>';
            echo '<td style="background:',$color,'">',$length,'%</td>';
            echo '</tr>';
            // No. 9. Move the internal array pointer of $colors to next element
            next($colors);
            if (current($colors) == false) {
              // No. 10. Reset internal array pointer of $colors
              reset($colors);
            }
            $i++;
          }
          echo '</table>';
        }
      ?>
    </div>
  </div>

  <div class="footer">
    <h5><?php echo '&copy; ', date('Y'), ' ', "WebDevScrims", ' :: Rundate ', date('m/d/Y'); ?></h5>
  </div>

</body>
</html>
