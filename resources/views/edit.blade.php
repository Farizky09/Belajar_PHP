<!DOCTYPE html>
<html>
<head>
	<title>Data Pelajar Smkn 6 jember</title>
</head>
<body>
 

	<h3>Edit Pelajar</h3>
 
	<a href="/pelajar"> Kembali</a>
	
	<br/>
	<br/>
 
	@foreach($pelajar as $p)
	<form action="/pelajar/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="nik" value="{{ $p->NIK }}"> <br/>
		Nama <input type="text" required="required" name="nama" value="{{ $p->Nama }}"> <br/>
		Kelas <input type="text" required="required" name="kelas" value="{{ $p->Kelas }}"> <br/>
		Gender <input type="text" required="required" name="gender" value="{{ $p->Gender }}"> <br/>
		Alamat <textarea required="required" name="alamat">{{ $p->Alamat }}</textarea> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
		
 
</body>
</html>