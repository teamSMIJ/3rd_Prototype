<?php
    mysqli_connect("localhost","smij","asdf1234", "smij");
    //$conn = mysqli_connect("smij.dothome.co.kr","smij","e517e517","smij");

    if(!$conn) {
        die("DB connection failed".mysqli_error());
    }

    $dbname = "smij";

    $dbconn = mysqli_select_db($conn,$dbname);
    if(!$dbconn) {
        die("DB selection failed".mysqli_error());
    }

    $userId = $_GET['userId'];
    $query_search = "SELECT * FROM login WHERE id='$userId'";
    
    $result = mysqli_query($conn,$query_search);
    $row = mysqli_num_rows($result);

    
    echo $row;

    mysqli_close($conn);
?>