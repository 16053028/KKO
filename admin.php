<?php
session_start();
if($_SESSION['login'] == false){
  header('Location: index.php?p=Anda Belum Login');
 }
?>
<html>
    <head>

      <title>
       admin
      </title>
	  <link rel="stylesheet" href="./template/admin-temp.css" type="text/css"></link>
	  
	  </style>

    </head>
   <body>

    <div class="kurung">
     <center>form admin</center>
    </div>


<div class="bio">
   <table class="data_foto" border=1>
     <tr>
        <td><center>foto<br>4x6</td>
	 </tr> 
        	 
   </table>
      <table class="data_bio" border=1>
       <tr>
          <h3><td><center>bio data</center></td></h3>
       </tr>
          <input type="submit"value="edit" class="btn_edit">
       <br>
         <a href="reg_form.php"><input type="submit"value="tambah" class="btn_tambah"></a>
       <br>
         <a href="logout.php"><input type="submit"value="logout" class="btn_out"></a>

      </table>
</div>


   <center>
      <div class="kotak">
         <h1><b><center>pembayaran kas tahun</center><b></h1>
		 
         <table border=1>
		       <tr>
			        <td>nama <input type="text" size="20" placeholder="nama">
			        <td>npm <input type="text" size="20" placeholder="npm"> 
			        <td>bayar<input type="text" size="10" placeholder="Rp">
			        <td><center><input type=checkbox></td>
			   </tr>
	     </table>
		 
	</div>
   </center>
   
   
       <div class="footer"></div>
</body>

</html>