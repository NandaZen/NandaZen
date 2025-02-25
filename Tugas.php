<!DOCTYPE html>
<html>
<head>
	<title>Formulir</title>

	<style type="text/css">
		form{
			background-color: white;
			border: 1px solid black;
			border-radius: 0px 0px 10px 10px;
			text-align: left;
			width: 50%;
			height: 580px;
		}
		.form{
			margin-right: 10%;
			margin-left: 25%;
			align-content: center;
		}
		.top{
			margin: 5% 10% 10% 10%;
		}
		.judul{
			text-align: center;
			width: 50%;
			font-family: verdana;
			font-size: 15px;
			border: 1px solid black;
			margin-right: 10%;
			margin-left: 25%;
			border-radius: 10px 10px 0px 0px;
			background: lightblue;
		}
		.box{
			width: 100%;
		}
		.button{
			margin-top: 5%;
		}
	</style>
</head>



<body>
	<?php
	include 'koneksi.php';
	
	?>	

	<script type="text/javascript">
		function cek_data(){
			if (document.getElementById('nisn').value == '') {
				alert('NISN tidak boleh kosong');
				document.getElementById('nisn').focus();
				return false;
			}
			if (document.getElementById('nama').value == '') {
				alert('Nama tidak boleh kosong');
				document.getElementById('nama').focus();
				return false;
			}
			if (document.getElementById('tempat').value == '') {
				alert('Tempat tidak boleh kosong');
				document.getElementById('tempat').focus();
				return false;
			}
			if (document.getElementById('tanggal').value == '') {
				alert('Tanggal Lahir tidak boleh kosong');
				document.getElementById('tanggal').focus();
				return false;
			}
			var kelamin = document.querySelector('input[name="kelamin"]:checked');
			if (!kelamin) {
				alert('Jenis kelamin tidak boleh kosong');
				return false;
			}
			var agama = document.form.agama.value;
			if (agama === "pilih") {
				alert('Agama tidak boleh kosong');
				return false;
			}
			if (document.getElementById('urutan').value == '') {
				alert('Anak ke- tidak boleh kosong');
				document.getElementById('urutan').focus();
				return false;
			}
			if (document.getElementById('jumlah').value == '') {
				alert('Jumlah Saudara tidka boleh kosong');
				document.getElementById('jumlah').focus();
				return false;
			}
			if (submit('Apakah anda yakin ingin menyimpan?')) {
                alert('Data sudah tersimpan');
            }
		}
	</script>



<nav class="out">
	<div class="judul">
		<h2 >Formulir Isian Pendaftaran Calon Siswa Baru</h2>
	</div>
	<form name="form" action="Tes.php" method="post" id="form" class="form">
		
		<div class="top">
			<label>NISN 				:</label><br>
			<input type="text" name="nisn" id="nisn" class="box"><br>

			<label>Nama Lengkap			:</label><br>
			<input type="text" id="nama" name="nama" class="box"><br>

			<label>Tempat: </label><br>
			<input type="text" name="tempat" id="tempat" class="box">
			<label>Tanggal Lahir:</label><br>
			<input type="date" name="tanggal" id="tanggal" class="box"><br>

			<label>Kelamin 				:</label><br>
			<input type="radio" name="kelamin" value="laki-laki" >Laki-laki
			<input type="radio" name="kelamin" value="perempuan">Perempuan<br>

			<label>Agama 				:</label><br>
				<select name="agama" size="1" class="box" required>
				<option value="">- Pilih -
				<option value="Islam">Islam
				<option value="Kristen">Kristen
				<option value="Katolik">Katolik
				<option value="Hindu">Hindu
				<option value="Buddha">Buddha
				<option value="Konghucu">Konghucu
			</select><br>

			<label>Anak ke 				:</label><br>
			<input name="anak" type="text" id="urutan" class="box"><br>

			<label>Jumlah Saudara 		:</label><br>
			<input name="saudara" type="text" id="jumlah" class="box"><br>

			<div class="button" href="">
				<input type="submit" value="Proses Pendaftaran" >
				<button type="reset" class="reset">Reset</button>
			</div>
		</div>
	</form>
</nav>	

</body>
</html>