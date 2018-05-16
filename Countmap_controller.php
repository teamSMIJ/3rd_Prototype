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

    $userId = $_GET['userId'];
    $query_search = "SELECT userload FROM onlyuserload WHERE userid='$userId'";
    $res1= mysqli_query($conn,$query_search);
    $total=mysqli_num_rows($res1);
    $row = mysqli_fetch_array($res1);
    
    $data=$row[0];
     
    if($data){
    echo $total;
    }
    mysqli_close($conn);


?>