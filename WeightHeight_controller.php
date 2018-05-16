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
    $query_search = "SELECT hWeight,hHeight,dogWeight,dogBirth FROM login WHERE id='$userId'";
    
    $result = mysqli_query($conn,$query_search);
    $row = mysqli_fetch_array($result);

    /*
    echo "$row";
    print_r($row);
    echo "<br>";
    */
    $data = $row[0].";".$row[1].";".$row[2].";".$row[3];

    if($data){
    echo $data;

    }
    mysqli_close($conn);


?>