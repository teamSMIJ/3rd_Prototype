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
    //$query_search = "SELECT dogName,dogBirth,dogGender,schedule,dogroot FROM moduledata WHERE id='$userId'";
    $query_search = "SELECT lat,lng,vib FROM moduledata";
    $result = mysqli_query($conn,$query_search);

    $total = mysqli_num_rows($result);
    $row = mysqli_fetch_array($result);


    $data =$row[2];
    if($data){
        echo $data."_".($total-1)."_";
        while($row = mysqli_fetch_array($result)){
            echo ("$row[lat]&$row[lng];");
		}  
    }
    mysqli_close($conn);
?>