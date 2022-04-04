<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$party_name = $_POST['party_name'];
		$party_sec = $_POST['party_sec'];
		$yaer =$_POST['yaer'];
        $party_contact =$_POST['party_contact'];

		$sql = "UPDATE party SET party_name= '$party_name', party_sec = '$party_sec',yaer = '$yaer' ,party_contact = '$party_contact' WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Party updated successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Fill up edit form first';
	}

	header('location: party.php');

?>