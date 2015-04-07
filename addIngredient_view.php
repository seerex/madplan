<?php
	$statusText = "";
	require_once('connect_db.php');
	
	// Status after insertion of ingredient
	if (isset($_GET['errors'])) {
		$error = $_GET['errors'];

		if ($error > 0) // an error occured
			$statusText = "Der skete en fejl under oprettelse af elementet.";
		else
			$statusText = "Ny ingrediens indsat!";
	} 	
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Add ingredient</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="container">
			<div class="row col-sm-12">
				<h1>Tilføj Ingrediens</h1>
			</div>
			
			<!-- Form to create new ingredient -->
			<form role="form" action="addIngredient.php" method="POST">
				<div class="row">
					<div class="form-group col-sm-8">
						<label for="name">Navn:</label>
						<input type="text" class="form-control" name="name" id="name">
					</div>
					
					<div class="form-group col-sm-4">
						<label for="add">Tilføj:</label>
						<button class="form-control btn btn-default" type="submit" id="add">Tilføj</button>
					</div>
				</div>
			</form>
			<?php
				if (strlen($statusText) > 0)
					echo '<div class="row col-sm-12"><p>' . $statusText . '</p></div>';	
			?>
			<!-- Lists all ingredients -->
			<div class="row col-sm-12">
					<table class="table table-hover">
						<thead>
							<tr>
								<td>Id</td>
								<td>Navn</td>
							</tr>
						</thead>
						
						<tbody>
							<?php
								if ($result = $mysqli->query('SELECT id, name FROM ingredients')) {
									while ($row = $result->fetch_assoc()) {
										echo "<tr>";
										echo "<td>" . $row['id'] . "</td>";
										echo "<td>" . $row['name'] . "</td>";
										echo "</tr>";
									}
								}	
							?>
						</tbody>
					</table>
				</div>

			
		</div>
	</body>
</html>