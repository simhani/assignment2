<?php
$host="localhost"; 
$username="root"; 
$password=""; 
$db_name="admin_db"; 
$tbl_name="login"; 
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");
// username and password sent from form 
$un= $_POST["username"];
$pwd=$_POST["password"]; 
// To protect MySQL injection (more detail about MySQL injection)
$un = stripslashes($un);
$pwd = stripslashes($pwd);
$un = mysql_real_escape_string($un);
$pwd = mysql_real_escape_string($pwd);
$sql="SELECT * FROM $tbl_name WHERE user_name='$un' and password='$pwd' ";
$result=mysql_query($sql);
$count=mysql_num_rows($result);
if($count==1){
header("location:success.php");
}
else {
echo "<h1>Invalid username or password</h1>";
//header("location:homepage.php");
}
?>
