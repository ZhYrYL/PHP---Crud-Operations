<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .flex-container{
            height: 100vh;
            display: flex;
            justify-content: space-around;
            align-items: center;
            font-family: helvetica;
        }
        .form-container{
            text-align: center;
            border-radius: 10px;
            box-shadow: 0 0 10px black;
            height: 70%;
            width: 30%;
        }
        .form-container h1{
            border-bottom: 1px solid;
            padding-bottom: 20px;
        }
        .form-container input{
            width: 90%;
            height: 20px;
            text-align: center;
            caret-color: green;
            border-radius: 3px;
            border: 1px solid gray;
        }
        .form-container .reg-button{
            height: 30px;
            width: 91%;
            cursor: pointer;
            background-color: #9CFF2E;
            color: white;
            font-size: 16px;
            font-weight: bold;
            border: none;
        }
        .form-container .reg-button:hover{
            transition: 0.3s;
            background-color: #38E54D;
            color: gold;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class Form</title>
</head>
<body>
    <div class="flex-container">
        <form method="post" class="form-container" action="db/connection.php">
            <h1>Register Account</h1>
            <label for="s_id">Student ID</label><br>
            <input type="text" name="s_id" id="s_id"><br><br>

            <label for="fname">First Name</label><br>
            <input type="text" name="fname" id="fname"><br><br>

            <label for="mname">Middle Name</label><br>
            <input type="text" name="mname" id="mname"><br><br>

            <label for="lname">Last Name</label><br>
            <input type="text" name="lname" id="lname"><br><br>

            <label for="age">Age</label><br>
            <input type="text" name="age" id="age"><br><br>

            <label for="section">Section</label><br>
            <input type="text" name="section" id="section"><br><br>

            <input type="submit" value="Register" class="reg-button">
        </form>
    </div>
    
</body>
</html>