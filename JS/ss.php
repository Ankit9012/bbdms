<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
        </script>
        <script>
    
            $(document).ready(function(){
                $("#show0").click(function(){
                    $("#panel0").slideToggle("Fast");
                });
       
                $("#show1").click(function(){
                    $("#panel1").slideToggle("Fast");
                });
       
                $("#show2").click(function(){
                    $("#panel2").slideToggle("Fast");
                });
                $("#show3").click(function(){
                    $("#panel3").slideToggle("Fast");
                });
                $("#show4").click(function(){
                    $("#panel4").slideToggle("Fast");
                });
                $("#show5").click(function(){
                    $("#panel5").slideToggle("Fast");
                });
                $("#show6").click(function(){
                    $("#panel6").slideToggle("Fast");
                });
                $("#show7").click(function(){
                    $("#panel7").slideToggle("Fast");
                });
                $("#show8").click(function(){
                    $("#panel8").slideToggle("Fast");
                });
                $("#show9").click(function(){
                    $("#panel9").slideToggle("Fast");
                });
       
            });
        </script>
    </head>
    <body>
        <?php
        for ($i = 0; $i < 10; $i++) {
            $arr[$i] = $i . ".jpg";
        }
        ?>

        <div  style=" position: absolute; left: 0; background-color: maroon; color: white; width: 18%; float: center;font-weight: bold; padding: 10px;  " id="show0"><center>Mixed Fruit</center>
            <div  style="  position: relative; color: white; display: none;padding: 10px;"id="panel0"><center><img src="<?php echo $arr[0]; ?>" height="190px" width="230px"/></center></div></div>

        <div  style=" position: absolute; left: 20%; background-color: maroon; color: white; width: 18%; float: center;font-weight: bold; padding: 10px;  " id="show1"><center>Annar</center>
            <div  style="  position: relative; color: white; display: none;padding: 10px;"id="panel1"><center><img src="<?php echo $arr[1]; ?>" height="190px" width="230px"/></center></div></div>

        <div  style="position: absolute; left: 40%;background-color: maroon; color: white; width: 18%; float: center;font-weight: bold; padding: 10px;" id="show2"><center>Apple</center>
            <div  style=" position: relative;color: white; display: none;padding: 10px;"id="panel2"><center><img src="<?php echo $arr[2]; ?>" height="190px" width="230px"/></center></div></div>
        
        <div  style=" position: absolute; left: 60%; background-color: maroon; color: white; width: 18%; float: center;font-weight: bold; padding: 10px;  " id="show3"><center>Banana</center>
            <div  style="  position: relative; color: white; display: none;padding: 10px;"id="panel3"><center><img src="<?php echo $arr[3]; ?>" height="190px" width="230px"/></center></div></div>

        <div  style="position: absolute; left: 80%;background-color: maroon; color: white; width: 18%; float: center;font-weight: bold; padding: 10px;" id="show4"><center>Grapes</center>
            <div  style=" position: relative;color: white; display: none;padding: 10px;"id="panel4"><center><img src="<?php echo $arr[4]; ?>" height="190px" width="230px"/></center></div></div>
            
 <div  style="position: absolute; left: 0; top: 50%;background-color: maroon; color: white; width: 18%; float: center;font-weight: bold; padding: 10px;" id="show5"><center>Lichi</center>
            <div  style=" position: relative;color: white; display: none;padding: 10px;"id="panel5"><center><img src="<?php echo $arr[5]; ?>" height="190px" width="230px"/></center></div></div>
            
             <div  style="position: absolute; left: 20%; top: 50%;background-color: maroon; color: white; width: 18%; float: center;font-weight: bold; padding: 10px;" id="show6"><center>Salad</center>
            <div  style=" position: relative;color: white; display: none;padding: 10px;"id="panel6"><center><img src="<?php echo $arr[6]; ?>" height="190px" width="230px"/></center></div></div>
            
             <div  style="position: absolute; left: 40%; top: 50%;background-color: maroon; color: white; width: 18%; float: center;font-weight: bold; padding: 10px;" id="show7"><center>Lemon</center>
            <div  style=" position: relative;color: white; display: none;padding: 10px;"id="panel7"><center><img src="<?php echo $arr[7]; ?>" height="190px" width="230px"/></center></div></div>
            
             <div  style="position: absolute; left: 60%; top: 50%;background-color: maroon; color: white; width: 18%; float: center;font-weight: bold; padding: 10px;" id="show8"><center>Papaya</center>
            <div  style=" position: relative;color: white; display: none;padding: 10px;"id="panel8"><center><img src="<?php echo $arr[8]; ?>" height="190px" width="230px"/></center></div></div>
            
             <div  style="position: absolute; left: 80%; top: 50%;background-color: maroon; color: white; width: 18%; float: center;font-weight: bold; padding: 10px;" id="show9"><center>Strawberry</center>
            <div  style=" position: relative;color: white; display: none;padding: 10px;"id="panel9"><center><img src="<?php echo $arr[9]; ?>" height="190px" width="230px"/></center></div></div>
    </body>
</html>
