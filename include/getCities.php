<?php
include 'dbConnect.php';
    $stateName=$_POST['stName'];
    $rs=$con->query("SELECT city_name from cities where city_state='$stateName' order by city_name");
    while($row=$rs->fetch_row())
    {
        echo "<option value='$row[0]'>$row[0]</option>";
    }

    

?>
