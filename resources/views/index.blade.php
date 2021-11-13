<!DOCTYPE html>
<html>
<head>
	<title>Data Pelajar Smkn 6 jember</title>
</head>
<body>
 
	
	<h3>Data pelajar</h3>
 
	<a href="/pelajar/tambah"> + Tambah Pelajar Baru</a>
	
	<br/>
	<br/>
 
	<table border="1">
		<tr>
			<th>Nama</th>
			<th>Kelas</th>
			<th>Gender</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
		@foreach($pelajar as $p)
		<tr>
            <td>{{ $p->Nama }}</td>
            <td>{{ $p->Kelas }}</td>
            <td>{{ $p->Gender }}</td>
            <td>{{ $p->Alamat }}</td>
            <td>
                <a href="/pelajar/edit/{{ $p->NIK }}">Edit</a>
                |
                <a href="/pelajar/hapus/{{ $p->NIK }}">Hapus</a>
            </td>
        </tr>
		@endforeach
	</table>
 
 
</body>
</html>