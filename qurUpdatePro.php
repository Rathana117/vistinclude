

         <?php
            include('dbCon.php');
            $sfId = $_POST["txtId"];
            $queryUpdate = 'Update tbldata SET 
            ProName = "'.$_POST["txtProName"].'", 
            CatID = "'.$_POST["CatType"].'", 
            Descripition = "'.$_POST["des"].'", 
            desUrl = "'.$_POST["txtDesLink"].'" 
            WHERE Id="'.$sfId.'"';

            if (mysqli_query($dbCon, $queryUpdate)) {
                $dbCon->close();
                header("location:../EditPro.php");
            } 
            else 
                echo "Error: " . $queryUpdate . "<br>" . mysqli_error($dbCon);

        ?>