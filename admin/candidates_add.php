<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		
		$middlename = $_POST['middlename'];
		$home_address = $_POST['home_address'];
		$bvn = $_POST['bvn'];
		$local_origin = $_POST['local_origin'];
		$state_origin = $_POST['state_origin'];
		$position = $_POST['position'];
		$platform = $_POST['platform'];
		$filename = $_FILES['photo']['name'];
		if(!empty($filename)){
			move_uploaded_file($_FILES['photo']['tmp_name'], '../images/'.$filename);	
		}

		$sql = "INSERT INTO candidates (position_id, firstname, lastname,middlename,home_address,bvn,local_origin,state_origin, photo, platform) VALUES ('$position','$firstname', '$lastname','$middlename','$home_address','$bvn', '$local_origin','$state_origin', '$filename', '$platform')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Candidate added successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: candidates.php');
?>