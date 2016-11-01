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
						<th>id_pembeli</th>
						<th>nama</th>
						<th>alamat</th>
						<th>no_telepon</th>
						<th>nama_barang</th>
						<th>jumlah_barang</th>
					</tr>			
				<?php
					//while($user = mysql_fetch_assoc($hasil)){ //memanggil index melalui nama kolom
					while($user = mysql_fetch_row($hasil)){ //memanggil index melalui angka
					//while($user = mysql_fetch_array($hasil)){ //memanggil index melalui campuran
					//while($user = mysql_fetch_object($hasil)){ //memanggil index melalui "-> nama kolom"
				?>
					<!--<tr> 
						<td><?php echo $user["nama"]; ?></td>
						<td><?php echo $user["alamat"]; ?></td>
						<td><?php echo $user["no_telepon"]; ?></td>
						<td><?php echo $user["nama_barang"];?></td>
						<td><?php echo $user["jumlah_barang"];?></td>
					</tr>-->
					<tr> 
						<td><?php echo $user["0"]; ?></td>
						<td><?php echo $user["1"]; ?></td>
						<td><?php echo $user["2"]; ?></td>
						<td><?php echo $user["3"]; ?></td>
						<td><?php echo $user["4"]; ?></td>
						<td><?php echo $user["5"]; ?></td>
					</tr>
					<!--<tr> //memanggil index melalui campuran
						<td><?php echo $user["0"]; ?></td>
						<td><?php echo $user["password"]; ?></td>
						<td><?php echo $user["role"]; ?></td>
					</tr>
					<tr> //memanggil index melalui -> nama kolom
						<td><?php echo $user->username; ?></td>
						<td><?php echo $user->password; ?></td>
						<td><?php echo $user->role; ?></td>
					</tr>-->
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