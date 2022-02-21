<html>
<head>
	<title>Rumah Sakit</title>
</head>
<body>
	<h1>Data Pegawai</h1>
	<table border="1">
		<tr>
			<th>Nama</th>
			<th>Jenis Kelamin</th>
			<th>Alamat</th>
		</tr>
        <?php 
        foreach($pegawai as $row)
        { 
        ?>
            <tr>
                <td><?php echo $row['nama']; ?></td>
                <td><?php echo $row['umur']; ?></td>
                <td><?php echo $row['kelamin']; ?></td>
            </tr>
        <?php 
        } 
        ?>
	</table>
</body>
</html>