<?php
	// Verify all required fields are set
	if (!empty($_POST['name'])) {
		require_once('connect_db.php');
		
		// Sanitize input
		$name = $mysqli->real_escape_string($_POST['name']);
		
		if ($stmt = $mysqli->prepare('INSERT INTO ingredients (name) VALUES (?)')) {
			$stmt->bind_param('s', $name);
			$stmt->execute();
			
			$stmt->close();
			
			header('Location: addIngredient_view.php?errors=0');
		} else
			header('Location: addIngredient_view.php?errors=1');
	} else
		header('Location: addIngredient_view.php?errors=2');
?>