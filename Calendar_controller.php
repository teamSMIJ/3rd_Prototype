<?php
    $file = fopen("zinput.txt","a+");
    if(!$file) die("can`t open file");

    $calendarData = $_POST["ccalendar"];
    $date = $_POST["ddate"];
    $user = $_POST["uuser"];
    //$input_time = date("Y-m-d H:i:s");

    $msg =$user.";".$date.";".$calendarData."\r\n";

    fwrite($file,$msg);

    fclose($file);
?>