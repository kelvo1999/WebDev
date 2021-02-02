<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>report incidence</title>
    <link rel="stylesheet" href="report.css">
</head>

<body>

    <div class="topbar">
        <div id="logo">
            <img src="./img/cuff.png">
            <h1><span class="highlight">Report </span>Crimes</h1>
        </div>
    </div>

    <div style="float: right;">
    <p>
        <a href="reset.php" class="btn btn-warning" style="background-color: gray;color: white;padding: 12px 20px;border: none;border-radius: 4px;cursor: pointer;text-decoration: none;">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger" style="background-color: gray;color: white;padding: 10px 20px;border: none;border-radius: 4px;cursor: pointer;text-decoration: none;">Log out</a>
    </p>
</div><br>


    <div class="container">
        <div class="top">
            <h1>Report incidence</h1>
            <p>Incident Reporting Form</p>
        </div>
        <form action="/action_page.php" onsubmit="myFunction()">
            <div class="input-group">
                <select id="Station Selection" name="stationName">
                    <option value="1">Select Station to report the case</option>
                    <option value="2">Makupa</option>
                    <option value="3">Chaani</option>
                    <option value="4">Ongata</option>
                    <option value="5">Langata Baracks</option>
                    <option value="6">Westlands</option>
                    <option value="7">Docks</option>
                </select>

            </div>
            <div class="input-group">
                <select id="Case category" name="caseCategory">
                    <option value="1">Select Case Category</option>
                    <option value="2">Theft</option>
                    <option value="3">Wanted</option>
                    <option value="4">Assault</option>
                    <option value="5">Robbery</option>
                    <option value="6">Domestic Violence/Rape</option>
                    <option value="7">Miscallenous</option>
                </select>

            </div>

            <div class="input-group">
                <label>Date:</label>
                <input type="date" name="casDate">
            </div>
            <div class="input-group">
                <label>Time:</label>
                <input type="time" name="caseTime">
            </div>
            <div class=input-group>
                <label>Male</label><br/>
                <input type="radio" name="victimGender" value="male">
                <label>Female</label>
                <input type="radio" name="victimGender" value="female">
            </div>
            <div class="input-group">
                <label>Brief Description About The Incident</label>
                <textarea type="text" name="caseDescription" class="describe" rows="10" cols="54"></textarea>
            </div>
            <div class="input-group">
                <button type="submit" name="submit" class="btn"><a href="mailto:morahvalerianne@gmail.com?cc=meekkaran2000@gmail.com &subject=Crime Reporting System 
                ">SUBMIT</a></button>
            </div>
        </form>
        
        <script>
            function myFunction() {
                alert("Your case has been recorded and submitted successfully");
            }
        </script>
    </div>













    


</body>

</html>