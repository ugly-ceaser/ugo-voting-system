<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$party_name = $_POST['party_name'];
		$party_sec = $_POST['party_sec'];
		$yaer = $_POST['yaer'];
        $party_contact = $_POST['party_contact'];

		// $sql = "SELECT * FROM party ORDER BY priority DESC LIMIT 1";
		// $query = $conn->query($sql);
		// $row = $query->fetch_assoc();

		// $priority = $row['priority'] + 1;
		
		$sql = "INSERT INTO party (party_name, party_sec,yaer,party_contact) VALUES ('$party_name', '$party_sec','$yaer','$party_contact')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Party added successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: party.php');
?>