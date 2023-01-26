<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Rekap data</title>
	<style type="text/css">
		table {
			border-collapse: collapse;
		}
		tr th, tr td {
			border: 1px solid;
		}

	</style>
</head>
<body>
	<table>
		<tr>
			<th>Kategori</th>
			<th>Jumlah data</th>
		</tr>
		<?php foreach ($kategori as $ktg) :?>
			<tr>
				<td><?=$ktg['category'] ?></td>
				<td><?=$ktg['total'] ?></td>
			</tr>
		<?php endforeach; ?>
	</table>
</body>
</html>