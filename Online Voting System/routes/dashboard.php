<?php
    session_start();
    if(!isset($_SESSION['userdata'])){
        header("location: ../index.php");
    }

    $userdata = $_SESSION['userdata'];
    $groupsdata = $_SESSION['groupdata'];

    if($_SESSION['userdata']['status']==0){
        $status = '<b style = "color:red">Not Voted</b>';
    }
    else{
        $status = '<b style = "color:green">Voted</b>';
        echo '
            <script>
                alert("You are already voted !");
                window.location =  "loggout.php";
            </script>
        ';
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../css/dashboard.css">
</head>
<body>
    <div class = "mainsection">
        <div class="headersection">
            <a href="../"><button id="backbtn">Back</button></a>
            <a href="loggout.php"><button id="logoutbtn">Logout</button></a>
            <h1>Online Voting System</h1>
        </div>
        <hr>
     
        <div id="Profile">
            <center><img src="../uploads/<?php echo $userdata['photo'] ?>" height="80" width = "80"></center>
            <br><br>
            <b>Name: <b><?php echo $userdata['name']?></b></b>
            <br><br>
            <b>Mobile: <b><?php echo $userdata['mobile']?></b></b>
            <br><br>
            <b>Address: <b><?php echo $userdata['address']?></b></b>
            <br><br>
            <b>Status: <b><?php echo $status?></b></b>
        </div>

        <div id="Group">
            <?php
                if($_SESSION['groupdata']){
                    for($i = 0; $i<count($groupsdata); $i++){
                        ?>
                        <div>
                            <img style="float: right"src="../uploads/<?php echo $groupsdata[$i]['photo'] ?>" height="80" width="80">
                            <b>Group Name: <b><?php echo $groupsdata[$i]['name']?></b></b>
                            <br><br>
                            <b>Votes: <?php echo $groupsdata[$i]['votes']?></b>
                            <br><br>
                            <form action="../api/voted.php" method=post>
                                <input type="hidden" name=gvotes value="<?php echo $groupsdata[$i]['votes']?>">
                                <input type="hidden" name=gid value="<?php echo $groupsdata[$i]['id']?>">
                                <input type="submit" name=votebtn value="Vote" id = "votebtn">
                            </form>
                            <hr>
                        </div>
                        <?php
                    }
                }
            ?>
        </div>   
        </div>
    
</body>
</html>