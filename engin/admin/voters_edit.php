<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];

		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		
		$middlename = $_POST['middlename'];
		$home_address = $_POST['home_address'];
		$bvn = $_POST['bvn'];
		$local_origin = $_POST['local_origin'];
		$state_origin = $_POST['state_origin'];
		$password = $_POST['password'];

		$sql = "SELECT * FROM voters WHERE id = $id";
		$query = $conn->query($sql);
		$row = $query->fetch_assoc();

		if($password == $row['password']){
			$password = $row['password'];
		}
		else{
			$password = password_hash($password, PASSWORD_DEFAULT);
		}

		$sql = "UPDATE voters SET firstname = '$firstname', middlename = '$middlename',lastname = '$lastname', home_address = '$home_address', bvn = '$bvn', local_origin = '$local_origin', state_origin = '$state_origin',  password = '$password' WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Voter updated successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Fill up edit form first';
	}

	header('location: voters.php');

?>