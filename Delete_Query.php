<?php
        include('dbCon.php');

        $sfId = $_POST["txtId"];
        $queryDelete = 'Delete From tbldata 
        WHERE Id="'.$sfId.'"';

        if (mysqli_query($dbCon, $queryDelete)) {
            $dbCon->close();
            header("location:../EditPro.php");
        } 
        else 
            echo "Error: " . $queryDelete . "<br>" . mysqli_error($dbCon);

?>