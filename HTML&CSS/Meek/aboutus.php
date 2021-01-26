<!DOCTYPE html>
<html>
 
<head>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
        }
        
        html {
            box-sizing: border-box;
        }
        
        *,
        *:before,
        *:after {
            box-sizing: inherit;
        }
        
        .column {
            float: left;
            width: 33.3%;
            margin-bottom: 16px;
            padding: 0 8px;
        }
        
        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            margin: 8px;
        }
        
        .about-section {
            padding: 50px;
            text-align: center;
            background-color: #474e5d;
            color: white;
        }
        
        .container {
            padding: 0 16px;
        }
        
        .container::after,
        .row::after {
            content: "";
            clear: both;
            display: table;
        }
        
        .title {
            color: grey;
        }
        
        .button {
            border: none;
            outline: 0;
            display: inline-block;
            padding: 8px;
            color: white;
            background-color: #000;
            text-align: center;
            cursor: pointer;
            width: 100%;
        }
        
        .button:hover {
            background-color: #555;
        }
        
        @media screen and (max-width: 650px) {
            .column {
                width: 100%;
                display: block;
            }
        }
    </style>
</head>

<body>
    <div class="about-section">
        <h1>About Us Page</h1>
        <p>We are Meek and Val Computer Science Enthusiasts and We created this <b>Online Crime Reporting System</b> to be able to help victims to report their cases to responsible authorities in an easy,fast and efficient way.
        </p>

    </div>

    <h2 style="text-align:center">Our Team</h2>
    <div class="row">
        <div class="column">
            <div class="card">
                <img src="Meek.jpg" alt="Meek" style="width:100%">
                <div class="container">
                    <h2>Meek Karan</h2>
                    <p class="title">Team Member</p>
                    <p>We are one.</p>
                    <p>meekkaran2000@gmail.com</p>
                    <p><a href="mailto:meekkaran2000@gmail.com &subject=Crime Reporting System"><button class="button">Contact</button></a></p>
                </div>
            </div>
        </div>
        <div class="column">
            <div class="card">
                <img src="Verl.jpg" alt="Verl" style="width:100%">
                <div class="container">
                    <h2>Valerian M</h2>
                    <p class="title">Team Member</p>
                    <p>We are one.</p>
                    <p>morahvalerianne@gmail.com</p>
                    <p><a href="mailto:morahvalerianne@gmail.com &subject=Crime Reporting System"><button class="button">Contact</button></a></p>
                </div>
            </div>
        </div>
        <div class="column">
            <div class="card">
                <img src="team.jpg" alt="team" style="width:100%">
                <div class="container">
                    <h2>Team</h2>
                    <p class="title">Team Members</p>
                    <p>We are one.</p>
                    <p>morahvalerianne@gmail.com & meekkaran2000@gmail.com</p>
                    
                    <p><a href="mailto:morahvalerianne@gmail.com?cc=meekkaran2000@gmail.com &subject=Crime Reporting System"><button class="button">Contact</button></a></p>
                </div>
            </div>
        </div>
</body>

</html>