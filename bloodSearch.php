<?php
include 'include/menuHeader.php';
include 'include/dbConnect.php';
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<html>
    <head>
        <title>Blood Search</title>
        <link rel="stylesheet" type="text/css" href="CSS/searchBlood.css"/>
    </head>
    <body>
        <div class="block">
            <form action="" > 
                <center> <div class="searchBack">
                   <span class="bbs">Enter Blood Group : </span><input type="text" required="required" name="txtSearchBlood" placeholder="Search here" value="<?php if(isset($_GET['subButton'])){ echo $_GET['txtSearchBlood'];} ?>" class="searchBox"/>
                    <a href="" ><button name="subButton" class="subButton">Search Blood</button></a>
                </div></center>
            </form>
            <div id="searchResult" style="position: absolute; top: 50%;width: 100%; height:auto ;  ">
                    <table border="1" style="position: relative; width: 100%; height: auto;">
                        <tr style=" background-color: darkslategrey; color: white; font-family: Tahoma; font-size: 20px;">
                            <th>Donor Name</th>
                            <th>Donor Email</th>
                            <th>Blood Group</th>
                            <th>Donor Contact Number</th>

                        </tr>
                        <?php
                        
                        if (isset($_GET['subButton'])) {
                            $count=false;
                            $sBlood = $_GET['txtSearchBlood'];
                            $str1 = "Select DName,DEmail,DBloodGroup,DMobile FROM blooddonor where DBloodGroup='" . $sBlood . "'";


                            $rs = $con->query($str1);
                            while ($row = $rs->fetch_row()) {
                                $count=true;
                                echo "<tr align='center' style='font-size: 15px; font-weight: bold;font-family: Arial,Helvetica,sans-serif;'><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td></tr>";
                            }
                            if(!$count)
                            {
                                 echo "<tr align='center' style='font-size: 15px; font-weight: bold;font-family: Arial,Helvetica,sans-serif;'><td colspan='4'>Blood Group Not Found</td>";
                            }
                        }
                        ?>


                    </table>


                </div>
            </div>





        </div>
    </body>
</html>