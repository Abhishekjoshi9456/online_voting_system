<?php
    include("connect.php");

    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];
    $cpassword = $_POST['confpassword'];
    $address = $_POST['address'];

    $photo= $_FILES['image']['name'];
    $file_tmp_name = $_FILES['image']['tmp_name'];

    $role = $_POST['role'];

    if($password == $cpassword){
        move_uploaded_file($file_tmp_name, "../uploads/$photo");
        $insert = mysqli_query($connection, "INSERT INTO user (name, mobile, password, address, photo, role, status, votes) values('$name', '$mobile', '$password', '$address', '$photo', '$role', 0, 0)");

        if($insert){
            echo '
            <script>
                 alert("Registration successfully");
                 window.location = "../index.php";
            </script>
            ';
        }
        else{
            echo '
            <script>
                 alert("Some error accured !");
                 window.location = "../routes/registration.php";
            </script>
            ';
        }
    }
    else{
        echo '
            <script>
                 alert("Password and Confirm password does not match !");
                 window.location = "../routes/registration.php";
            </script>
        ';
    }

?>