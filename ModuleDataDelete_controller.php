<?php
    
    $conn = mysqli_connect("localhost","smij","asdf1234", "smij");
    mysqli_set_charset($conn,"utf8");
    
    if(mysqli_connect_errno($conn)) {
        echo "Failed to connect to MySql".mysqli_connect_error();
    }



    $deleteSign = $_POST['ddeleteSSign'];
    
    if(strcasecmp($deleteSign,"delete")==0){
        $result = mysqli_query($conn,"DELETE FROM moduledata WHERE number>80");
        if($result) {echo "success";}
        else {echo "failed";}
    }
   mysqli_close($conn);
?>