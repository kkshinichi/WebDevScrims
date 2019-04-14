<!DOCTYPE html>
<html>

<?php
    define('NAME','<p1 id="name">GELLYNE G. ABORDO</p1>');
    define('STUDENTNUMBER', '<p2>2015-03065-MN-0</p2>');
    define('ADDRESS','<p3>Sta. Rosa, Laguna</p3>');
    define('EMAILADDRESS','<p4 id="emailaddress">gellyneabordo@gmail.com</p4>');
    define('CONTACTNUMBER','<p5>+639157507428</p5>');
    define('WEBADDRESS','N/A');

    define('NAME1','<p1 id="name1">ALLEN JED P. LOMIBAO</p1>');
    define('STUDENTNUMBER1', '<p2>2015-01896-MN-0</p2>');
    define('ADDRESS1','<p3>Sta. Mesa Manila</p3>');
    define('EMAILADDRESS1','<p4 id="emailaddress1">ajpl_1999@yahoo.com</p4>');
    define('CONTACTNUMBER1','<p5>+639338784619</p>');
    define('WEBADDRESS1','N/A');

    define('NAME2','<p1 id="name2">EDRIAN CHARLES M. MAHAGUAY</p1>');
    define('STUDENTNUMBER2', '<p2>2015-14697-MN-0</p2>');
    define('ADDRESS2','<p3>Pasig City</p3>');
    define('EMAILADDRESS2','<p4 id="emailaddress2">charlesmahaguay1@gmail.com</p4>');
    define('CONTACTNUMBER2','<p5>+639672851594</p5>');
    define('WEBADDRESS2','N/A');

    define('NAME3','<p1 id="name3">THEO LEONARD P. TEJADA</p1>');
    define('STUDENTNUMBER3', '<p2>2015-01331-MN-0</p2>');
    define('ADDRESS3','<p3>Navotas City</p3>');
    define('EMAILADDRESS3','<p4 id="emailaddress3">tlp.tejada@iskolarngbayan.pup.edu.ph</p4>');
    define('CONTACTNUMBER3','<p5>+639052895824</p5>');
    define('WEBADDRESS3','kkshinichi.me');
?>

<head>
    <title>Our Team</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css"href="OurTeam.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
</head>

<body> 
    <div class="container">
        <div class="box">
            <div class="icon"><i class="fa fa-info-circle" aria-hidden="true"></i></div>
            <div class="content">
                <?php
                    echo NAME,'<br>', STUDENTNUMBER, '<br>', ADDRESS, '<br>', EMAILADDRESS, '<br>', CONTACTNUMBER;
                ?>
            </div>
        </div>
        <div class="box">
            <div class="icon"><i class="fa fa-info-circle" aria-hidden="true"></i></div>
            <div class="content1">
                <?php
                    echo NAME1,'<br>', STUDENTNUMBER1, '<br>', ADDRESS1, '<br>', EMAILADDRESS1, '<br>', CONTACTNUMBER1;
                ?>
            </div>
        </div>
        <div class="box">
            <div class="icon"><i class="fa fa-info-circle" aria-hidden="true"></i></div>
            <div class="content2">
                <?php
                    echo NAME2,'<br>', STUDENTNUMBER2, '<br>', ADDRESS2, '<br>', EMAILADDRESS2, '<br>', CONTACTNUMBER2;
                ?>
            </div>
        </div>
        <div class="box">
            <div class="icon"><i class="fa fa-info-circle" aria-hidden="true"></i></div>
            <div class="content3">
                <?php
                    echo NAME3,'<br>', STUDENTNUMBER3, '<br>', ADDRESS3, '<br>', EMAILADDRESS3, '<br>', CONTACTNUMBER3;
                ?>
            </div>
        </div>
    </div>

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

    <div class="footer">
        <h5><?php echo '&copy; ', date('Y'), ' ', "WebDevScrims", ' ', ':: Rundate ', date('m/d/Y'); ?></h5>
    </div>  
</body>
</html>