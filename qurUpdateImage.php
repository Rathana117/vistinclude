
<?php
        $img = $_FILES["imgUpdate"]["name"];
        $rand = rand();
        $imgU = $rand.$img;
        $path = "image/".$imgU;
        $path1 = "../image/".$imgU;
        move_uploaded_file($_FILES['imgUpdate']['tmp_name'], $path1);

           include('dbCon.php');
            $sfId = $_POST["txtId"];
            $queryUpdate = 'Update tbldata SET 
            imgUrl = "'.$path. '"WHERE Id="'.$sfId.'"';

            if (mysqli_query($dbCon, $queryUpdate)) {
                $dbCon->close();
                header("location:../EditPro.php");
            } 
            else 
                echo "Error: " . $queryUpdate . "<br>" . mysqli_error($dbCon);

            echo '<br/><br> Thank You!!!';
    $dbCon->close();
  ?>