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
  define('LABTITLE', 'Lab Activity No. 10');
  define('DESCRIPTION', 'Handling User Input – Dynamic Page');
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
        $links['lab10_home.php'] = 'Home';
        $links['lab10_vision.php'] = 'Vision';
        $links['lab10_mission.php'] = 'Mission';
        $links['lab10_history.php'] = 'History';
        echo '<table width=100% border=1>';
        // navigation section
        echo '<tr><td>';
        foreach ($links as $key => $value)
          echo '&nbsp;<a href="?page=', $key, '"> ', $value, ' </a>&nbsp;';
        echo '</td></tr>';
        // dynamic content
        echo '<tr><td><br />';
        if ( isset($_GET['page']) ) {
          $page = $_GET['page'];
          if (is_readable($page))
            include_once($page);
          else
            echo 'File <strong>', $page, '</strong> not found!';
        }
        else {
          reset($links);
          include_once(key($links));
        }
        echo '<br /><br />';
        echo '</td></tr>';
        echo '</table>';
      ?>
    </div>
  </div>

  <div class="footer">
    <h5><?php echo '&copy; ', date('Y'), ' ', "WebDevScrims", ' :: Rundate ', date('m/d/Y'); ?></h5>
  </div>


</body>
</html>