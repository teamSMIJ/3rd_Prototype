<?php

    $conn = mysqli_connect("localhost","smij","asdf1234");
    if(!$conn) {
        die("DB connection failed".mysqli_error());
    }

    $dbname = "smij";

    $dbconn = mysqli_select_db($conn,$dbname);
    if(!$dbconn) {
        die("DB selection failed".mysqli_error());
    }

    $userLoginId = $_POST['userId'];
    $userLoginPw = $_POST['userPw'];

    //$user_id = $_POST['userId'];
    $query_search = "select * from login where id='$userLoginId' AND pw='$userLoginPw'";
    //$user_pw = $_POST['userPw'];
    $query_exec = mysqli_query($conn,$query_search);
        echo "aa";    
    $rows = mysqli_num_rows($query_exec);
    
    if($rows == 0) { 
        echo "FALSE";
    }   
    else {
        echo "TRUE";
    }
?>