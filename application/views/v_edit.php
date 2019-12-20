<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD dengan CodeIgniter | MalasNgoding.com</title>
</head>
<body>
	<center>
		<h1>Membuat CRUD dengan CodeIgniter | MalasNgoding.com</h1>
		<h3>Edit Data</h3>
	</center>
	<?php foreach($ijin as $u){ ?>
	<form action="<?php echo base_url(). 'crud/update'; ?>" method="post">
        <table style="margin:20px auto;">
            <tr>
                <td>id</td>
                <td>
                   <input type="text" name="id" value="<?php echo $u->id ?>">
                </td>
            </tr>
			<tr>
                <td>id marketing:</td>
                <td><input type="text" name="id_marketting" value="<?php echo $u->id_marketting ?>" ></td>
            </tr>
            <tr>
                <td>jenis:</td>
                <td><input type="text" name="jenis" value="<?php echo $u->jenis ?>" ></td>
            </tr>
            <tr>
                <td>tanggal a:</td>
                <td><input type="text" name="tanggal_a" value="<?php echo $u->tgl_a ?>" ></td>
            </tr>
            <tr>
                <td>tanggal b:</td>
                <td><input type="text" name="tanggal_b" value="<?php echo $u->tgl_b ?>" ></td>
            </tr>
            <tr>
                <td>keterangan :</td>
                <td><input type="text" name="keterangan" value="<?php echo $u->ket ?>" ></td>
            </tr>
            <tr>
                <td>
                <input type="submit" name="submit" >
                </td>
            </tr>
		</table>
	</form>	
	<?php } ?>
</body>
</html>