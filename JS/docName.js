function docNumber(DocName)
{
    if(DocName=="Adhar")
    {
        document.getElementById("docName").innerHTML="Adhar Number*";
        document.getElementById("docUpName").innerHTML="Adhar Upload*";
        document.getElementById("docUpload").disabled=false;
        document.getElementById("docN").disabled=false;
    }
    if(DocName=="Voter")
    {
        document.getElementById("docName").innerHTML="Voter card number*";
  document.getElementById("docUpName").innerHTML="Voter card Upload*";
        document.getElementById("docUpload").disabled=false;
        
    document.getElementById("docN").disabled=false;    
    }
    if(DocName=="DL")
    {
        document.getElementById("docName").innerHTML="DL Number";
         document.getElementById("docUpName").innerHTML="DL Upload*";
        document.getElementById("docUpload").disabled=false;
    
       document.getElementById("docN").disabled=false;    
    }
    if(DocName=="none")
    {
        document.getElementById("docName").innerHTML="Select Doc type first";
        document.getElementById("docN").disabled=true;
        document.getElementById("docUpName").innerHTML="Select Doc type first";
        document.getElementById("docUpload").disabled=true;
    
    }
}
