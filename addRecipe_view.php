<!DOCTYPE html>
<html>
	<head>
		<title>Add Recipe</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

		<script>
			$(document).ready(function(){
			    
			    
			    
			});
		</script>
	</head>
	<body>
		<div class="container">
			<form id="mainForm" role="form">
				<div class="row">
					<div class="form-group col-sm-3">
						<label for="name">Navn:</label>
						<input type="text" class="form-control" id="name" />
					</div>
					<div class="form-group col-sm-3">
						<label for="imageUpload">Skift billede:</label>
						<input class="form-control" type="file" name="imageUpload" id="imageUpload" style="margin-bottom: 10px;">
					</div>
					<div class="form-group col-sm-6">
						<img src="http://i.kinja-img.com/gawker-media/image/upload/s--rc5NiOhM--/18zqjbdo1l118jpg.jpg" alt="recipe image" style="width: 300px; height: 200px;" />
					</div>
				</div>
				
				<div class="row">
					<div class="form-group col-sm-4">
						<label for="name">Ingrediens:</label>
						<input type="text" class="form-control" id="name" />
					</div>
					<div class="form-group col-sm-3">
						<label for="amount">Mængde:</label>
						<input type="text" class="form-control" id="amount" />
					</div>
					<div class="form-group col-sm-3">
						<label for="unit">Enhed:</label>
						<select class="form-control" id="unit">
							<option>Kg.</option>
							<option>gram</option>
							<option>stk.</option>
						</select>
					</div>
					<div class="form-group col-sm-2">
						<label for="addIngredient">Tilføj:</label>
						<button id="addIngredient" class="form-control">Tilføj</button>
					</div>
				</div>
				
				<div class="row">
					<div class="col-sm-12">
						<table class="table table-hover">
							<thead>
								<tr>
									<th>Navn</th>
									<th>Antal</th>
									<th>Enhed</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Løg</td>
									<td>3</td>
									<td>Stk.</td>
								</tr>
								<tr>
									<td>Salat</td>
									<td>250</td>
									<td>gram</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				
				<div class="row">
					<div class="form-group col-sm-12">
						<label for="description">Beskrivelse og fremgangsmåde:</label>
						<textarea class="form-control" rows="8" id="description"></textarea> 
					</div>
				</div>
				
				<div class="row">
					<div class="form-group col-sm-12">
						 <button type="submit" class="btn btn-default">Tilføj opskrift</button>
					</div>
				</div>
				
			</form>
		</div>
	</body>
</html>