<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register here</title>
    <link rel="stylesheet" href="../css/registration.css">
</head>
<body>
    <div class="headersection">
        <h1>Online Voting System</h1>
    </div>
    <hr>
    <div class="bodysection">
        <form method = post action='../api/register.php' enctype="multipart/form-data">
            <h2>Registration</h2>
            <input type="text" name=name placeholder="Name">
            &nbsp;&nbsp;
            <input type="number" name=mobile placeholder="Mobile">
            <br><br>
            <input type="password" name=password placeholder="Password">
            &nbsp;&nbsp;
            <input type="password" name=confpassword placeholder="Confirm Password">
            <br><br>
            <input class="address" type="text" name=address placeholder="Address">
            <br><br>
            <center>
            <div class="uploadfile">
                Upload image: <input type="file" name=image>
            </div>
            <br>
            <div class="role">
                Select your role: <select name=role>
                    <option value="1">Voter</option>
                    <option value="2">Group</option>
                </select>
            </div>
            </center>
            <br><br>
            <button>Register</button>
            <br><br>
            Already user? <a href="../index.php">Login here</a>
        </form>
    </div>
</body>
</html>