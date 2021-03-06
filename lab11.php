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
  define('LABTITLE', 'Lab Activity No. 11');
  define('DESCRIPTION', 'Managing State Information Using Session – Login Page');

  session_start();

  function generate_textbox($name, $value) {
    return '<input type="text" name="' . $name . '" value="' . $value . '">';
  }
  function generate_password($name, $value) {
    return '<input type="password" name="' . $name . '" value="' . $value . '">';
  }
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
        echo '<form method="post">';
          if (isset($_POST['login']) > 0) // login button is clicked
            process_form();
          elseif (isset($_POST['logout'])) // logout button is clicked
            process_logout();
          elseif (isset($_SESSION['username'])) // check if user is   logged in
            generate_welcomepage();
          else
            generate_loginform(); // display login form
        echo '</form>';
        
        function generate_loginform() {
          $username = '';
          $password = '';
          echo '<form method = "post">';
            echo '<table>';
              // Item 1. print a textbox field (name="username")
              echo '<tr><td>Username</td><td>',
                generate_textbox('username', $username),
              '</td></tr>';
              // Item 2. print a password field (name="password")
              echo '<tr><td>Password</td><td>',
                generate_password('password', $password);
              '</td></tr>';
              // Item 3. print a submit button (name="login" value="Login")
              echo '<tr><td colspan=2>';
                echo '<input type="submit" name="login" value="Login">&nbsp;';
              echo '</td></tr>';
            echo '</table>';
          echo '</form>';
        }

        function process_form() {
          // Item 4. Assign $_POST['username'] to $username
          $username = isset($_POST['username']) ? $_POST['username'] : '';
          // Item 5. Assign $_POST['password'] to $password
          $password = isset($_POST['password']) ? $_POST['password'] : '';
          if ((trim($username) != '') && ($password == '12345')) {
            // Item 6. store $username to $_SESSION['username']
            $_SESSION['username'] = $username;
            // Item 7. store $password to $_SESSION['password']
            $_SESSION['password'] = $password;
            // Item 8. call the function generate_welcomepage()
            generate_welcomepage();
          }
          else {
            // Item 9. call the function generate_loginerror()
            generate_loginerror();
            // Item 10. call the function generate_loginform()
            echo '<form method = "post">';
              echo '<br><input type="submit" name="confirm" value="Okay">';
              if(isset($_POST['confirm']) > 0) {
                generate_loginform();
              }
            echo '</form>';
          }
          }
          function generate_loginerror() {
            // Item 11. print a message "Login Failed"
            echo 'Login Failed. Please Try Again.';
          }
          function process_logout() {
            if (isset($_SESSION['username']))
            echo '<strong>Logout Successful</strong>';
            // Item 12. call the function that destroys the session
            session_destroy();
            // Item 13. call the function generate_loginform()
            echo '<form method = "post">';
              echo '<br><input type="submit" name="confirm" value="Okay">';
              if(isset($_POST['confirm']) > 0) {
                generate_loginform();
              }
            echo '</form>';
          }
          function generate_welcomepage() {
            $username = $_SESSION['username'];
            // Item 14. print a welcome back message with username
            echo 'Welcome, ', $username, '!';
            // Item 15. print a <p>Lorem Ipsum</p> paragraph
            echo '<p>Lorem Ipsum</p>';
            // Item 16. print a submit button (name="logout" value="Logout")
            echo '<input type="submit" name="logout" value="Logout">';
          }
      ?>
    </div>
  </div>

  <div class="footer">
    <h5><?php echo '&copy; ', date('Y'), ' ', "WebDevScrims", ' :: Rundate ', date('m/d/Y'); ?></h5>
  </div>

</body>
</html>