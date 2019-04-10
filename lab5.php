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
  define('LABTITLE', 'Lab Activity No. 5');
  define('DESCRIPTION', 'Functions and Control Structures – Magic Square');
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

    <!-- Content Section -->
    <div class="rightcolumn">
    <?php
      // CONTENT SECTION
      echo '<form action="" method="post">';
      echo '<table cellpadding=4 border=1 style="border-collapse:collapse">';
      echo '<tr><td align="center"><strong>Magic Square</strong></td></tr>';
      echo '<tr><td>Enter an odd number &nbsp;<input type=text name=number>&nbsp;';
      echo '<input type="submit" value="Generate Magic Square"></td></tr>';
      echo '</table>';
      echo '</form>';
      if (count($_POST) > 0) {
        $number = (int)(isset($_POST['number']) ? $_POST['number'] : 3);
        if ($number % 2 == 1){
          print_magicsquare($number);
        }
        else {
          echo "<br>" . $number . " is an even number.";
        }
      }
      function print_magicsquare($number) {
        // set all slots to 0
        $magicSquare;
        for ($i = 0; $i < $number; $i++) 
          for ($j = 0; $j < $number; $j++) 
            $magicSquare[$i][$j] = 0; 
  
        // Initialize position for 1 
        $i = (int)$number / 2; 
        $j = $number - 1; 
      
        // One by one put all values in magic square 
        for ($num = 1; $num <= $number * $number; ) {
          // 3rd condition 
          if ($i == - 1 && $j == $number) { 
              $j = $number-2; 
              $i = 0; 
          } 
          else {
            // 1st condition helper if next number goes to out of square's right side 
            if ($j == $number) 
              $j = 0; 
  
            // 1st condition helper if next number is goes to out of square's upper side 
            if ($i < 0) 
              $i = $number-1; 
          }

          // 2nd condition 
          if ($magicSquare[$i][$j]) { 
            $j -= 2; 
            $i++; 
            continue; 
          } 
          else {
            // set number 
            $magicSquare[$i][$j] = $num++;
          }  
  
          // 1st condition 
          $j++; $i--;  
        }

        // Print Magic Square
        echo "<br>Sum of each row or column "
        . $number * ($number * $number + 1) / 2; 
            
        echo "<br><br>";
        echo "<table id = 'result' border=1>"; 
        echo "<tr><th colspan=" . $number . ">" .$number . " by " . $number . " Magic Square</th></tr>";
        for ($i = 0; $i < $number; $i++) { 
          echo '<tr>';
          for ($j = 0; $j < $number; $j++) 
              echo '<td>' . $magicSquare[$i][$j] . "</td>"; 
          echo "</tr>"; 
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
