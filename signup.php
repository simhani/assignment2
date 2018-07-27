<?php 
     //session_start();
	 //connection to database
	 $db=mysqli_connect("localhost","root","","admin_db");
	 
	 
	 
	 if(isset($_POST['signup'])){
	           session_start();
			   $username=mysql_real_escape_string($_POST['username']);
			   $email=mysql_real_escape_string($POST['email']);
			   $password=mysql_real_escape_string($POST['password']);
			   $password2=mysql_real_escape_string($POST['password2']);
			   echo   "$username-$email-$password";
			   if($password==$password2){
			   //   create space user_error
			   $password=md5($password);
			   $sql="INSERT into signup (username,email,password) VALUES ('$username','$email','$password')";
			   mysqli_query($db,$sql);
			   $_SESSION['message']="you are now logged in";
			   $_SESSION['username']=$username;
			   header("location:homepage.php");
			   }else{
			   
			   $_SESSION['message']="the two passwords do not match";
			   }
			   
			   
			   
			   }
			   
			   ?>
			   <!DOCTYPE html>
			   <html><head>
			   <link rel="stylesheet" type="text/css" href="ass1.css"></link>
			   <style type="text/css" >
			          input:hover{color:blue;}
					  input:focus{color:green;}
					  </style>
					  </head>
					  <body>
					  <h1 align="center" style="color:blue"> <font size="10" >SIGNUP</font></h1>
					  <form method="post"  action="signup.php">
					  <table>
					  <tr>
					  <td>Username:</td>
					  <td><input type="text" name="username" class="textInput"></td>
                      </tr>
                      <tr>
                      <td>Email:</td>
                      <td><input type="email" name="email" class="textInput"></td>
                      </tr>
                      <tr>
                      <td>Password:</td>
                      <td><input type="password" name="password" class="textInput"></td>
                      </tr>
                      <tr>
                      <td>Password again:</td>
                      <td><input type="password" name="password" class="textInput"></td>
                      </tr>
                      <tr>
                      <td></td>
                      </div> <br><td>
					  <input type="submit" name="signup" value="submit">
                      <a href ="update.php">update</a>
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </td>
</tr>
</table>
</form>
</body>
</html>
						
			   
			   
			   