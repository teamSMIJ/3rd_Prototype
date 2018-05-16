<?php

    $conn = mysqli_connect("localhost","smij","asdf1234", "smij");
    //$conn = mysqli_connect("smij.dothome.co.kr","smij","e517e517,"smij");

    
    mysqli_set_charset($conn,"utf8");
    
    if(mysqli_connect_errno($conn)) {
        echo "Failed to connect to MySql".mysqli_connect_error();
    }
    $user_id = $_POST['iid'];
    $user_pw = $_POST['ppw'];
    $user_name = $_POST['nname'];
    $user_phone = $_POST['pphone'];
    $user_email = $_POST['eemail'];

    $result = mysqli_query($conn,"insert into login (id,pw,name,phone,email) 
                                    values ('$user_id','$user_pw','$user_name','$user_phone','$user_email')");
    if($result) {
        echo "success";
    }
    else {
        echo "falied";
   }

   mysqli_close($conn);
?>