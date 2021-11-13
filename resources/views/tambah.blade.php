<!DOCTYPE html>
<html>
<head>
	<title>Data Pelajar Smkn 6 jember</title>
</head>
<body>
 

	<h3>Data pelajar</h3>
 
	<a href="/pelajar"> Kembali</a>
	
	<br/>
	<br/>
 
	<form action="/pelajar/store" method="post">
		{{ csrf_field() }}
		Nama <input type="text" name="Nama" required="required"> <br/>
		Kelas <input type="text" name="Kelas" required="required"> <br/>
		Gender <input type="text" name="Gender" required="required"> <br/>
		Alamat <textarea name="Alamat" required="required"></textarea> <br/>
		<input type="submit" value="Simpan Data">
	</form>
 
</body>
</html>