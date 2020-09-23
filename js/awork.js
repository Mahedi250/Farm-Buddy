var my_name=0;
function selectedItem(){

var req_btn=document.getElementById('user-req');
var man_btn=document.getElementById('Manage-user');

var req_box=document.getElementById('u-req');
var man_box=document.getElementById('m-user');

req_btn.addEventListener('click',function(e){
 
    e.preventDefault();
    man_box.style.display="none";
    req_box.style.display="";
    loadResponsePost();
    loadResponsePostclient()

});

man_btn.addEventListener('click',function(e){
    e.preventDefault();
    req_box.style.display="none";
    man_box.style.display="";

    loadResponse_current_user();

});











function loadResponsePost(){
   
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




}






}





window.onload=function(){
  
    
    selectedItem();
    loadResponsePost();
    loadResponsePostclient();

   
   };