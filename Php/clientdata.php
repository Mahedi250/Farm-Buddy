<?php 
 require "Dbcon.php";
$admin_ac=0;

$data='<table  class="table">
<thead class="thead-dark">
  <tr>
    <th scope="col">Company id</th>
    <th scope="col">Client NAME</th>
    <th scope="col">Email</th>
    <th scope="col">Contact</th>
    <th scope="col">COMPANY NAME</th>
    <th scope="col">COUNTRY</th>
    <th scope="col">ADRESS</th>
    <th scope="col">REGISTERD SYSTEM</th>
    <th scope="col">Company Licence no</th>

    
    <th   scope="col">Action</th>
  </tr>
</thead>
  ';

if($_SERVER["REQUEST_METHOD"]=="POST"){


 $admin_ac=$_POST['n'];

 $db= new DataAccess ();
 $sql="select * from client_temp where activity=0";

 $res=$db->GetData($sql);
 /*$userCount = mysqli_num_rows($res);
 echo $userCount;

 if($userCount >1){*/

while($row = mysqli_fetch_assoc($res)){

    
          
        $data .='<tr>

        <td>'.$row['Com_id'].'</td>
        <td>'.$row['full name'].'</td>
        <td>'.$row['email'].'</td>
        <td>'.$row['contact'].'</td>
        <td>'.$row['c_name'].'</td>
        <td>'.$row['c_country'].'</td>
        <td>'.$row['c_add'].'</td>
        <td>'.$row['m_system'].'</td>
        <td>'.$row['c_li'].'</td>
        <td  ><button onclick="Approveuser('.$row['Com_id'].',2)" type="button" class="btn btn-success">Aprove</button>
        <button onclick="Declineuser('.$row['Com_id'].',2,3)"    type="button" class="btn btn-danger">Decline</button></td>
        </tr>';
        

       
      /* $admin_id= $row['a_id'];
       $a_fullname=$row['full_name'];
        $a_emai=$row['Email'];
        $a_contact=$row['Contact'];*/





}



$data .='
</table>';








 }







//}


echo $data;

/*echo '<table class="table">
<thead class="thead-dark">
  <tr>
    <th scope="col">#</th>
    <th scope="col">First</th>
    <th scope="col">Last</th>
    <th scope="col">Handle</th>
  </tr>
</thead>
<tbody>
  <tr>
    <th scope="row">1</th>
    <td>Mark</td>
    <td>Otto</td>
    <td>@mdo</td>
  </tr>
  <tr>
    <th scope="row">2</th>
    <td>Jacob</td>
    <td>Thornton</td>
    <td>@fat</td>
  </tr>
  <tr>
    <th scope="row">3</th>
    <td>Larry</td>
    <td>the Bird</td>
    <td>@twitter</td>
  </tr>
</tbody>
</table>

<table class="table">
<thead class="thead-light">
  <tr>
    <th scope="col">#</th>
    <th scope="col">First</th>
    <th scope="col">Last</th>
    <th scope="col">Handle</th>
  </tr>
</thead>
<tbody>
  <tr>
    <th scope="row">1</th>
    <td>Mark</td>
    <td>Otto</td>
    <td>@mdo</td>
  </tr>
  <tr>
    <th scope="row">2</th>
    <td>Jacob</td>
    <td>Thornton</td>
    <td>@fat</td>
  </tr>
  <tr>
    <th scope="row">3</th>
    <td>Larry</td>
    <td>the Bird</td>
    <td>@twitter</td>
  </tr>
</tbody>
</table>';*/


?>

