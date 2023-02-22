<?php

    include 'connection.php';

    $student_id = $_POST['s_id'];
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $age = $_POST['age'];
    $section = $_POST['section'];

    $insert = mysqli_query($connection, "INSERT INTO grades VALUES('$student_id', '$fname','$mname','$lname','$age','$section')");

    if($insert===TRUE){
        echo "Registered Successfully";
    }else{
        echo "Error";
    }
?>