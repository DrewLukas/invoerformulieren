<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Data van de school</title>
<link rel="stylesheet" type="text/css" href="css/reset.css" media="screen">
<link rel="stylesheet" type="text/css" href="css/style.css" media="screen">
</head>

<body>

<main>

	<h1>Gegevens docenten</h1>

	<div class="wrapper-table">
		<table id="table">
			<tr>
				<th>Voornaam</th>
				<th>Achternaam</th>
				<th>Geboortedatum</th>
				<th>Email</th>
			</tr>
			<tr>
				<td><?php echo $_POST["voornaam"]; ?></td>
				<td><?php echo $_POST["achternaam"]; ?></td>
				<td><?php echo $_POST["geboortedatum"]; ?></td>
				<td><?php echo $_POST["email"]; ?></td>
			</tr>
		</table>
	</div>

</main>

</body>
</html>