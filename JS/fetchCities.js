function fetchCities(stateName)
{
    var req=new XMLHttpRequest();
    req.open("POST","include/getCities.php",true);
    req.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    req.send("stName="+stateName);
    
req.onreadystatechange=function()
    {
        if(req.readyState==4 && req.status==200)
            {
                document.getElementById("cityName").innerHTML=req.responseText;
            }
    };
}