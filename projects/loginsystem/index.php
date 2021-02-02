 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criminal Reporting System </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <div class="topbar">
            <div id="logo">
                <img src="./img/cuff.png">
                <h1><span class="highlight">Report </span>Crimes</h1>
                <ul>
                    <li id="first"><a href="report.php">Report Criminal Content</a><i class="fa fa-angle-right"></i></li>

                    <li id="second"><a href="support.php">Support</a><i class="fa fa-angle-right"></i></li>
                </ul>
            </div>
        </div>

        <div class="menubar">
            <ul>
                <li><a href="aboutus.php">About us</a></li>
                <li><a href="contact.php">Contact us</a></li>
                <li><a href="services.php">Our services</a></li>
                <li><i class="fa fa-user"></i><a href="login1.php">LOGIN<i class="fa fa-angle-down"></i></a>
                    <ul>
                        <li><a href="login.php">LOGIN</a></li>
                    </ul>
                </li>
                <form class="example" action="/action_page.php" style="margin:auto;max-width:300px;color:brown;">
                    <input type="text" placeholder="Search.." name="search">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </ul>
        </div>
    </header>

    <div class="main-menu">
        <img src="img/fingerprint.png">
        <div class="content">
            <p>You can easily report any crime <br/>and we will reach out to you asap</p>
            <h2><a href="report.php"> Report Criminal Content</a><i class="fa fa-angle-right"></i></h2>
        </div>
    </div>

    <div class="container">
        <h3>With the help of your reports victims are rescued</h3>
        <div class="sector">
            <h4>Report any form of crime</h4>
                Personal crime
                    <p>Personal crimes are crimes that are perpetrated against an individual. These can include assault, battery, false imprisonment, kidnapping, homicide, and rape. Homicide also covers a range of categories, which include first degree murder,
                        second degree murder, involuntary manslaughter, and vehicular homicide.</p>
                Property crime
                    <p>Property crime is a category of crime, usually involving private property, that includes, among other crimes, burglary, larceny, theft, motor vehicle theft, arson, shoplifting, and vandalism. Property crime is a crime to obtain money,
                        property, or some other benefit.</p>
                Statutory crime
                    <p>Statutory crimes are violations of specific state or federal statutes. They may involve either property offenses or personal offenses. An example of this would be alcohol related crimes, such as DUI or selling alcohol to a minor.</p>
                Inchoate crime
                    <p>An inchoate offense, preliminary crime, inchoate crime or incomplete crime is a crime of preparing for or seeking to commit another crime. The most common example of an inchoate offense is "attempt".</p>
                Financial crime
                    <p>Financial crime is defined as crime that is specifically committed against property. These crimes are almost always committed for the personal benefit of the criminal, and they involve an illegal conversion of ownership of the property
                        that is involved.</p>
        </div>
        <div class="sector1">
            <h5>How we sort out crimes</h5>
            <ul>
                <li>Contact police</li>
                <img src="img/police.jpg">
                <li id="first"><a href="report.html">Report Criminal Content</a><i class="fa fa-angle-right"></i></li>

                <p>Need a lawyer</p>
                <img src="img/lawyer.jpg">
                    
            </ul>
            <p>Find our Law courts below</p>
            <img src="img/gavel.jpg">
            <p>Know your rights!!</p>
        </div>
        <div class="sector2">
            <h6>Our Annual report and samples of various crime scenes</h6>
            <img src="img/india.jpg">
            <div class="input-group">
                <button type="submit" name="submit" class="btn1">ACCESS OUR PODCASTS</button>
            </div>
            <div class="input-group">
                <button type="submit" name="submit" class="btn2">READ OUR ANNUAL REPORTS</button>
            </div>
        </div>
    </div>


    <footer>
        <div>
            <form method="POST">
                <div class="newsletter">
                    <h4>Sign up to our newsletter</h4>
                    <div class="input-group">
                        <label>YOUR NAME</label>
                        <input type="text" name="newName">

                    </div>
                    <div class="input-group">
                        <label>YOUR EMAIL</label>
                        <input type="text" name="newEmail">
                    </div>
                    <div class="input-group">
                        <button type="submit" name="submit" class="btn">SUBSCRIBE</button>
                    </div>
                    <p>You can unsubscribe at any time using the link at the bottom of newsletter emails or you can contact us directly </P>
                </div>
            </form>
                <!-----------THIS IS THE PHP PART WHICH FEEDS USER DATA TO THE DB____------->
                <?php
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $db = "crimes";
                    //Initializing newsletter data
                    $newName = " ";
                    $newEmail = " ";


                    //creating connection
                    $conn = new mysqli($servername, $username, $password, $db);
                    // To Check Connection
                    if ($conn->connect_error){
                        die("Connection failed: " . $conn->connect_error);
                    }
                    //converting html input data to php variables
                    if(isset($_POST['submit'])){
                        $newName = $_POST['newName'];
                        $newEmail = $_POST['newEmail'];

                    //ensuring that data is valid....error handling logic gate
                    if(empty($newName)){
                        echo '<script>alert("A Name is required")</script>';
                    }
                    else if(empty($newEmail)){
                        echo '<script>alert("Email is required")</script>';
                    }
                    //If data is clean then we feed it to the DB
                    else{
                        $sql = "INSERT INTO newsletter(newName, newEmail)
                                VALUES('$newName', $newEmail)";
                    
                    //Feedback if data has been inserted
                        if($conn->query($sql) === TRUE){
                            echo '<script>alert("Your details have23 been captured. We will keep you updated on news and reports.")</script>';
                        }
                        else{
                            echo '<script>alert("Error: Information was not captured well. Try again later")</script>';
                            
                        }
                    }
                    }
                ?>
       </div>

        <div class="part2">
            <ul>
                <li><a href="meek.html">ACCESSISIBILITY</a></li>
                <li><a href="meek.html">SITEMAP</a></li>
                <li><a href="meek.html">PRIVACY NOTICE</a></li>
                <li><a href="meek.html">TERMS OF USE</a></li>
            </ul>

            <div class="fonts">
                <ul>
                    <li><i class="fa fa-twitter"></i></li>
                    <li><i class="fa fa-linkedin"></i></li>
                    <li><i class="fa fa-facebook-official"></i></li>
                    <li><i class="fa fa-instagram"></i></li>
                    <li><i class="fa fa-youtube-play"></i></li>
                </ul>
            </div>
        </div>    
        
    </footer>
    <div class="admin panel">
        <a href="admin.html">ADMIN PANEL</a>
    </div>

    <script src="app.js"></script>


</body>

</html>