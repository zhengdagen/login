<?php
    include_once "conn.php";
    // username: $('.reg_user').val(),
    // password: $('.reg_password').val(),
    // Email: $('.reg_email').val(),
    // telephone: $(".reg_mobile").val() 

    $username=$_POST['username'];
    $password=$_POST['password'];
    $Email=$_POST['Email'];
    $sql = "INSERT INTO `tb_students`( `username`, `password`, `Email`) VALUES ('$username','$password','$Email')";
    //echo $sql;
    if (mysqli_query($conn, $sql)) {
        echo 1;
    } else {
        echo mysqli_error($conn);
    }
    mysqli_close($conn);
?>
