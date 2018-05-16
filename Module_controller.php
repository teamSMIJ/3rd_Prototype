<?php
   
    $conn = mysqli_connect("localhost","smij","asdf1234", "smij");
    mysqli_set_charset($conn,"utf8");
    
    if(mysqli_connect_errno($conn)) {
        echo "Failed to connect to MySql".mysqli_connect_error();
    }
    $module_data =$_POST['moduleData'];

    if(strpos($module_data,"vib")!==false){
        $vib = explode(".",$module_data);
        //$result = mysqli_query($conn,"INSERT INTO moduledata (vib) VALUES ('$vib[1]')");
        $result = mysqli_query($conn,"UPDATE moduledata SET vib='$vib[1]' WHERE number=80");
    }
    else if(strpos($module_data,";")){
        $latlng = explode(";",$module_data);
        $result = mysqli_query($conn,"INSERT INTO moduledata (lat,lng) VALUES ('$latlng[0]','$latlng[1]')");
    }

    if($result) {echo "success";}
    else {echo "falied";}
   mysqli_close($conn);
?>

    