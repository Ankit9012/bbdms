function loadPhoto(ImageName)
{
    if(ImageName.files && ImageName.files[0])
        {
            var reader=new FileReader();
            reader.onload=function(e)
            {
            document.getElementById("donorPhoto").src=e.target.result;    
        };
            reader.readAsDataURL(ImageName.files[0]);
            
        }
        else
            {
                document.getElementById("donorPhoto").src="resource/defaultD.png";
            }
    
}