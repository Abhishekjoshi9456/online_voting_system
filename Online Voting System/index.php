<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Voting System</title>
    <link rel="stylesheet" href="css/stylesheet.css">
</head>
<body>
    <div class="headersection">
        <h1>Online Voting System</h1>
    </div>
    <hr>
    <div class="bodysection">
        <form action='api/login.php' method = post >
            <h2>Login</h2>
            <input type="number" name=mobile placeholder="Enter mobile">
            <br><br>
            <input type="password" name=password placeholder="Enter password">
            <br><br>
            <select name="role" class="dropbox">
                <option value="1">Voter</option>
                <option value="2">Group</option>
            </select>
            <br><br>
            <button>Login</button>
            <br><br>
            New User? <a href="routes/registration.php">Register here</a>
        </form>
    </div>
    
</body>
</html>