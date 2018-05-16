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

    $acceptUserId = $_POST['userId'];
    $acceptImagePath = $_POST['imagePath'];
    $acceptAnimalName = $_POST['animalName'];
    $acceptAnimalDate = $_POST['animalDate'];
    $acceptAnimalGender = $_POST['animalGender'];
    $acceptAnimalWeght = $_POST['animalWeight'];  
    $acceptHWeight = $_POST['humanWeight'];
    $acceptHHeight = $_POST['humanHeight'];
    $file_path = "imageTest/"; //YOUR FOLDER FOR SAVING IMAGE, MY FOLDER NAME IS uploads

    $file_path = $file_path . basename( $_FILES['uploaded_file']['name']);
    $query = "UPDATE login SET dogRoot='$acceptImagePath',dogName='$acceptAnimalName',dogBirth='$acceptAnimalDate',dogGender='$acceptAnimalGender', dogWeight='$acceptAnimalWeght',hWeight='$acceptHWeight', hHeight='$acceptHHeight' WHERE id='$acceptUserId'"; 
    
    //image_path=CONCAT(image_path,'$image_path')
    move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $file_path);
     
        mysqli_query($conn, $query);
        echo "success";
?>