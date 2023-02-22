<?php

    include 'connection.php';

    $student_id = $_POST['s_id'];
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $age = $_POST['age'];
    $section = $_POST['section'];

    if(isset($_POST['submit'])){
        $insert = mysqli_query($connection, "INSERT INTO grades VALUES('$student_id', '$fname','$mname','$lname','$age','$section')");

        if($insert===TRUE){
            header("location:../grades.php");
            // echo "Registered Successfully";
        }else{
            echo "Error";
        }
    }else{
        $insert = mysqli_query($connection, "UPDATE grades SET fname='$fname', mname='$mname',lname='$lname',age='$age',section='$section' where student_id='$student_id'");

        if($insert===TRUE){
            header("location:../grades.php");
            // echo "Registered Successfully";
        }else{
            echo "Error";
        }
    }
?>