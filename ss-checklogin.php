<?php
$host="localhost";
$username="";
$password="";
$db_name="sweetsimplicity";
$tbl_name="users";

mysql_connect("$host", "$username", "$password")or die(mysql_error());
mysql_select_db("$db_name")or die(mysql_error());

$username=$_POST['username'];
$password=$_POST['password'];

$sql="SELECT * FROM $tbl_name WHERE txt_username='$username' and txt_password='$password'";
$result=mysql_query($sql);

$count=mysql_num_rows($result);

if($count==1){
session_register("username");
session_register("password");
header("location:login_success.php");
}
else {
echo "Wrong Username or Password";
}
?>