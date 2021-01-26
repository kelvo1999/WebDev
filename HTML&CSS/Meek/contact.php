<!DOCTYPE html>
<html>
 
<head>
    <style>
        * {
            box-sizing: border-box;
        }
        /* Style inputs */
        
        input[type=text],
        select,
        textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }
        
        input[type=submit] {
            background-color: burlywood;
            color: white;
            padding: 12px 20px;
            border: none;
            cursor: pointer;
        }
        
        input[type=submit]:hover {
            background-color: brown;
        }
        /* Style the container/contact section */
        
        .container {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 10px;
        }
        /* Create two columns that float next to eachother */
        
        .column {
            float: left;
            width: 50%;
            margin-top: 6px;
            padding: 20px;
        }
        /* Clear floats after the columns */
        
        .row:after {
            content: "";
            display: table;
            clear: both;
        }
        /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
        
        @media screen and (max-width: 600px) {
            .column,
            input[type=submit] {
                width: 100%;
                margin-top: 0;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div style="text-align:center">
            <h2>Contact Us</h2>
            <p>Leave us a message:</p>
        </div>
        <div class="row">
            <div class="column">
                <img src="c3.jpg" style="width:100%">
            </div>
            <div class="column">
                <form action="/action_page.php">
                    <label for="fname">First Name</label>
                    <input type="text" id="fname" name="firstname" placeholder="Your name..">
                    <label for="lname">Last Name</label>
                    <input type="text" id="lname" name="lastname" placeholder="Your last name..">
                    <label for="country">Location</label>
                    <select id="location" name="location">
                        <option value="Drop down">Pick Location</option>
            <option value="Khoja">Khoja</option>
            <option value="Chaani">Chaani</option>
            <option value="Makupa">Makupa</option>
            <option value="Langata">Langata</option>
            <option value="Ongata">Ongata</option>
            <option value="Westlands">Westlands</option>
            <option value="Mvita">Mvita</option>
            <option value="Austa">Austa</option>
            <option value="Docks">Docks</option>
          </select>
                    <label for="subject">Subject</label>
                    <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
                    <input type="submit" value="Submit">
                </form>
            </div>
        </div>
    </div>
</body>

</html>