<!DOCTYPE html>
<html>

<?php
  // Variables
  $school = "POLYTECHNIC UNIVERSITY OF THE PHILIPPINES";
  $course = "BSCpE";
  $yearlevel = "4th Year";
  $dateofbirth = "01/04/1999";
  $gender = "Male";
  // Constants
  define('NAME','THEO LEONARD P. TEJADA');
  define('STUDENT NUMBER', '2015-01331-MN-0');
  define('ADDRESS','Navotas City');
  define('EMAILADDRESS','tlp.tejada@iskolarngbayan.pup.edu.ph');
  define('CONTACTNUMBER','+639052895824');
  define('WEBADDRESS','kkshinichi.me');
  define('LABTITLE', 'Javascript Hands-on Activity No. 6');
  define('DESCRIPTION', "Credit Card Format Checker");
?>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo LABTITLE; ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="js2.css">
</head>

<body onload="main()">

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

    <div id="rightcolumn">
      <script>
         function main(){
          var name = prompt("Please Enter the Cardholder's Name:", "e.g. JUAN DELA CRUZ");
          var cardType = prompt("Please Enter the Card Provider:", "e.g. MasterCard; JCB");
          var cardNum = prompt("Please Enter the Card Number:", "e.g. XXXXXXXXXXXXXXXX");
          var exDate = prompt("Please Enter the Card Expiry Date:", "e.g. MM/YY");
          document.getElementById('name').innerHTML = "Cardholder's Name: " + name;
          document.getElementById('cardType').innerHTML = 'Credit Card Provider: ' + cardType;
          document.getElementById('cardNum').innerHTML = 'Credit Card Number: ' + cardNum;
          document.getElementById('exDate').innerHTML = 'Expiry Date: ' + exDate;
          
          var amex = /^(?:3[47][0-9]{13})$/;
          var visa = /^(?:4[0-9]{12}(?:[0-9]{3})?)$/;
          var mc = /^(?:5[1-5][0-9]{14})$/;
          var jcb = /^(?:(?:2131|1800|35\d{3})\d{11})$/;
          var expd = /^(0[1-9]|1[0-2])\/?([0-9]{4}|[0-9]{2})$/;
          var card = cardNum.toString();
          var expTest;

          switch(cardType) {
            case 'American Express':
            case 'Amex':
            case 'AMEX':
              var amexTest = amex.test(card);
              if(amexTest == true) {
                expTest = expd.test(exDate);
                if(expTest == true) {
                  document.getElementById('result').innerHTML = 'Congratulations! Your card is valid in terms of format.';
                }
                else {
                  document.getElementById('result').innerHTML = 'Invalid Expiry Date.';
                }
              }
              else {
                document.getElementById('result').innerHTML = 'Invalid Card Number';
              }
              break;
            case 'Visa':
            case 'VISA':
              var visaTest = visa.test(card);
              if(visaTest == true) {
                expTest = expd.test(exDate);
                if(expTest == true) {
                  document.getElementById('result').innerHTML = 'Congratulations! Your card is valid in terms of format.';
                }
                else {
                  document.getElementById('result').innerHTML = 'Invalid Expiry Date.';
                }
              }
              else {
                document.getElementById('result').innerHTML = 'Invalid Card Number';
              }
              break;
            case 'MasterCard':
            case 'MC':
              var mcTest = mc.test(card);
              if(mcTest == true) {
                expTest = expd.test(exDate);
                if(expTest == true) {
                  document.getElementById('result').innerHTML = 'Congratulations! Your card is valid in terms of format.';
                }
                else {
                  document.getElementById('result').innerHTML = 'Invalid Expiry Date.';
                }
              }
              else {
                document.getElementById('result').innerHTML = 'Invalid Card Number';
              }
              break;
            case 'JCB':
              var jcbTest = jcb.test(card);
              if(jcbTest == true) {
                expTest = expd.test(exDate);
                if(expTest == true) {
                  document.getElementById('result').innerHTML = 'Congratulations! Your card is valid in terms of format.';
                }
                else {
                  document.getElementById('result').innerHTML = 'Invalid Expiry Date.';
                }
              }
              else {
                document.getElementById('result').innerHTML = 'Invalid Card Number';
              }
              break;
            default:
              document.getElementById('result').innerHTML = 'Invalid Card Type';
          }
         }
      </script>
      <p><b>Credit Card Format Checker</b></p><br>
      <p id="name"></p>
      <p id="cardType"></p>
      <p id="cardNum"></p>
      <p id="exDate"></p><br>
      <p id="result"></p>
    </div>
  </div>

  <div class="footer">
    <h5><?php echo '&copy; ', date('Y'), ' ', "WebDevScrims", ' :: Rundate ', date('m/d/Y'); ?></h5>
  </div>

</body>
</html>
