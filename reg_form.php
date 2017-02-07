<?php
session_start();
if($_SESSION['login'] == false){
  header('Location: index.php?p=Anda Belum Login');
 }
?>
<html>
<center>
<head>
	<title>KKO | Tambah Data</title>
<link rel="stylesheet" href="./template/reg-form-tem.css" type="text/css"></link>
</head>
<header>
	<p>Input Data Mahasiswa Baru</p>
</header>
<body>
<form>
<table width="400" border="0">
<tr align="center">
<td align="left">
  <label for="npm_mhs">NPM</label></td>
  <td>
  <label>: </label><input type="text" id="npm_mhs" name="npm_mhs" value=""><br>
  </td></tr>
  <tr align="center">
  <td align="left">
  <label for="fname_mhs">Nama Lengkap</label></td>
  <td>
  <label>: </label><input type="text" id="fname_mhs" name="fname_mhs" value=""><br>
  </td></tr>
  <tr align="center">
  <td align="left">
  <label for="alamat_mhs">Alamat</label></td>
  <td>
  <label>: </label><input type="text" id="alamat_mhs" name="alamat_mhs" value=""><br>
  </td></tr>
  <tr align="center">
  <td align="left">
  <label for="tl_mhs">Tempat Lahir</label></td>
  <td>
  <label>: </label><input type="text" id="tl_mhs" name="tl_mhs" value=""><br>
  </td></tr>
  <tr align="center">
  <td align="left">
  <label for="tgl_mhs">Tanggal Lahir</label></td>
  <td>
  <label>: </label><input type="text" id="tgl_mhs" name="tgl_mhs" value=""><br>
  </td></tr>
  <tr align="center">
  <td align="left">
  <label for="ntlp_mhs">Nomer Tlp</label></td>
  <td>
  <label>: </label><input type="text" id="ntlp_mhs" name="ntlp_mhs" value=""><br>
  </td></tr>
  <tr align="center">
  <td align="left">
  <label for="ag_mhs">Agama</label></td>
  <td>
    <label>: </label><select id="ag_mhs" name="ag_mhs">
      <option value="islam">Islam</option>
      <option value="kristen">Kristen</option>
	  <option value="hindu">Hindu</option>
	  <option value="budha">Budha</option>
    </select>
	</td></tr>
  <tr align="center">
  <td align="left">
  <label for="jk_mhs">Jenis Kelamin</label></td>
  <td>
    <label>: </label><select id="jk_mhs" name="jk_mhs">
      <option value="L">Laki-Laki</option>
      <option value="P">Perempuan</option>
    </select>
	</td></tr>
  </table>
</form>
</body>
<div class = "footer">
	<center><input type="submit" value="Submit">      <input type="submit" value="Bersih"></center>
</div>
</center>
</html>