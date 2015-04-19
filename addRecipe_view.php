<!DOCTYPE html>
<html>
	<head>
		<title>Add Recipe</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
		<script src="jquery-ui/jquery-ui.min.js"></script>
		
	    <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	    <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
	    <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

		<script>
    
			$(document).ready(function(){
				
				$( "#ingredientsName" ).load("getIngredientNames.php")
				
				// Autocomplete
				var availableTags = [
			      "ActionScript",
			      "AppleScript",
			      "Asp",
			      "BASIC",
			      "C",
			      "C++",
			      "Clojure",
			      "COBOL",
			      "ColdFusion",
			      "Erlang",
			      "Fortran",
			      "Groovy",
			      "Haskell",
			      "Java",
			      "JavaScript",
			      "Lisp",
			      "Perl",
			      "PHP",
			      "Python",
			      "Ruby",
			      "Scala",
			      "Scheme"
			    ];
			    $( "#ingredientsName" ).autocomplete({
			      source: availableTags
			    });

							    
			    // Shows a preview of the image
			    $('#imageUpload').change(function() {
					var file = $("#imageUpload")[0];
					
			        if (file.files && file.files[0]) {
			            var reader = new FileReader();
			            
			            reader.onload = function (e) {
			                $('#imagePreview').attr('src', e.target.result);
			            }
			            
			            reader.readAsDataURL(file.files[0]);
			        } else
			        	alert("Failed");  
				});
				
				
				$('#addIngredient').click(function(event) {
					event.preventDefault();
					// Get info for ingredient
					var name = $('#ingredientsName').val();
					var amount = $('#amount').val();;
					var unit = $('#unit').val();;
					
					if (name.length > 0 && amount.length > 0 && unit.length > 0) {
						// Add to table
						$('#ingredientsTable > tbody').append('<tr><td>' + name + '</td>' + '<td>' + amount + '</td>' + '<td>' + unit + '</td></tr>');
						
						// Clear textfield
						$('#ingredientsName').val('');
						$('#amount').val('');
					} else
						alert("Alle felter skal indtastes (navn, enhed og mængde)");
				});
			    
			});
		</script>
	</head>
	<body>
		<div class="container">
			<form id="mainForm" role="form" action="addRecipe.php" method="post" enctype="multipart/form-data">
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
						<img id="imagePreview" src="http://i.kinja-img.com/gawker-media/image/upload/s--rc5NiOhM--/18zqjbdo1l118jpg.jpg" alt="recipe image" style="width: 300px; height: 200px;" />
					</div>
				</div>
				
				<div class="row">
					<div class="form-group col-sm-4">
						<label for="name">Ingrediens:</label>
						<input type="text" class="form-control" id="ingredientsName" />
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
						<table id="ingredientsTable" class="table table-hover">
							<thead>
								<tr>
									<th>Navn</th>
									<th>Antal</th>
									<th>Enhed</th>
								</tr>
							</thead>
							<tbody>
								
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
						 <button type="submit" name="submit" class="btn btn-default">Tilføj opskrift</button>
					</div>
				</div>
				
			</form>
		</div>
	</body>
</html>