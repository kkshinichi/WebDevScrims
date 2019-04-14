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
  define('LABTITLE', 'Lab Activity No. 4');
  define('DESCRIPTION', 'Functions and Control Structures – Number to Words');
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
      // CONTENT SECTION
      $number = (int)(isset($_POST['number']) ? $_POST['number'] : 0);
      if (($number < 1) or ($number > 999)) {
        if (count($_POST) > 0) {
        $words = 'Sorry, I can process 1 to 999 only!';
      }
      else {
        $words = '&nbsp;';
        }
      }
      else {
      $words = $number . ' in words is ' . NumberToWords($number);
      }
      echo '<form action="" method="post">';
        echo '<table cellpadding=4 border=1 style="border-collapse:collapse">';
          echo '<tr><td align="center"><strong>Number to Words</strong></td></tr>';
          echo '<tr><td>Enter a number (1-999)&nbsp;<input type=text name=number>&nbsp;';
          echo '<input type="submit" value="Convert to words"></td></tr>';
          echo '<tr><td align="center"><strong>', $words, '</strong></td></tr>';
        echo '</table>';
      echo '</form>';
      function NumberToWords($number) {
        $words = '';
        $hundreds = floor($number / 100);
        $tens = floor($number % 100);
        $ones = floor($tens % 10);

        # Hundreds
        switch ($hundreds) {
          case '1':
            $hundredw = 'One Hundred';
            break;
          case '2':
            $hundredw = 'Two Hundred';
            break;
          case '3':
            $hundredw = 'Three Hundred';
            break;
          case '4':
            $hundredw = 'Four Hundred';
            break;
          case '5':
            $hundredw = 'Five Hundred';
            break;
          case '6':
            $hundredw = 'Six Hundred';
            break;
          case '7':
            $hundredw = 'Seven Hundred';
            break;
          case '8':
            $hundredw = 'Eight Hundred';
            break;
          case '9':
            $hundredw = 'Nine Hundred';
            break;
          default:
            $hundredw = '';
            break;
        }
        
        # Tens and Ones
        if($tens >= 10 && $tens <=19) {
          switch ($tens) {
            case '10':
              $tenw = 'Ten';
              break;
            case '11':
              $tenw = 'Eleven';
              break;
            case '12':
              $tenw = 'Twelve';
              break;
            case '13':
              $tenw = 'Thirteen';
              break;
            case '14':
              $tenw = 'Fourteen';
              break;
            case '15':
              $tenw = 'Fifteen';
              break;
            case '16':
              $tenw = 'Sixteen';
              break;
            case '17':
              $tenw = 'Seventeen';
              break;
            case '18':
              $tenw = 'Eighteen';
              break;
            case '19':
              $tenw = 'Nineteen';
            default:
              $tenw = '';
              break;
          }
          $words = $hundredw . ' ' . $tenw;
        }
        else {
          $tens = floor($tens / 10);
          switch ($tens) {
            case '2':
              $tenw = 'Twenty';
              break;
            case '3':
              $tenw = 'Thirty';
              break;
            case '4':
              $tenw = 'Forty';
              break;
            case '5':
              $tenw = 'Fifty';
              break;
            case '6':
              $tenw = 'Sixty';
              break;
            case '7':
              $tenw = 'Seventy';
              break;
            case '8':
              $tenw = 'Eighty';
              break;
            case '9':
              $tenw = 'Ninety';
              break;
            default:
              $tenw = '';
              break;
          }
          # Ones
          switch ($ones) {
            case '1':
              $onew = 'One';
              break;
            case '2':
              $onew = 'Two';
              break;
            case '3':
              $onew = 'Three';
              break;
            case '4':
              $onew = 'Four';
              break;
            case '5':
              $onew = 'Five';
              break;
            case '6':
              $onew = 'Six';
              break;
            case '7':
              $onew = 'Seven';
              break;
            case '8':
              $onew = 'Eight';
              break;
            case '9':
              $onew = 'Nine';
              break;
            default:
              $onew = '';
              break;
          }
          $words = $hundredw . ' ' . $tenw . ' ' . $onew;
        }
        return $words;
      }
    ?>
    </div>
  </div>

  <div class="footer">
    <h5><?php echo '&copy; ', date('Y'), ' ', "WebDevScrims", ' :: Rundate ', date('m/d/Y'); ?></h5>
  </div>

</body>
</html>
