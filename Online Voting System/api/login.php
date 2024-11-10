<?php
    session_start();
    include ("connect.php");
    $mobile = $_POST['mobile'];
    $pass = $_POST['password'];
    $role = $_POST['role'];

    $check = mysqli_query($connection, "SELECT * FROM user WHERE mobile='$mobile' AND password='$pass' AND role='$role' ");

    if(mysqli_num_rows($check)>0){
        $userdata = mysqli_fetch_array($check);
        $group = mysqli_query($connection, "SELECT * FROM user WHERE role = 2");
        $groupdata = mysqli_fetch_all($group, MYSQLI_ASSOC);
        
        $_SESSION['userdata'] = $userdata;
        $_SESSION['groupdata'] = $groupdata;


        echo '
        <script>
             window.location = "../routes/dashboard.php";
        </script>
        ';

    }
    else{
        echo '
        <script>
             alert("Invalid Credentials or User not found");
             window.location = "../index.php";
        </script>
        ';
    }
?>