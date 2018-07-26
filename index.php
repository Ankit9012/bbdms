<?php
include 'include/menuHeader.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <script>
            function openPage(color,id,pageName) {
            

                document.getElementById("disContent").style.backgroundColor =color;
                document.getElementById(id).style.backgroundColor =color;



            }

        </script>

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="CSS/heading.css"/>
        <link rel="stylesheet" type="text/css" href="CSS/header.css"/>
        <title></title>
    </head>
    <body>


        <div style="width:100%; height: 20px; position: absolute; background-color: transparent; bottom: -13%; " id="poi">
        </div>
        <div > <img src="resource/back24.jpg"  class="back"  ></img>
            
            <center><div class="msg">"Tears of a mother cannot save her <br/>child, but your blood can."
                    <br/>
                    <a href="#poi">
                    <button class="btn">
                        Why Become Donor?
                    </button></a>
                    <a href="newDonor.php">
                        <button class="btnSplit0">
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Donate Now
                        </button>
                        <button class="btnSplit" >
                            <img src="resource/bloodDrop.png" style="height: 30px; width: 30px"/>
                        </button>
                    </a>
                </div></center>
        </div>

        <div class="extraMenu">
            <table  align="center"> 
                <th ><a href="#po" class="sub"><img src="resource/moreInfo.png" height="45px" width="45px" ></img><br>Learn More</a></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th><a href="#po" class="sub"><img src="resource/myth.png" height="45px" width="45px" id="res"><br/>Break the Myth</img></a></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th><a href="#po" class="sub"><img src="resource/ceriteria.png" height="45px" width="45px"><br/>Criteria</img></a></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th><a href="#po" class="sub"><img src="resource/universal.png" height="45px" width="45px"><br/>Universal Donor</img></a></th>
                </tr>
            </table>
        </div>
        <div style="position: relative;width: 100%; height: 85%; " >
            <div style="position: absolute; width: 25%; height: 50%;  background-color: red;top: 10%; right: 5%;border-radius: 15px; "><img src="resource/W2.jpg" style="height: 100%; width: 100%; border-radius: 15px; border-style: groove; border-width: 2px; border-color: gray;"/></div>
            <div style="position: absolute; width: 25%; height: 50%;  background-color: blue; bottom: 5%; right: 15%; border-radius: 15px;"><img src="resource/W.jpg" style="height: 100%; width: 100%; border-radius: 15px; border-style: groove; border-width: 2px; border-color: grey;"/> </div>
            <div style="width: 60%; height: 80px; position: absolute; top: 10%;  background-color:  white;  color:grey; font-family: Arial,Helvetica,sans-serif; font-size: 5vw;  letter-spacing: 10px; padding-left: 30px; opacity: 0.3;">Why Donate?</div>
            <div style="position: absolute;  top: 15%; width: 60%; height: 50px; color: black; font-family: verdana; font-weight: bold; font-size: 20px;letter-spacing: 1px; padding-left: 100px;">With your Donation</div>
            <div style="position: absolute; top:24%; width: 55%; height: auto; padding-left: 60px;font-family: Arial,Helvetica,sans-serif; color: #2e1845; font-weight: bold; font-size: 30px; line-height: 40px;  " > 
           
            India fell short of 1.9 million units of blood in 2016-17  that could have aided more than 320,000 heart surgeries or 49,000 organ transplants.</div>
            <div style="position: absolute; background-color: blue; width: 8%; left: 4.5%; height: 2px;bottom: 50%;"></div>
            <div style="position: absolute; bottom: 15%; width: 50%; padding-left:4%;  font-family:'Poppins', sans-serif; font-weight: 400;font-size: 14px;line-height: 1.857; color: #626c84;">
                There is a constant need for regular blood supply because blood can be stored for only a limited time before use. Regular blood donations by a sufficient number of healthy people are needed to ensure that safe blood will be available whenever and wherever it is needed.<br/>

Blood is the most precious gift that anyone can give to another person  the gift of life. A decision to donate your blood can save a life, or even several if your blood is separated into its components  red cells, platelets and plasma which can be used individually for patients with specific conditions.
        </div>
        <a href="newDonor.php">
                        <button style=" background-color: darkred; position:absolute; left: 40%;  bottom: 2%; border: none; border-radius:50px; width: auto; height: auto; padding: 15px 30px 15px 30px;  font-family:Arial,Helvetica,sans-serif; font-size: 13px; font-weight: bold; letter-spacing: 0.2px; cursor: pointer; color: white; text-align: right; ">
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Donate Now
                        </button>
                        <button style="background-color: darkred; position:absolute; left: 40%;  bottom: 2%; border: none; border-radius:50px; width: auto; height: auto; padding: 10px 15px 5px 20px;  font-family:Arial,Helvetica,sans-serif; font-size: 13px; font-weight: bold; letter-spacing: 0.2px; cursor: pointer; color: white; text-align: right;" >
                            <img src="resource/bloodDrop.png" style="height: 30px; width: 30px"/>
                        </button>
                    </a>
        </div>
        
        <div style="position: absolute; width: 102%; height: auto; opacity:0.4; " id="po">
            <img src="resource/cri_Ben.jpg" style="width:100%; height: 100%; margin-left: -8px;"/>
        </div>
            <div style="width: 102%; height: 2%; background-color: transparent; margin-top: 9%;" ></div>
       

       

        <div align="center">
            <button  class="Collpbtn" id="MI">Learn More</button>
            <div class="Collp">
                Donating blood is safe and simple. It takes approximately 10-15 minutes to complete the blood donation process. Any healthy adult between 18 years and 60 years of age can donate blood. This is what you can expect when you are ready to donate blood:
                <ul>
                    <li>
                        You walk into a reputed and safe blood donation centre or a mobile camp organized by a reputed institution.
                    </li>
                    <li>A few questions will be asked to determine your health status (general questions on health, donation history etc). Usually you will be asked to fill out a short form.</li>
                    <li>Then a quick physical check will be done to check temperature, blood pressure, pulse and hemoglobin content in blood to ensure you are a healthy donor.</li>
                    <li>If found fit to donate, then you will be asked to lie down on a resting chair or a bed. Your arm will be thoroughly cleaned. Then using sterile equipments blood will be collected in a special plastic bag. Approximately 350 ml of blood will be collected in one donation. Those who weigh more than 60 Kg can donate 450 ml of blood.</li>
                    <li>Then you must rest and relax for a few minutes with a light snack and something refreshing to drink. Some snacks and juice will be provided.</li>
                    <li>Blood will be separated into components within eight hours of donation</li>
                    <li>The blood will then be taken to the laboratory for testing.</li>
                    <li>The blood will then be taken to the laboratory for testing.</li>
                    <li>The blood is now ready to be taken to the hospital, to save lives</li>


                </ul>

            </div>

            <button class="Collpbtn" id="M">Break the Myth</button>
            <div class="Collp">
                <ul type="square">

                    <li>   <u> Myth:</u> Being a vegetarian, means that the blood does not have enough iron and cannot be donated. </li>
                    <li>    <u>Fact:</u> Vegetarians can donate blood. The iron needed is taken from body stores and once a balanced diet is maintained is replaced after donation. This usually normally takes a month or so.</li>
                    <br/>
                    <li>   <u> Myth:</u> you cannot take part in sports or other physical activities after donating blood.</li>
                    <li>    <u>Fact:</u>  Giving blood does not interfere with ability to perform physically. Advice to avoid heavy lifting or strenuous workouts for the rest of the day is given after the donation. You can get back on track the next day.</li>
                    <br/>
                    <li>   <u> Myth:</u> Heavy people are healthier and have more blood give.</li>
                    <li>    <u>Fact:</u>  Being overweight makes people less healthy. Overweight people do not have more blood.</li>
                    <br/>
                    <li>   <u> Myth:</u> Age is a deterrent to blood donation.</li>
                    <li>    <u>Fact:</u>  Anyone up to the age of 60 who is fit and healthy can give blood.</li>
                </ul>


            </div>


            <button class="Collpbtn" id="C">Criteria</button>
            <div class="Collp">
                DO donate blood, only if you satisfy all of the following condition.
                <ul type="circle">
                    <li>You are between age group of 18-60 years.</li>
                    <li>Your weight is 45 kgs or more</li>
                    <li>Your hemoglobin is 12.5 gm% minimum.</li>
                    <li>Your last blood donation was 3 or more months earlier. </li>
                    <li>You are healthy and have not suffered from malaria, typhoid or other transmissible disease in the recent past.</li>
                </ul>

            </div>

            <button class="Collpbtn"  id="U">Universal Donor</button>
            <div class="Collp">
                <ul type="square">
                    <li>  The most common blood type is O, followed by type A.</li>

                    <li> Type O individuals are often called "universal donors" since their blood can be transfused into persons with any blood type.</li>
                    <li>Those with type AB blood are called "universal recipients" because they can receive blood of any type.</li>

                    <li>However, since approximately twice as many people in the general population have O and A blood types, a blood bank's need for this type of blood increases exponentially.</li>
                </ul>

            </div>
        </div>
        <script>
            var coll = document.getElementsByClassName("Collpbtn");
            
            var i;

            for (i = 0; i < coll.length; i++) {
                coll[i].addEventListener("click", function() {
                    this.classList.toggle("active");
                    var content = this.nextElementSibling;
                    if (content.style.display === "block") {
                        content.style.display = "none";
                    } else {
                        content.style.display = "block";
                    }
                });
            }
        </script>

        <div id="disContent">

        </div>
        <div style="position: relative; bottom: 50px;background-color:whitesmoke ;width:  102%; margin-left: -8px; height: 10%;">
            <center> <div style="position: relative;"><img src="resource/SSAM.jpg"/> </center>
            </div>
        </div>










        <?php
        // put your code here
        ?>
    </body>
</html>
