<?php 
 require "Dbcon.php";
$admin_ac=0;

session_start();

$com_id=$_SESSION['id'];

$data='<table   class="table">
<thead class="thead-dark">
  <tr>
    <th scope="col">Crediential ID</th>
    <th scope="col">Uername</th>
    <th scope="col">User Type</th>
    <th scope="col">Activity</th>
   
  </tr>
</thead>
  ';

if($_SERVER["REQUEST_METHOD"]=="POST"){




 $db= new DataAccess ();
 $sql="select * from credentials where man_id='$com_id'";

 $res=$db->GetData($sql);
 /*$userCount = mysqli_num_rows($res);
 echo $userCount;

 if($userCount >1){*/

while($row = mysqli_fetch_assoc($res)){

$chk="";


if($row['activity']!=0){

$chk=' <label class="switch">
<input   onclick="SetuserActivity('.$row['cred_id'].',1)" id="user_activity"   type="checkbox" checked>
<span class="slider"></span>
</label>';
    
} else{


    $chk=' <label class="switch">
    <input onclick="SetuserActivity('.$row['cred_id'].',0)" id="user_activity"  type="checkbox">
    <span class="slider"></span>
    </label>';



}


    



    
          
        $data .='<tr>

        <td>'.$row['cred_id'].'</td>
        <td>'.$row['Username'].'</td>
        <td>'.$row['User_type'].'</td>
        <td  >'.$chk.'</td>
        </tr>';
        

       
      /* $admin_id= $row['a_id'];
       $a_fullname=$row['full_name'];
        $a_emai=$row['Email'];
        $a_contact=$row['Contact'];*/





}



$data .='
</table>';








 }





echo $data;





  
  







?>



