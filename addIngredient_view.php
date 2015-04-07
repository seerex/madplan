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
			<form role="form" action="addIngredient.php" method="POST">
				<div class="row">
					<h1>Tilføj Ingrediens</h1>
				</div>
				
				<div class="row">
					<div class="form-group col-sm-8">
						<label for="name">Navn:</label>
						<input type="text" class="form-control" id="name">
					</div>
					
					<div class="form-group col-sm-4">
						<label for="add">Tilføj:</label>
						<button class="form-control" id="add">Tilføj</button>
					</div>
				</div>
				
				<div class="row col-sm-12">
					<table class="table table-hover">
						<thead>
							<tr>
								<td>Id</td>
								<td>Navn</td>
							</tr>
						</thead>
						
						<tbody>
							<tr>
								<td>1</td>
								<td>Løg</td>
							</tr>
							<tr>
								<td>2</td>
								<td>Salat</td>
							</tr>
							<tr>
								<td>3</td>
								<td>Tomat</td>
							</tr>
	
						</tbody>
					</table>
				</div>
			</form>
		</div>
	</body>
</html>