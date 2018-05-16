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
    
    $result = mysqli_query($conn,$query_search);
    
    $fetch = mysqli_fetch_array($result);
    $row = mysqli_num_rows($result);
    //0번인덱스 즉, 첫번째 레코드 찾기
    mysqli_data_seek($result,2);
    $fetRow0 = mysqli_fetch_row($result);
    /*
    //1번인덱스 즉, 두번째 레코드 찾기
    mysqli_data_seek($result,1);
    $fetRow1 = mysqli_fetch_row($result);
    $test1 = $fetRow1[0];  
    */
    echo $fetRow0[0];
    /*
    $data = $fetch[0];
    if($data) { 
        echo $data;
        while($fetch = mysqli_fetch_array($result)){
            echo ("$fetch[userload]");
        }
    }
    */
    mysqli_close($conn);
?>