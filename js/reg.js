

    
   
document.getElementById("get-started").addEventListener('click',function(){
       
    document.getElementById("popup").style.display="flex";
       
       
       
   });

document.getElementById("close").addEventListener('click',function(){
    
    
    document.getElementById("popup").style.display="none";
    
    
});
 
  


var x=document.getElementById("user");

x.addEventListener('change',function(){
    
    
     var e = document.getElementById("user-type");
    var user = e.options[e.selectedIndex].value; 
    
    
    if(user==1){
    
   document.getElementById("line").style.display="none";
   document.getElementById("organazaion").style.display="none";
    document.getElementById("personal").style.transform="translate(190px,0)";
    document.getElementById("personal").style.transition="linear 0.3s";
   
  
    
    
         }

    else if(user==2){
        document.getElementById("personal").style.transform="translate(-40px,0)";
        document.getElementById("personal").style.transition="linear 0.3s";
    document.getElementById("line").style.display="";
    document.getElementById("organazaion").style.display="";
     
    
    
    
}
  } );

  
    

    
    
    

     