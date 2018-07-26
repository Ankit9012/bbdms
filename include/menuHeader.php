<html> 
    <head>
        <script>
            
            var smallMenuShow=1;
            
            
            function menuHide()
            {
                  
                if(window.outerWidth<1100)
                {
                    document.getElementById("menuBar").style.display="none";
                    document.getElementById("smallMenuBtn").style.display="block";
                    document.getElementById("blackBar").style.display="none";
                        
                }
                if(window.outerWidth>1100)
                {
                    document.getElementById("menuBar").style.display="block";
                    document.getElementById("smallMenuBtn").style.display="none";
                    document.getElementById("SMenu").style.display="none";
                }
            }
            function smallMenu2()
            {
                if(smallMenuShow==1)
                {
                    document.getElementById("head").style.display="none";
                    document.getElementById("SMenu").style.display="block"; 
                    smallMenuShow=0;
                   
                }
                else
                {
                    document.getElementById("head").style.display="block";
                    document.getElementById("SMenu").style.display="none";
                    smallMenuShow=1;
                }
             
            }
            
                

        </script>
        <link rel="stylesheet" type="text/css" href="CSS/header.css"/>
    </head>
    <body onresize="menuHide();" onLoad="menuHide();" >
          
        <div class="head" class="background" id="head" >
          

            <div  class="logo"><a href="index.php"><img src="resource/logo.png" height="105px" width="105px" class="resize"  ></img></a></div>
            <div class="logot">bloodBank</div>
            <div class="headbar" id="menuBar">

                <table    width="750"     >
                    <tr >



                        <td align="center"><a href="index.php"  class="m">Go to Home</a></td>

                        <td align="right"><a href="bloodSearch.php"><img src="resource/search9.png" height="20px" width="20px" style="padding-top: 7px"></a></img></td>
                        <td align="left"><a href="bloodSearch.php" class="m" >Search Blood</a></td>
                        <td align="right" rowspan="2"><a href="aboutUs.php"><img src="resource/about2.png" height="20px" width="20px" style="padding-top: 7px"></a></img></td>

                        <td align="left"><a href="contactUs.php"  class="m">Contact Us</a></td>

                        <td align="center">
                            <a href="newDonor.php">
                                <button style=" background-color: darkred; position:absolute; margin-left: -5%;  bottom: -5px; border: none; border-radius:50px; width: auto; height: auto; padding: 15px 10px 15px 0px;  font-family:Arial,Helvetica,sans-serif; font-size: 13px; font-weight: bold; letter-spacing: 0.2px; cursor: pointer; color: white; text-align: right; ">
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Donate Now
                                </button>
                                <button style="background-color: transparent; position: relative;   bottom: -0px;  left: -40%;border: none; border-radius:50px; width: auto; height: auto; padding: 0px 30px 0px 15px;  font-family:Arial,Helvetica,sans-serif; font-size: 13px; font-weight: bold; letter-spacing: 0.2px; cursor: pointer; color: white; z-index: 1;" >
                                    <img src="resource/bloodDrop.png" style="height: 30px; width: 30px"/>
                                </button>
                            </a></td>

                    </tr>
                </table>


            </div>
        </div>
        <button   class="smallMenubtn" id="smallMenuBtn" onClick="smallMenu2();" >
            <hr width="25px" height="10px" color="white"/>
            <hr width="25px" height="10px" color="white"/>
            <hr width="25px" height="10px" color="white"/>
        </button>
        <div class="smallMenu" id="SMenu" >
            <center>  <div> <img src="resource/logo.png" height="105px" width="105px" style="margin-bottom: 10px;" ></img></div>
                <span class="logoText2">bloodBank</span>
                <br/><br/>

                <hr/>
                <h1 class="menu2">Donor Registration</h1>
                <hr/>

                <h1 class="menu2">Donor's Login</h1>
                <hr/>
                <h1 class="menu2">Blood Search</h1>      
                <hr/>
                <h1 class="menu2">Contact Us</h1>
                <hr/>
                <h1 class="menu2">Why Become Donor</h1>
                <hr/>     
            </center>
        </div>
             <div  id="blackBar" style="width:102%; height: 10%; margin-left: -8px; position: fixed; top: 6.5%; background-color: black; opacity: 0.5;z-index: 2500"></div>
    </body>
</html>
