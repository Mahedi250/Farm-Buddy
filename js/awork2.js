


function selectedItem(){

var req_btn=document.getElementById('user-req');
var man_btn=document.getElementById('Manage-user');

var req_box=document.getElementById('u-req');
var man_box=document.getElementById('m-user');

req_btn.addEventListener('click',function(e){
 
    e.preventDefault();
    man_box.style.display="none";
    req_box.style.display="";
   

});

man_btn.addEventListener('click',function(e){
    e.preventDefault();
    req_box.style.display="none";
    man_box.style.display="";

   
});

var m_fns=1;
var m_emails=1;
 var m_users=1;
var m_passs=1;

var fnv='';
var ev="";
var uv="";
var pv="";

    var system=0;

    
   

    var m_fn=document.getElementById('m_fn');
    var m_email=document.getElementById('m_email');
    var m_user=document.getElementById('m_user');
    var m_pass=document.getElementById('m_pass');
    //var m_system=document.getElementById('sys-select');
    var m_btn=document.getElementById('man_btn');
    var m_op=document.getElementById('system-opn');
    


    m_op.addEventListener('change',function(){


   
    
      system=m_op.options[m_op.selectedIndex].value; 


      alert(system);
      
      
      })


    m_btn.addEventListener('click',function(){


   
   


      validmanager();


      if(m_fns!=1&&m_emails!=1&&m_users!=1&&m_passs!=1){



     var manager={

                    full_name:m_fn.value,
                    email:m_email.value,
                    username:m_user.value,
                    password:m_pass.value,
                    system: system



     };




     var jsonstring=JSON.stringify(manager);

     console.log(jsonstring);



     }


})






function validmanager(){

  if(m_fn.value==""){

   seterror(m_fn,"cant emty");

   m_fns=1;

  }else{

    m_fns=0;

  }
  if(m_email.value==""){

    seterror(m_email,"cant emty");
 
    m_emails=1;
 
   }else{
 
    m_emails=0;
 
   }
   if(!isemail(m_email.value))
   {

       seterror(m_email,"Invalid email");
       m_emails=1;
   } 
   else{
    
    m_emails=0;
   }      





   if(m_user.value==""){

    seterror(m_user,"cant emty");
 
    m_users=1;
 
   }else{
 
    m_users=0;
 
   }
   if(m_pass.value==""){

    seterror(m_pass,"cant emty");
 
    m_passs=1;
 
   }else{
 
    m_passs=0;
 
   }













}

function seterror($input,$mess){


  $input.placeholder=$mess;




}


function isemail(email){

      
  return /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(email);
  
  
  
      }

















/*function loadResponsePost(){
   
    var xhr = new XMLHttpRequest();
    var params = "n="+my_name;
    xhr.open('POST','../php/admindata.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.send(params);
    xhr.onload = function(){
        if(xhr.status == 200){
        document.getElementById('admindata').innerHTML=this.responseText;   
        }else if(this.status == 404){
       
      }
    };
  }
  function loadResponsePostclient(){
   
    var xhr = new XMLHttpRequest();
    var params = "n="+my_name;
    xhr.open('POST','../php/clientdata.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.send(params);
    xhr.onload = function(){
        if(xhr.status == 200){
        document.getElementById('client').innerHTML=this.responseText;                     //
        }else if(this.status == 404){
       
      }
    };
  }

  function loadResponse_current_user(){
   
    var xhr = new XMLHttpRequest();
   
    xhr.open('POST','../php/current_user.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.send();
    xhr.onload = function(){
        if(xhr.status == 200){
        document.getElementById('current_user').innerHTML=this.responseText;                     //
        }else if(this.status == 404){
       
      }
    };
  }







function Approveuser($id,$usertype){

    var xhr = new XMLHttpRequest();
    var params = "id="+$id+'&u_type='+$usertype;
    xhr.open('POST','../php/approval.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.send(params);
    xhr.onload = function(){
        if(xhr.status == 200){
       


            loadResponsePost();
            loadResponsePostclient()
      
                               
       

    }

    }




}*/






}





window.onload=function(){
  
 

    selectedItem();
    
   
   };