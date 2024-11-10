<?php
    session_start();
    include('connect.php');

    $votes = $_POST['gvotes'];
    $total_votes = $votes + 1;
    $gid = $_POST['gid'];

    $uid = $_SESSION['userdata']['id'];

    $update_votes = mysqli_query($connection, "UPDATE user SET votes=$total_votes WHERE id=$gid");
    $update_user_status = mysqli_query($connection, "UPDATE user SET status=1 WHERE id=$uid");

    if($update_votes and $update_user_status){
        $groups = mysqli_query($connection, "SELECT * FROM user WHERE role = 2");
        $groupsdata = mysqli_fetch_all($groups, MYSQLI_ASSOC);
        // print_r($groupsdata);

        $_SESSION['userdata']['status'] = 1;
        $_SESSION['groupsdata'] = $groupsdata;

        echo '
            <script>
                 alert("Successfully Voted.");
                 window.location = "../routes/dashboard.php";
            </script>
            ';
    }
    else{
        echo '
            <script>
                 alert("some error occoured !");
                 window.location = "../routes/dashboard.php";
            </script>
            ';
    }
?>