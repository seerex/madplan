<?php
	require_once('Ingredient.php');
	
	class DatabaseManager {
		var $mysqli;
		
		function __construct() {
			$this->mysqli = mysqli_connect("localhost","root","root","foodplanner");

			if (mysqli_connect_errno())
				echo "Failed to connect to MySQL: " . mysqli_connect_error();
		  	
		  	$this->mysqli->set_charset("utf8");
		}
		
		public function addIngredient($ingredient) {
				if ($stmt = $this->mysqli->prepare('INSERT INTO ingredients (name) VALUES (?)')) {
					$name = $ingredient->getName();
					$stmt->bind_param('s', $name);
					$stmt->execute();
					
					$stmt->close();
					
					header('Location: ../madplan/addIngredient_view.php?errors=0');
				} else
					header('Location: ../addIngredient_view.php?errors=1');

		}
	}	
?>