<?php
session_start();
if($_SESSION['login'] == true){
  header('Location: admin.php?p=Anda Sudah Login.');
 }
?>
<html>
<head>

<title>
form login kko
</title>

<link rel="stylesheet" href="./template/login-temp.css" type="text/css"></link>

</head>
<body><center>

   <div class="header">
   WELCOME
   </div>
<form action="proces.php" method="post">
   <div class="isi">
  <table>
 <h3><center><b> <br>Login Kas Online</br></b></center></h3>
   <tr align="left">
  <td>Username</td><td><input type="text" name="username"></td>
  </tr>
  <tr align="left">
  <td>Password</td><td><input type="password" name="password"></td>
  </tr>
  <tr>
 <td colspan=2><center><input type="submit" value="Login" class="tombol"></center>
 <center><a href="">lupa password ?</a><br><br>
	<?php 
		if (isset($_GET['p'])){
		echo $_GET['p']; 
		}
	?>
 </center></td>
  </tr>
  <tr>
  <td><div class="error">
	<p><center>
	</center></p></td>
  </tr>
   </table>   
   </div>
 </form>
   
  
 </center>  
</body>

</html>