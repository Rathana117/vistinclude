<?php
    include('dbCon.php');
    $sfId = $_GET["fdId"];
    $qwAll = 'SELECT * FROM tbldata WHERE Id='.$sfId;
    $rwAll = $dbCon->query($qwAll);
    $row = $rwAll->fetch_assoc();
?>
</head>

<body>
    <div class="wrapper">
        <div class="addnew">
            <form action="Delete_Query.php" method="post" enctype="multipart/form-data">
                <h1>Are You sure you want to delete this Info?</h1>
                <label for="txtId" ></label>
                <input type="hidden" name="txtId" id="txtId" value=<?php echo $row["Id"]; ?> ><br>
                <?php 
                    echo "The following data is: ".$row["Id"]. ",".$row["ProName"]. ",".$row["Descripition"];
                ?>
                <input type="submit" value="Delete Data" name="submit">
                <input type="reset" value="Cancel" name="Cancel">
            </form>
        </div>
    </div>
</body>