<?php

    include 'connection.php';

    if(isset($_GET['delete'])){
        $delete = mysqli_query($connection, "DELETE from grades where student_id='".$_GET['delete']."'");
        header("location:../grades.php");
    }

?>