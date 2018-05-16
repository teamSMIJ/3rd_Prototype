<?php
    
    $conn = mysqli_connect("localhost","smij","asdf1234", "smij");
    mysqli_set_charset($conn,"utf8");
    
    if(mysqli_connect_errno($conn)) {
        echo "Failed to connect to MySql".mysqli_connect_error();
    }
    $user_id = $_POST['iid'];
    $user_load = $_POST['lload']."^";
    
    $query_search = "SELECT userload FROM onlyuserload WHERE userid='$user_id'";
    $res1= mysqli_query($conn,$query_search);
    $total=mysqli_num_rows($res1);
    $row = mysqli_fetch_array($res1);
    $data=$row[0];

    if($total>=4) {
        echo "full";
    }
    else {
        $result = mysqli_query($conn,"INSERT INTO onlyuserload (userid,userload) VALUES ('$user_id','$user_load')");
        if($result) {echo "success";}
        else {echo "falied";} 
    }   

   mysqli_close($conn);
?>