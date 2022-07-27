<?php
	require __DIR__ . '/database.php';
    
	if($_GET['genre'] === 'all') {
	header('Content-Type: application/json');
	echo json_encode($database);
	} else {
		$filteredArray = [];

		foreach($database as $disc) {
			if($disc['genre'] === $_GET['genre']) {
				$filteredArray[] = $disc;
			}
		}
	
		header('Content-Type: application/json');
		echo json_encode($filteredArray);
	}
?>