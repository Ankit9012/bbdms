<?php
include 'include/dbConnect.php';
$name=$_POST['txtName'];
$email=$_POST['txtEmail'];
$password=$_POST['txtPassword'];
$dob=$_POST['dateOfBirth'];
$bgroup=$_POST['bloodt1'];
$gender=$_POST['txtGender'];
$weight=$_POST['txtWeight'];
$resiphone=$_POST['txtResiPhone'];
$mobnumber=$_POST['txtMobNumber'];
$daddress=$_POST['txtAddress'];
$docType=$_POST['op'];
$docNumber=$_POST['txtDocNumber'];
$city=$_POST['dCity'];
echo "<script>alert('sdas');</script>";
$str="INSERT INTO blooddonor VALUES ('".$name."','".$email."','".$password."','".$dob."','".$gender."','".$bgroup."',".$weight.",".$resiphone.",".$mobnumber.",'".$city."','".$daddress."','".$docType."',".$docNumber.");";
echo "<script>alert(".$str.");</script>";
if($con->query($str)==TRUE)
{
    header("location:ThankYou.php");
}
else
{
    echo "<script>alert('Empty Form submitted OR Error!')</script>";
    header("location:newDonor.php");
}

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
