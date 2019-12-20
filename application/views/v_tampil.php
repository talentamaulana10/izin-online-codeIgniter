<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD dengan CodeIgniter | MalasNgoding.com</title>
</head>
<body>
	
	
	<table style="margin:20px auto;" border="1">
		<tr>
			<th>No</th>
			<th>id_marketing</th>
			<th>jenis</th>
			<th>tgl_a</th>
            <th>tgl_b</th>
			<th>ket</th>
			<th>Aksi</th>
            
		</tr>
		<?php 
		$no = 1;
		foreach($ijin as $u){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $u->id_marketting ?></td>
			<td><?php echo $u->jenis ?></td>
            <td><?php echo $u->tgl_a ?></td>
			<td><?php echo $u->tgl_b ?></td>
			<td><?php echo $u->ket ?></td>
			<td>
				
				<?php echo anchor('crud/hapus/'.$u->id,'Hapus'); ?>		
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>