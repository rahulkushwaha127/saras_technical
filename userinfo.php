<?php
    $con = mysqli_connect('localhost','root');

    if($con){
       echo "Connection Successful";
       header("location:index.php");
    }else{
        echo "Not Connected";
        header("location:index.php");
    }

    mysqli_select_db($con, 'github1');

    $user = $_POST['user'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $comment = $_POST['comment'];

    $query = "insert into `userinfodata` ( `user`, `email`, `mobile`, `comment`) VALUES ('$user', '$email', '$mobile', '$comment')";

    mysqli_query($con , $query);

?>