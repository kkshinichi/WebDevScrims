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
  define('LABTITLE', 'Lab Activity No. 13');
  define('DESCRIPTION', 'Sending Email');

  session_start();

  function generate_textbox($name, $value) {
    return '<input type="text" name="' . $name . '" value="' . $value . '">';
  }
  function generate_textarea($name, $value) {
    return '<textarea name="' . $name . '">' . $value . '</textarea>';
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
        $from = isset($_POST['txtFrom']) ? $_POST['txtFrom'] : '';
        $password = isset($_POST['txtPassword']) ? $_POST['txtPassword'] : '';
        $to = isset($_POST['txtTo']) ? $_POST['txtTo'] : '';
        $subject = isset($_POST['txtSubject']) ? $_POST['txtSubject'] : '';
        $message = isset($_POST['txtMessage']) ? $_POST['txtMessage'] : '';

        // MAIL SETTINGS

        require 'PHPMailer/PHPMailerAutoload.php';

        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPAuth= true;
        $mail->SMTPSecure="tsl";
        $mail->Host='smtp.gmail.com';
        $mail->Port=587;
        $mail->isHTML(true);
        $mail->Username=$from;
        $mail->Password =$password;	

        $mail->setFrom=$from;
        $mail->addAddress($to);

        $mail->Subject =  $subject;
        $mail->Body = $message;
        $mail->Send();

        if(count($_POST) == 0) {
          echo '<form method="post"><table>';
            echo '<tr><td>From: </td><td>',
              generate_textbox('txtFrom',$from),
            '</td></tr>';
            echo '<tr><td>Password: </td><td>',
              generate_password('txtPassword',$password),
            '</td></tr>';
            echo '<tr><td>To: </td><td>',
              generate_textbox('txtTo',$to),
            '</td></tr>';
            echo '<tr><td>Subject: </td><td>',
              generate_textbox('txtSubject',$subject),
            '</td></tr>';
            echo '<tr><td>Message: </td><td>',
              generate_textarea('txtMessage',$message),
            '</td></tr>';
            echo '<tr><td colspan=2><input type="submit" name="btnSend" value="Send"></td></tr>';
          echo '</table></form>';
        }
        else {
          if(!$mail->send()) {
            echo 'Message could not be sent.<br>';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
          }
          else {
            echo 'Message has been sent';
          }
        }
      ?>
    </div>
  </div>

  <div class="footer">
    <h5><?php echo '&copy; ', date('Y'), ' ', "WebDevScrims", ' :: Rundate ', date('m/d/Y'); ?></h5>
  </div>

</body>
</html>