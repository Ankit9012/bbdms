<?php
include 'include/menuHeader.php';
include 'include/dbConnect.php';
?>
<html>
    <head> 

        <script>
            function myMap() {
                var pos=new google.maps.LatLng(27.883987, 78.076424);
                var mapOptions = {
                    center:  pos,
                    zoom: 17,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                }
                
                var map = new google.maps.Map(document.getElementById("map"), mapOptions);
                var marker = new google.maps.Marker({
                    position: pos,
                    title:"bloodBank Office"
                });

                // To add the marker to the map, call setMap();
                marker.setMap(map);
                
                

            
            }
            function conBtn()
            {
                if(document.getElementById("conPolicyCheck").checked)
                {
                    document.getElementById("btnConSubmit").disabled=false;
                    document.getElementById("btnSubmit").style.cursor="pointer";

                }
                else
                {
                    document.getElementById("btnConSubmit").disabled=true;
                           document.getElementById("btnSubmit").style.cursor="not-allowed";
                }
            }
            function conBtn2()
            {
                if(document.getElementById("conPolicyCheck").checked)
                {
                    document.getElementById("conPolicyCheck").checked=false;
                           document.getElementById("btnSubmit").style.cursor="not-allowed";
                    
                }
                else
                {       
                    document.getElementById("conPolicyCheck").checked=true;
                                         document.getElementById("btnSubmit").style.cursor="pointer";

                    
                }  
                if(document.getElementById("conPolicyCheck").checked)
                    document.getElementById("btnConSubmit").disabled=false;
                else
                    document.getElementById("btnConSubmit").disabled=true;
                
            }
                
        </script>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAdUfNRKOsoG855PrpmE7dWst1gtrPbKKU&callback=myMap"
        type="text/javascript"></script>
        <title>bloodBank Contact Us</title>
        <link rel="stylesheet" type="text/css" href="CSS/contactUs.css"/>
    </head>
    <body onLoad="myMap();">
        <div>
            <img src="resource/sd.jpg" class="ConBack"></img>
            <div style="position: relative; background-color: #34AB01; top:-430px; width: 45%; height: 47%;float: right; margin-right: 50px; ">
                <h2 class="bubble_text">HELLO </h2>
                <h4 class="bubble_Text_msg"> IF YOU WANT TO TALK TO US ABOUT YOUR QUERY, WE WOULD LOVE TO HEAR FROM YOU.</h4>
                <div class="triangle-up"></div>
            </div>
        </div>
        <div  class="op2">
            <div>
                <a class="slash">
                    02/
                    <div class="conOption">SEND US<br/>A MESSAGE</div>
                    <div>
                        <form action=""  method="POST">
                            <div class="error" id="nameErr">Only alphabet and whitespace allowed!</div>
                            <span class="conForm">Your Name</span><span class="conForm2"> (required)</span>
                            <input type="text" name="txtConName" id="nameBox" required="required" value="<?php
if (isset($_POST['submit'])) {
    echo $_POST['txtConName'];
}
?>" class="conFormBox"></input>
                            <div class="error" id="emailErr">Invalid Email! ex. abc@bloodbank.com</div>
                            <span class="conForm">E-Mail Address</span><span class="conForm2"> (required)</span>
                            <input type="text" name="txtEmail" id="emailBox" required="required" value="<?php
                                   if (isset($_POST['submit'])) {
                                       echo $_POST['txtEmail'];
                                   }
?>" class="conFormBox"/>
                            <div class="error" id="mobileErr">Error! Only number allowed.</div>
                            <span class="conForm">Mobile Number</span><span class="conForm2"> (required)</span>
                            <input type="text" name="txtMobileNumber" id="mobileBox" required="required" class="conFormBox" value="<?php
                                   if (isset($_POST['submit'])) {
                                       echo $_POST['txtMobileNumber'];
                                   }
?>"></input>
                            <div class="error" id="messageErr"></div>
                            <span class="conForm">Your Message</span><span class="conForm2"> (required)</span>
                            <textarea  rows="5" type="text" required="required" name="txtMessage" id="txtMessage" class="conFormBox"></textarea>
                            <input type="checkbox" name="conPolicyCheck" id="conPolicyCheck" class="check" onChange="conBtn();" /><div class="conPolicy" onClick="conBtn2();"> I have read, understood and agree to the terms outlined in the Privacy Policy</div>
                            <button type="submit" name="submit" id="btnConSubmit" class="btnConSubmit" disabled>SEND MESSAGE</button>
                        </form>
                    </div>
                    <?php
                    if (isset($_POST['submit'])) {
                        $result = $con->query("Select max(Id) from contactus;");
                        $MaxID = $result->fetch_row();
                        if ($MaxID[0] == NULL)
                            $MaxID[0] = 0;
                        else
                            $MaxID[0] = $MaxID[0] + 1;
                        $conName = $_POST['txtConName'];
                        $conEmail = $_POST['txtEmail'];
                        $conMobile = $_POST['txtMobileNumber'];
                        $conMessage = $_POST['txtMessage'];
                        $toData = true;
                        //echo "<script>document.getElementById('emailErr').innerHTML='Blank field not allowed.'; document.getElementById('emailErr').style.display='block';</script>";


                        if (empty($_POST['txtConName'])) {
                            $toData = false;
                            echo "<script>document.getElementById('nameErr').innerHTML='Please enter your name !.'; document.getElementById('nameErr').style.display='block';</script>";
                        }
                        if (!(preg_match("/^[a-z,' ']+$/i", $_POST['txtConName'])) && !(empty($_POST['txtConName']))) {
                            $toData = false;
                            echo "<script>document.getElementById('nameErr').innerHTML='Invalid Name entered!.'; document.getElementById('nameErr').style.display='block';</script>";
                        }

                        if (empty($_POST['txtEmail'])) {
                            $toData = false;
                            echo "<script>document.getElementById('emailErr').innerHTML='Please enter your E-Mail!.'; document.getElementById('emailErr').style.display='block';</script>";
                        }
                        if (!filter_var($conEmail, FILTER_VALIDATE_EMAIL) && !(empty($_POST['txtEmail']))) {
                            $toData = false;
                            echo "<script>document.getElementById('emailErr').style.display='block';document.getElementById('emailErr').innerHTML='Error! Invalid E-mail address..';</script>";
                        }
                        if (empty($_POST['txtMobileNumber'])) {
                            $toData = false;
                            echo "<script>document.getElementById('mobileErr').innerHTML='Please enter your Mobile Number!.'; document.getElementById('mobileErr').style.display='block';</script>";
                        }
                        if (!(preg_match("/^[6-9][0-9]{9}$/", $_POST['txtMobileNumber'])) && !(empty($_POST['txtMobileNumber']))) {
                            $toData = false;
                            echo "<script>document.getElementById('mobileErr').innerHTML='Provide valid Mobile Number!.'; document.getElementById('mobileErr').style.display='block';</script>";
                        }

                        if (empty($_POST['txtMessage'])) {
                            $toData = false;
                            echo "<script>document.getElementById('messageErr').innerHTML='Write about your problem/query!.'; document.getElementById('messageErr').style.display='block';</script>";
                        }
                        if ($toData) {
                            echo "INSERT INTO contactus VALUES($MaxID[0],'" . $conName . "','" . $conEmail . "'," . $conMobile . ",'" . $conMessage . "','" . date('d/m/y') . "','P');";
                            $query = $con->query("INSERT INTO contactus VALUES($MaxID[0],'" . $conName . "','" . $conEmail . "'," . $conMobile . ",'" . $conMessage . "','" . date('d/m/y') . "','P');");
                            echo "<script>document.getElementById('nameBox').value='';document.getElementById('emailBox').value='';document.getElementById('mobileBox').value='';document.getElementById('txtMessage').value='';alert('Thank you for your interest. We will contact you as soon as possible.');</script>";
                        } else {
                            echo "<script>alert('Invalid details provided! Please review your details.');</script>";
                        }
                    }
                    ?>
                </a>
            </div>


        </div>
        <div  class="op1">
            <div>
                <a class="slash">
                    01/

                    <div class="conOption">GET IN<br/>TOUCH</div>

                </a>
                <span style="position: relative; top: -105px;font-size:21px; color: white;"> We are very approachable and would love to speak to you. Feel free to call, send us an email of just simply complete the enquiry form.</span>
                <div class="conAddress" id="conAddress">  <?php $rs = $con->query("Select conAddress from tblcontactusinfo;");
                    $row = $rs->fetch_row();
                    echo $row[0]; ?></div>
                <table>
                    <tr> 
                        <td> <img src="resource/call2.png"/></td>
                        <td class="moreCon" id="conMobile">  <?php $rs = $con->query("Select conMobile from tblcontactusinfo;");
                    $row = $rs->fetch_row();
                    echo $row[0]; ?></td>
                    </tr>
                    <tr><td></td><td></td><td></td></tr>
                    <tr><td></td><td></td><td></td></tr>


                    <tr>
                        <td>
                            <img src="resource/mail.png"/>
                        </td>
                        <td class="moreCon" id="conEmail">
<?php $rs = $con->query("Select conEmail from tblcontactusinfo;");
$row = $rs->fetch_row();
echo $row[0]; ?>

                        </td>
                    </tr>

                </table>
            </div>

        </div>     

        <div class="mapDraw" id="map"></div>


        <div  class="slash2">
            <div class="slash">03</div>    

            DROP IN,<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SAY HEY!</div>

    </div>


</body>
</html>
