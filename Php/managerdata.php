<?php
session_start();
$com_id= $_SESSION['id'];
require "Dbcon.php";
$requestdata= file_get_contents('php://input');
$object=json_decode($requestdata,true);


var_dump($object);




$db= new DataAccess ();

$sql="INSERT INTO maneger(full_name,email,username,password,system,com_id) VALUES ('$object[full_name]','$object[email]','$object[username]','$object[password]','$object[system]',$com_id)";

$res2=$db->ExecuteQuery($sql);

$db= new DataAccess ();

$sql = "INSERT INTO `credentials`(`Username`, `Password`, `User_type`, `emp_id`, `client_id`, `man_id`, `activity`) VALUES ('$object[username]','$object[password]',3,null,null,'$com_id',1)";
$res=$db->ExecuteQuery($sql);

echo $res;

  


?>