<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<link rel="stylesheet" type="text/css" href="ecss7
.css"> </link>
<style  type="text/css">
   input:hover {color: red}
   input:focus {color: green}
   </style>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script></head>
<body background="a1.jpg">
<table width="500" border="2" align="center" cellpadding="0" cellspacing="1" 
<tr>
  <h1 style="color:red"><center>Employee Management</center></h1>
<form name="form1" method="post" action="main_login.php">
  <td>
  <table  color="#00ff00"  width="100%" >
  <tr>
  <td ><strong> Login</strong></td>
  </tr>
  <tr>
  <td width="78">Username</td>
  <td width="6">:</td>
  <td width="294"><input name="username" type="text" id="username"></td>
  </tr>
  <tr>
  <td>Password</td>
  <td>:</td>
  <td><input name="password" type="password" id="password"></td>
  </tr>
  <tr>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td><input type="submit" name="Submit" value="Login"></td>
  <td><a href ="signup.php"> <strong>SIGNUP</strong></a></td> 
 </tr>
  </table>
  </td>
</form>
</tr>
</table>                        
         <div align="center" >
			 <a href="forgot_pass.php"><strong>Forgot Password</strong></a> 
		</div> 
		<div align="center">
			 <a href="reset.php"><strong>Reset Password</strong></a> 
		</div>
</body>
</html>
