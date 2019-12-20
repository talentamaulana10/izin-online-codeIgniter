<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD dengan CodeIgniter | MalasNgoding.com</title>
</head>
<body>
	<center>
		<h1>Membuat CRUD dengan CodeIgniter | MalasNgoding.com</h1>
		<h3>Tambah data baru</h3>
	</center>
	<form action="<?php echo base_url(). 'crud/tambah_aksi'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Id_Marketting</td>
				<td><input type="text" name="id_marketting"></td>
			</tr>
			<tr>
				<td>Jenis</td>
				<td><input type="text" name="jenis"></td>
			</tr>
			<tr>
				<td>Tanggal A</td>
				<td><input type="date" name="tgl_a"></td>
			</tr>
            <tr>
				<td>Tanggal B</td>
				<td><input type="date" name="tgl_b"></td>
			</tr><tr>
				<td>Keterangan</td>
				<td><input type="text" name="keterangan"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Tambah"></td>
			</tr>
		</table>
	</form>	
</body>
</html>