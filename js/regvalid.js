
 
 var arr='';
 var userv=2;
 var ful_names= 1;
 var emails = 1;
 var contacts= 1;
 var usernames= 1;
 var passwords= 1;
 var rpasswords= 1;
 var cnames=1;
 var c_countrys=1;
 var c_adds =1;
 var c_lis=1;
 var sysu=1;
 var ckbox=null;

 var ful_namev="";
 var emailv = "";
 var contactv = "";
 var usernamev = "";
 var passordv = "";
 var rpassordv = "";
 var cnamev ="";
 var c_countryv ="";
 var c_addv = "";
  var c_liv = "";
   var params=null;


function selectedItem(){

    var forms=document.getElementById("form");
    
    var ful_name= document.getElementById("per-full-name");
    var email = document.getElementById("per-email");
    var contact= document.getElementById("per-conatct");
    var username= document.getElementById("per-username");
    var password= document.getElementById("per-Password");
    var rpassword= document.getElementById("per-Password-re");
    
    var cname=document.getElementById("org-name");
    var c_country=document.getElementById("org-country");
    var c_add =document.getElementById("org-add");
    var c_li=document.getElementById("org-Licence");
    var x=document.getElementById("user");
    var chk=document.getElementsByClassName("check");
      ckbox=document.getElementById("chk");
   


    for(i=0;i<2;i++){
    
        chk[i].addEventListener('click',function(){

            arr=getvalue();
        
            
         


        });


    }

    rpassword.addEventListener('input',function(){
       
       passordv=password.value;
       rpassordv=rpassword.value;

       if(passordv!=""){

         if(passordv!=rpassordv){ seterror(rpassword,"not match");rpasswords=1; }
         else{ setsuc(rpassword);rpasswords=0;}



       }


   });


    


    x.addEventListener('change',function(){
        
        
         var e = document.getElementById("user-type");
         userv = e.options[e.selectedIndex].value; 
           
     
    });    
    
   
    

  
  
  
  forms.addEventListener('submit',function(e){
   
    e.preventDefault();
   
     
   



    if(userv==1){

       admin();
  
        if( ful_names!=1 && emails!=1 &&contacts!=1 && usernames!=1 && passwords!=1 && rpasswords!=1){


           params='name='+ful_namev+'&email='+emailv+'&conatct='+contactv+'&username='+usernamev+'&password='+passordv+'&usertype='+userv;

           var res=loadResponsePost(params);

           if(res!=0){

    
            window,location.href="pages/confirmation.html";
         
         
         
             }
           

       
         }



       
    }   
    
    else if(userv==2)
    {



  Client();

   if( ful_names!=1 && emails!=1 &&contacts!=1 && usernames!=1 && passwords!=1 && rpasswords!=1 && cnames!=1 && c_countrys!=1 && c_adds!=1 && c_lis!=1 && sysu!=1){


 
   

  

    params='name='+ful_namev+'&email='+emailv+'&conatct='+contactv+'&username='+usernamev+'&password='+passordv+'&cname='+cnamev+'&c_country='+c_countryv+'&c_add='+c_addv+'&c_li='+c_liv+'&usertype='+userv+'&system='+arr; 
    var res=loadResponsePost(params);

    if(res!=0){

    
   window,location.href="pages/confirmation.html";



    }
  
    
 }
    


    }
   

    
   

  
  
  
  
  });
  
  function  Client()
  {
    
    ful_namev=ful_name.value.trim(); 
     emailv = email.value; // document.getElementById("per-email").value;
     contactv = contact.value;
     usernamev = username.value;
     passordv = password.value;
     rpassordv = rpassword.value;
      cnamev =cname.value; 
     c_countryv =c_country.value; 
     c_addv = c_add.value;
      c_liv = c_li.value;
    

if(ful_namev==""){
    
    seterror(ful_name,"cant emty");
   
    ful_names=1;


} else{
          
    setsuc(ful_name);
    ful_names=0;
   
}       

   

            
               

                if(passordv==""){

                    seterror(password,"cant emty");
                
                    passwords=1;
                 
                
                }else{
                          
                    setsuc(password);
                    passwords=0;
                }


                if(rpassordv==""){

                    seterror(rpassword,"cant emty");
                    rpasswords=1;
                
                
                }else{
                          
                    setsuc(rpassword);
                    rpasswords=0;
                }


                if(passordv!=""){


                    if(passordv!=rpassordv){

                        seterror(rpassword,"Password not match");
                        rpasswords=1;
                    
                    
                    }else{
                              
                        setsuc(rpassword);
                        rpasswords=0;
                    }



                }



                
    if(emailv==""){

        seterror(email,"cant emty");
        emails=1;
    
    
    } else{
              
       setsuc(email);
       emails=0;
    } 
    if(!isemail(emailv))
    {

        seterror(email,"Invalid email");
        emails=1;
    } 
    else{
     setsuc(email);
    emails=0;
    }      
    
       



        if(contactv==""){

            seterror(contact,"cant emty");
            contacts=1;
        
        
        }else{
                  
            setsuc(contact);
            contacts=0;
        }
   
        
            
            if(usernamev==""){

                seterror(username,"cant emty");
            
                usernames=1
            
            } else{
                      
                setsuc(username);
                usernames=0;
            }       
   
                
          
    
   
    
  
    if(cnamev==""){
    
        seterror(cname,"cant emty");
    
        cnames=1;
    
    } else{
              
        setsuc(cname);
        cnames=0;
    }       

    if(c_countryv==""){
    
        seterror(c_country,"cant emty");
    
        c_countrys=1;
    
    } else{
              
        setsuc(c_country);
        c_countrys=0;
    }       

    if(c_addv==""){
    
        seterror(c_add,"cant emty");
        c_adds=1;
    
    } else{
              
        setsuc(c_add);
        c_adds=0;
    }       

    if(c_liv==""){
    
        seterror(c_li,"cant emty");
        c_lis=1;
    
    
    } else{
              
        setsuc(c_li);
        c_lis=0;
    }       
   

  if(getvalue()==""){

    ckbox.className="system-cjk error";
    sysu=1;
  }
  else{

    ckbox.className="system-cjk";
sysu=0;
  }


    



  
    }

    function  admin(){

       
         ful_namev=ful_name.value.trim(); 
         emailv = email.value; // document.getElementById("per-email").value;
         contactv = contact.value;
         usernamev = username.value;
        passordv = password.value;
         rpassordv = rpassword.value;
    
       
    
    
    
if(ful_namev==""){
    
    seterror(ful_name,"cant emty");
   
    ful_names=1;


} else{
          
    setsuc(ful_name);
    ful_names=0;
   
}       

   

            
               

                if(passordv==""){

                    seterror(password,"cant emty");
                
                    passwords=1;
                 
                
                }else{
                          
                    setsuc(password);
                    passwords=0;
                }


                if(rpassordv==""){

                    seterror(rpassword,"cant emty");
                    rpasswords=1;
                
                
                }else{
                          
                    setsuc(rpassword);
                    rpasswords=0;
                }

                if(passordv!=""){


                    if(passordv!=rpassordv){

                        seterror(rpassword,"Password not match");
                        rpasswords=1;
                    
                    
                    }else{
                              
                        setsuc(rpassword);
                        rpasswords=0;
                    }



                }

                


                
    if(emailv==""){

        seterror(email,"cant emty");
        emails=1;
    
    
    } else{
              
       setsuc(email);
       emails=0;
    } 
    if(!isemail(emailv))
    {

        seterror(email,"Invalid email");
        emails=1;
    } 
    else{
     setsuc(email);
    emails=0;
    }      
    
       



        if(contactv==""){

            seterror(contact,"cant emty");
            contacts=1;
        
        
        }else{
                  
            setsuc(contact);
            contacts=0;
        }
   
        
            
            if(usernamev==""){

                seterror(username,"cant emty");
            
                usernames=1
            
            } else{
                      
                setsuc(username);
                usernames=0;
            }       
   
                
    
    
    
            
                
               










    }

   

    function seterror(input,mes){
      
      
        var form_con = input.parentElement;
        var small=form_con.querySelector('small');
        small.innerText= mes;
        form_con.className= "personal-con error";
       
        
        
    }
    
    function setsuc(input){
        
         var form_con = input.parentElement;
         form_con.className= "personal-con suc";
         
        
    }


    function isemail(email){

      
return /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(email);



    }





   function getvalue(){

   
    var arr='';

    for(i=0;i<2;i++){
     if(chk[i].checked==true){
 
        arr+=chk[i].value;
    


     }
    
     

     }


    

    return arr.trim();





   }






   function loadResponsePost(data){
   
    

    //Creates an XMLHttpRequest object
    var xhr = new XMLHttpRequest();

    //opens the file with a specific request in asyncronous communication mode
    xhr.open('POST','php/Reg.php',true);
    //use setRequestHeader method for letting the browser know about the post request parameters
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    //sends the request
    xhr.send(data);
 
    xhr.onload = function(){
      if(this.status == 200){
      return 1;
      }else if(this.status == 404){
        return 0;
      }
    };

    
  }









  
    
     
 }



 
  
  
  
  
  
  
  
  window.onload=function(){
  
   selectedItem();
  
  
  };