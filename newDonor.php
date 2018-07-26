<?php
include 'include/menuHeader.php';
include 'include/dbConnect.php';
?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="CSS/newDonor.css"/>
        <script src="JS/fetchCities.js"></script>
        <script src="JS/docName.js"></script>
        <script src="JS/loadPhoto.js"></script>
        <script>
            function ButtonCh()
            {
                if(document.getElementById("btnSubmit").disabled)
                {
                    document.getElementById("btnSubmit").disabled=false;
                    document.getElementById("btnSubmit").style.cursor="pointer";
                }
                else
                    
                {    document.getElementById("btnSubmit").disabled=true;
                    document.getElementById("btnSubmit").style.cursor="not-allowed";
                }
    
            }
            function criDiv()
            {
                if(document.getElementById("btnSubmit").disabled)
                {
                    document.getElementById("btnSubmit").disabled=false;
                    document.getElementById("btnSubmit").style.cursor="pointer";
                    document.getElementById("criDonor").checked=true;
                }
                else
                    
                {    document.getElementById("btnSubmit").disabled=true;
                    document.getElementById("btnSubmit").style.cursor="not-allowed";
                    document.getElementById("criDonor").checked=false;
                }
    }
        </script>

        <title>
            Donor Registration
        </title>
    </head>
    <body >

        <div style="background-color: black; width:100%; height: 70%; position: fixed; margin-left: -8px; margin-top: -8px;"> <img src="resource/donorBack.jpg" style="width:100%; height: 100%;"/></div>
        <div class="donorForm"> 
            <h2 align= "center">Register as a Blood Donor</h2>



            <form action="" method="POST" enctype="multipart/form-data"> 
                <fieldset  class="box" > 
                    <legend class="Lhead" > LOGIN INFORMATION</legend>
                    <div class="legend2">DONOR INFORMATION</div>
                    <div class="formPart0 ">

                        <p>First Name*<span class="error" id="nameFErr">Only alphabets allowed</span></p> 

                        <input type="text" name="txtFirstName" required="required" class="InBox"/>   
                        <p>Last Name*<span class="error" id="nameLErr">Only alphabets allowed</span></p>
                        <input type="text" name="txtLastName" required="required" class="InBox"  />
                        <div class="formPart">

                            <p  class="p2">Email ID*<span class="error" id="emailErr">Error! Invalid Email</span></p>

                            <input type="text" name="txtEmail" required="required" class="InBox2"/>

                            <p class="p2">Password*<span class="error" id="password"></span></p>
                            <input type="password" name="txtPassword" required="required" class="InBox2"/>

                        </div>
                        <div style="position: absolute; width: 45%; top: 35%; right: 5%; height:180px;">

                            <p>Blood Group *<span class="error" id="bloodErr">Blood Group Required!</span></p>
                            <select name="bloodt1" class="InBox">
                                <option value="none">Select Blood Group</option>
                                <?php
                                $rs = $con->query("Select distinct BTypeName from bloodtype");
                                while ($row = $rs->fetch_row()) {
                                    echo "<option value='$row[0]'>$row[0]</option>";
                                }
                                ?>
                            </select>
                            <p> Date of Birth *<span class="error" id="dobErr">Error! Invalid DOB</span></p>
                            <input type="date" name="dateOfBirth" required="required" class="InBox" onkeydown="return false"/>
                            <div class="formPart">

                                <p class="p2">Gender<span class="error" id="genderErr">Select Gender!</span></p>
                                <select name="txtGender" class="InBox2">
                                    <option value="none">Select Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Transgender">Transgender</option>
                                </select>

                                <p class="p2">Weight (in KG)<span class="error" id="weightErr">Only number allowed!</span></p>
                                <input type="text" name="txtWeight" required="required" class="InBox2"/>
                            </div>  


                        </div>

                    </div>
                </fieldset>
    <!--<button style="position: absolute; bottom: 15%; right: 10%;" ><a href="#next">NExt</a></button>
                <div style=" position: absolute; background-color: red; top:400px;; width: 100%; height: 30px;" id="next">Kgl</div>-->
              
                
                <fieldset  class="box"> 
                    <legend class="Lhead">CONTACT INFORMATION</legend>
                    <div class="legend2">DONOR's DOCUMENT </div>
                    <div class="formPart0">
                        <p>State *<span class="error" id="sErr">State Required!</span></p>
                        <select name="dCity" class="InBox" id="stateName" onChange="fetchCities(this.value);">
                            <option value="none" required="required">Select State</option>    
                            <?php
                            $rs = $con->query("Select distinct city_state from cities order by city_state");
                            while ($row = $rs->fetch_row()) {
                                echo "<option value='$row[0]'>$row[0]</option>";
                            }
                            ?>
                        </select>
                        <p>City *<span class="error" id="cErr">City Required!</span></p>
                        <select id="cityName"name="city" class="InBox">
                            <option value="none">Select State First</option>
                        </select>
                        <div class="formPart">
                            <p class="p2">Mobile Number *<span class="error" id="mobileErr">Invalid number!</span></p>
                            <input type="text"  name="txtMobNumber" required="required" class="InBox2"  />
                            <p class="p2">Address<span class="error" id="addressErr"></span></p>
                            <textarea rows="2.5"  name="txtAddress" required="required" class="InBox2" /></textarea>


                        </div>
                        <div style="position: absolute;width: 45%; top:95%; right: 5%; height:180px;">
                            <div class="formPart3">

                                <p>Verification Document Type *<span class="error" id="docTErr">Required field!</span></p>
                                <select name="op" class="InBox" onChange="docNumber(this.value);">
                                    <option value="none">Select Doc Type</option>
                                    <option value="Adhar">Adhar Card</option>
                                    <option value="Voter">Voter Card</option>
                                    <option value="DL">DL</option>
                                </select>

                                <p  id="docName" >Select Doc type first!<span class="error" id="docErr"></span></p>
                                <input type="text" required="required"  name="txtDocNumber" id="docN" class="InBox"  disabled/>
                                <p id="docUpName">Select Doc type first!</p>
                                <input type="file" required="required" class="InBox" name="docUpload" id="docUpload" disabled/>
                                <div class="photoBox"> 
                                    <p class="p2">Photo Upload</p>
                                    <input type="file" required="required" name="dPhoto"  class="InBox2" onChange="loadPhoto(this);"/>
                                    <div style="position:inherit; height: auto; width:100%; padding: 10px;  "><center> <img src="resource/defaultD.png" id="donorPhoto" name="donorPhoto" height="120px" width="120px"/></center></div>
                               
                                </div>
                            </div>

                            </fieldset> 
                            <fieldset class="box">
                                <legend class="Lhead">ELIGIBILITY CRITERIA</legend>
                                <div>
                                    <div class="consent">I want to donate blood voluntarily and will not be entitled to claim any exchange for my donation.<br/> I guarantee that all the provided information is true. <br/>I understand the questions, which are for my protection as well as to protect the receipient of my blood.                      
                                        <hr/><b>bloodBank Requirements for males that want to donate blood:</b>
                                        <br/><br/><span>&nbsp;&nbsp;&nbsp; &#x2714; Be healthy and feeling well</span>
                                        <br/><span>&nbsp;&nbsp;&nbsp; &#x2714; Be at least 17 years old in most states</span>
                                        <br/><span>&nbsp;&nbsp;&nbsp; &#x2714; Be at least 5'1"</span>
                                        <br/><span>&nbsp;&nbsp;&nbsp; &#x2714; Weight at least 130 lbs.</span>
                                        <br/><br/><b>bloodBank Requirements for females that want to donate blood:</b>
                                        <br/><br/><span>&nbsp;&nbsp;&nbsp; &#x2714; Be healthy and feeling well</span>
                                        <br/><span>&nbsp;&nbsp;&nbsp; &#x2714; Be at least 17 years old in most states</span>
                                        <br/><span>&nbsp;&nbsp;&nbsp; &#x2714; Be at least 5'5"</span>
                                        <br/><span>&nbsp;&nbsp;&nbsp; &#x2714; Weight at least 150 lbs.</span>
                                        <hr/>
                                        <input style="margin-left: 5%;" type="checkbox" id="criDonor" name="cri" onChange="ButtonCh();" ></input>
                                        <span style=" font-family: Tahoma; cursor: pointer;" onClick="criDiv();"> I have read the Eligibility Criteria and confirm that I am eligible to donate blood.</span>  

                                    </div>
                                </div>
                            </fieldset>
                            <div>
                                <button type="submit" name="submit" value="submit" id="btnSubmit"  class="btnConSubmit" disabled>REGISTER AS DONOR</button>
                            </div>
                            </form>
                            <?php
                            if (isset($_POST['submit'])) {
                                $ch = true;
                                if (empty($_POST['txtFirstName'])) {
                                    $ch = false;
                                    echo "<script>document.getElementById('nameFErr').innerHTML='First Name Requried!';document.getElementById('nameFErr').style.display='inline-block';</script>";
                                }
                                if (empty($_POST['txtEmail'])) {
                                    $ch = false;
                                    echo "<script>document.getElementById('emailErr').innerHTML='E-mail Requried!';document.getElementById('emailErr').style.display='inline-block';</script>";
                                }
                                if (empty($_POST['txtLastName'])) {
                                    $ch = false;
                                    echo "<script>document.getElementById('nameLErr').innerHTML='Last Name Requried!';document.getElementById('nameLErr').style.display='inline-block';</script>";
                                }
                                if (empty($_POST['txtPassword'])) {
                                    $ch = false;
                                    echo "<script>document.getElementById('password').innerHTML='Password Requried!';document.getElementById('password').style.display='inline-block';</script>";
                                }
                                if (empty($_POST['txtWeight'])) {
                                    $ch = false;
                                    echo "<script>document.getElementById('weightErr').innerHTML='Weight Requried!';document.getElementById('weightErr').style.display='inline-block';</script>";
                                }
                                if (empty($_POST['op'])) {
                                    $ch = false;
                                    echo "<script>document.getElementById('docErr').innerHTML='Doc. no. req.!';document.getElementById('docErr').style.display='inline-block';</script>";
                                }
                                if (empty($_POST['txtAddress'])) {
                                    $ch = false;
                                    echo "<script>document.getElementById('addressErr').innerHTML='Address required!';document.getElementById('addressErr').style.display='inline-block';</script>";
                                }
                                if (empty($_POST['txtMobNumber'])) {
                                    $ch = false;
                                    echo "<script>document.getElementById('mobileErr').style.display='inline-block';document.getElementById('mobileErr').innerHTML='Mob. no. required!';</script>";
                                }
                                if (!(preg_match("/^[a-z,' ']+$/i", $_POST['txtFirstName'])) && !(empty($_POST['txtFirstName']))) {
                                    $ch = false;
                                    echo "<script>document.getElementById('nameFErr').style.display='inline-block';</script>";
                                }
                                if (!filter_var($_POST['txtEmail'], FILTER_VALIDATE_EMAIL) && !(empty($_POST['txtEmail']))) {
                                    $ch = false;
                                    echo "<script>document.getElementById('emailErr').style.display='inline-block';</script>";
                                }
                                if (!(preg_match("/^[a-z]+$/i", $_POST['txtLastName'])) && !(empty($_POST['txtLastName']))) {
                                    $ch = false;
                                    echo "<script>document.getElementById('nameLErr').style.display='inline-block';</script>";
                                }
                                if (!(preg_match("/^[1-9][0-9]$/", $_POST['txtWeight'])) && !(empty($_POST['txtWeight']))) {
                                    $ch = false;
                                    echo "<script>document.getElementById('nameLErr').style.display='inline-block';</script>";
                                }
                                if (!(preg_match("/^[6-9][0-9]{9}$/", $_POST['txtMobNumber'])) && !(empty($_POST['txtMobNumber']))) {
                                    $ch = false;
                                    echo "<script> document.getElementById('mobileErr').style.display='inline-block';</script>";
                                }
                                if ($_POST['txtGender'] == "none") {
                                    $ch = false;
                                    echo "<script>document.getElementById('genderErr').style.display='inline-block';</script>";
                                }
                                if ($_POST['bloodt1'] == "none") {
                                    $ch = false;
                                    echo "<script>document.getElementById('bloodErr').style.display='inline-block';</script>";
                                }
                                if ($_POST['dCity'] == "none") {
                                    $ch = false;
                                    echo "<script>document.getElementById('sErr').style.display='inline-block';</script>";
                                }
                                if ($_POST['city'] == "none") {
                                    $ch = false;
                                    echo "<script>document.getElementById('cErr').style.display='inline-block';</script>";
                                }
                                if ($_POST['op'] == "none") {
                                    $ch = false;
                                    echo "<script>document.getElementById('docTErr').style.display='inline-block';</script>";
                                }
                                if ($ch) {


                                    $Fname = $_POST['txtFirstName'];
                                    $Lname = $_POST['txtLastName'];
                                    $Email = $_POST['txtEmail'];
                                    $Password = $_POST['txtPassword'];
                                    $Dob = $_POST['dateOfBirth'];
                                    $Gender = $_POST['txtGender'];
                                    $Blood = $_POST['bloodt1'];
                                    $Weight = $_POST['txtWeight'];
                                    $State = $_POST['dCity'];
                                    $Mobile = $_POST['txtMobNumber'];
                                    $City = $_POST['city'];
                                    $Address = $_POST['txtAddress'];
                                    $DocType = $_POST['op'];
                                    $DocNumber = $_POST['txtDocNumber'];
                                    $Photo = $_FILES['dPhoto']['name'];
                                    $DocUpload = $_FILES['docUpload']['name'];
                                    move_uploaded_file($_FILES['dPhoto']['tmp_name'], "Upload_Data/Donor_Image/" . $_FILES['dPhoto']['name']);
                                    move_uploaded_file($_FILES['docUpload']['tmp_name'], "Upload_Data/Donor_Doc/" . $_FILES['docUpload']['name']);
                                    $sqlStr = "INSERT INTO blooddonor VALUES('$Fname','$Lname','$Email','$Password','$Dob','$Gender','$Blood',$Weight,'$State',$Mobile,'$City','$Address','$DocType','$DocNumber','$Photo','$DocUpload');";
                                    if ($con->query($sqlStr) == true) {
                                        echo "<script>alert('Donor Sucessfully Register');</script>";
                                    }
                                    else
                                        echo "<script>alert('F');</script>";
                                }
                            }
                            ?>

                        </div>
                    </div>   
                    </body>
                    </html>



