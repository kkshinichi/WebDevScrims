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
  define('LABTITLE', 'Lab Activity No. 9');
  define('DESCRIPTION', 'Handling User Input – User Registration');
?>

<?php
  function generate_textbox($name, $value) {
    return '<input type="text" name="' . $name . '" value="' . $value . '">';
  }
  function generate_password($name, $value) {
    return '<input type="password" name="' . $name . '" value="' . $value . '">';
  }
  function generate_textarea($name, $value) {
    return '<textarea name="' . $name . '">' . $value . '</textarea>';
  }
  function generate_checkbox($name) {
    return '<input type="checkbox" name="' . $name . '">';
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
      if(isset($_POST['btnRegister']) > 0)
        process_form();
      else
        start_page();

      function start_page() {
        $lastname = '';
        $firstname = '';
        $middlename = ''; 
        $emailaddress = '';
        $username = '';
        $password = '';
        $confirmpassword = '';
        $comments = '';
        $agree = '';

        echo '<form method="post" action="lab9.php">';
          echo '<table>';
            echo '<tr><td colspan=2><strong>Lab 9 - Form Processing (User Registration)</td></tr>';
            // **************************************************************
            // Item 10 to 18, generate html form elements using the functions
            // declared in No. 4. Item 10 is already given
            // **************************************************************
            // Item 10: Generate lastname textbox
            echo '<tr><td>Last Name</td><td>',
              generate_textbox('txtLastname', $lastname),
            '</td></tr>';
            // ??? Item 11: generate firstname textbox
            echo '<tr><td>First Name</td><td>',
              generate_textbox('txtFirstname', $firstname),
            '</td></tr>';
            // ??? Item 12: generate middlename textbox
            echo '<tr><td>Middle Name</td><td>',
              generate_textbox('txtMiddlename', $middlename),
            '</td></tr>';
            // ??? Item 13: generate emailaddress textbox
            echo '<tr><td>Email Address</td><td>',
              generate_textbox('txtEmailaddress', $emailaddress),
            '</td></tr>';
            // ??? Item 14: generate username textbox
            echo '<tr><td>Username</td><td>',
              generate_textbox('txtusername', $username),
            '</td></tr>';
            // ??? Item 15: generate password textbox
            echo '<tr><td>Password</td><td>',
              generate_password('txtpassword', $password),
            '</td></tr>';
            // ??? Item 16: generate confirm password textbox
            echo '<tr><td>Confirm Password</td><td>',
              generate_password('txtconfpass', $confirmpassword),
            '</td></tr>';
            // ??? Item 17: generate comments textarea
            echo '<tr><td>Comments</td><td>',
              generate_textarea('txtcomments', $comments),
            '</td></tr>';
            // ??? Item 18: generate agree checkbox
            echo '<tr><td>Agree</td><td>',
              generate_checkbox('chkagree', $agree),
            '</td></tr>';

            echo '<tr><td colspan=2>';
              echo '<input type="submit" name="btnRegister" value="Register">&nbsp;';
              echo '<input type="reset" name="btnReset" value="Reset">&nbsp;';
            echo '</td></tr>';
          echo '</table>';
        echo '</form>';
      }

      function process_form() {
        /* *********************************************************
        *  Items 1 to 9, get form data and assign to local variable
        *  *********************************************************/
  
        // Item 1: Get lastname form data
        $lastname = isset($_POST['txtLastname']) ? $_POST['txtLastname'] : '';
        // Item 2: get firstname textfield form data
        $firstname = isset($_POST['txtFirstname']) ? $_POST['txtFirstname'] : '';
        // Item 3: get middlename textfield form data
        $middlename = isset($_POST['txtMiddlename']) ? $_POST['txtMiddlename'] : ''; 
        // Item 4: get emailaddress textfield form data
        $emailaddress = isset($_POST['txtEmailaddress']) ? $_POST['txtEmailaddress'] : '';
        // Item 5: get username textfield form data
        $username = isset($_POST['txtusername']) ? $_POST['txtusername'] : '';
        // Item 6: get password form data
        $password = isset($_POST['txtpassword']) ? $_POST['txtpassword'] : '';;
        // Item 7: get confirmpassword textfield form data
        $confirmpassword = isset($_POST['txtconfpass']) ? $_POST['txtconfpass'] : '';
        // Item 8: get comments textarea form data
        $comments = isset($_POST['txtcomments']) ? $_POST['txtcomments'] : '';;
        // item 9: get agree checkbox form data
        $agree = isset($_POST['chkagree']) ? $_POST['chkagree'] : '';
        if($password!=$confirmpassword) {
          echo 'Passwords do not match. Please try again.';
          echo '<form method = "post">';
            echo '<br><input type="submit" name="confirm" value="Okay">';
            if(isset($_POST['confirm']) > 0) {
              start_page();
            }
          echo '</form>';
        }
        else if($agree!="on") {
          echo 'You must agree to the terms of service. Please try again.';
          echo '<form method = "post">';
            echo '<br><input type="submit" name="confirm" value="Okay">';
            if(isset($_POST['confirm']) > 0) {
              start_page();
            }
          echo '</form>';
        }
        else {
          echo '<table>';
            echo '<tr><td colspan=2><strong>Lab 9 - Form Processing (User
          Registration)</td></tr>';
            echo '<tr><td colspan=2 align=center><strong>FORM SUBMITTED</td></tr>';
          // ****************************************************************
          // For items 20 to 28, display submitted form data inside <td></td>
          // Item 20 already given
          // ****************************************************************
          // Item 20: display lastname data
          echo '<tr><td>Last Name</td><td>', $lastname, '</td></tr>';
          // ??? Item 21: display firstname textbox (refer to code above)
          echo '<tr><td>First Name</td><td>', $firstname, '</td></tr>';
          // ??? Item 22: display middlename textbox
          echo '<tr><td>Middle Name</td><td>', $middlename, '</td></tr>';
          // ??? Item 23: display emailaddress textbox
          echo '<tr><td>Email Address</td><td>', $emailaddress, '</td></tr>';
          // ??? Item 24: display username textbox
          echo '<tr><td>Username</td><td>', $username, '</td></tr>';
          // ??? Item 25: display password textbox
          echo '<tr><td>Password</td><td>', str_repeat('*',strlen($password)), '</td></tr>';
          // ??? Item 26: display confirm password textbox
          echo '<tr><td>Confirm Password</td><td>', str_repeat('*',strlen($confirmpassword)), '</td></tr>';
          // ??? Item 27: display comments textarea
          echo '<tr><td>Comments</td><td>', $comments, '</td></tr>';
          // ??? Item 28: display agree checkbox
          echo '<tr><td>Agreed?</td><td>I agree to the terms.</td></tr>';
          echo '</table>';
          echo '<form method = "post">';
            echo '<br><input type="submit" name="confirm" value="Okay">';
            if(isset($_POST['confirm']) > 0) {
              start_page();
            }
          echo '</form>';
        }
      }
    ?>
    </div>
  </div>

  <div class="footer">
    <h5><?php echo '&copy; ', date('Y'), ' ', NAME, ' :: Rundate ', date('m/d/Y'); ?></h5>
  </div>

</body>
</html>