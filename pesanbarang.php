<html>
	<head>
		<title> Pesan Barang</title>
	</head>
	<body>
		<?php
			if(isset($_POST["submit"])){
				include("koneksi.php");
			
				$nama			= $_POST["nama"];
				$alamat			= $_POST["alamat"];
				$no_telepon		= $_POST["no_telepon"];
				$nama_barang	= $_POST["nama_barang"];
				$jumlah_barang	= $_POST["jumlah_barang"];
				
				$sql = "INSERT INTO pemesan
						VALUES(null, '$nama', '$alamat', '$no_telepon', '$nama_barang', '$jumlah_barang')";
						
				$hasil = mysql_query($sql) or die("Query gagal dieksekusi");
				
				if($hasil == TRUE){
					echo "Barang berhasil di pesan <br />";
					echo "<a href='pemesan.php'>Lihat daftar pemesanan</a>";
				}
				else{
					echo "Gagal memesan barang";
				}
			}
		
		?>
	
		<table>
		<tr>
			<td colspan=3 align=center>|~~PEMESANAN BARANG~~|</td>
		</tr>
		<form action="pesanbarang.php" method="post">
			<tr>
				<td><label for="nama">Masukkan nama</label></td>
				<td>:</td>
				<td><input type="text" name="nama" /></td>
			</tr>
			<tr>
				<td><label for="alamat">Masukkan alamat</label></td>
				<td>:</td>
				<td><input type="text" name="alamat"/></td>
			</tr>
			<tr>
				<td><label for="no_telepon">Masukkan no.telepon</label></td>
				<td>:</td>
				<td><input type="text" name="no_telepon"/></td>
			</tr>
			<tr>
				<td><label for="nama_barang">Masukkan nama barang</label></td>
				<td>:</td>
				<td><input type="text" name="nama_barang"/></td>
			</tr>
			<tr>
				<td><label for="jumlah_barang">Tentukan jumlah barang <br>yang akan di pesan</label></td>
				<td>:</td>
				<td><input type="text" name="jumlah_barang"/></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="Pesan"/></td>
			</tr>
		</form>
		</table>
	</body>
</html>