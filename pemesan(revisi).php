<html>
	<head>
		<title>Daftar Pemesan</title>
	</head>
	<body>
		<?php
			include("koneksi.php");
			
			$sql = "SELECT * FROM pemesan";
			$hasil = mysql_query($sql);
			
			if(mysql_num_rows($hasil) ==0){
				echo "Belum ada user yang terdaftar";
			}
			else{
				?>
				<table border=1>
					<tr>
						<th colspan=6>DAFTAR PEMESAN BARANG</th>
					</tr>
					<tr>
						<th>nama</th>
						<th>alamat</th>
						<th>no_telepon</th>
						<th>nama_barang</th>
						<th>jumlah_barang</th>
					</tr>			
				<?php
					while($user = mysql_fetch_row($hasil)){ //memanggil index melalui angka
				?>
					
					<tr> 
						<td><?php echo $user["1"]; ?></td>
						<td><?php echo $user["2"]; ?></td>
						<td><?php echo $user["3"]; ?></td>
						<td><?php echo $user["4"]; ?></td>
						<td><?php echo $user["5"]; ?></td>
					</tr>
									<?php
					}
				?>
				</table>
				<?php
			}
		?>
		<a href="pesanbarang.php">Tambah Pemesanan</a>
	</body>
</html>