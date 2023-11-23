

<?php
  include ('dbCon.php');
  $qw = 'SELECT * FROM tbldata where CatID=2 Order By Datein DESC';
  $rw = $dbCon->query($qw);

  if ($rw->num_rows > 0)
  // output data of each row
  {
    echo '<table width="900px" cellpadding="5px" cellspacing="5px">';
    while($row = $rw->fetch_assoc())
    {    
        echo '<tr>';
        echo '<td width="900px" style="vertical-align: middle; text-align: center">';
        echo '<a href="'.$row["desUrl"].'">';
        echo '<h3>'. $row["ProName"] . '</h3>';
        echo '<img src="'. $row["imgUrl"] .'" width="500px" /></a>';
        echo '<p>'.$row["Descripition"].'</p>';
        echo '</td>';
        echo '</tr>';
    }
    echo '</table>';
  }
  else 
      echo '0 results';
  $dbCon->close();  
?>