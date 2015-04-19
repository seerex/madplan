<?php
	// All ingredients name outputtet in CSV format
	require_once('connect_db.php');
	if ($stmt = $mysqli->prepare("SELECT name FROM ingredients")) {
		$stmt->execute();
		
		$result = $stmt->bind_result($name);
		while ($stmt->fetch()) {
			echo($name . ",");
		}
		
		$stmt->close();
	}	
?>