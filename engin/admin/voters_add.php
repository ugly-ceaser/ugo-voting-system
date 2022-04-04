<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
		$middlename = $_POST['middlename'];
		$home_address = $_POST['home_address'];
		$bvn = $_POST['bvn'];
		$local_origin = $_POST['local_origin'];
		$state_origin = $_POST['state_origin'];
		$filename = $_FILES['photo']['name'];
		if(!empty($filename)){
			move_uploaded_file($_FILES['photo']['tmp_name'], '../images/'.$filename);	
		}
		//generate voters ids
		$set = '1234567890';
		$county = 'NIG';
		$voterNUMBER = substr(str_shuffle($set), 0, 15);

		$voter = $county.$voterNUMBER;

		$sql = "INSERT INTO voters (voters_id, password, firstname, lastname,middlename,home_address,bvn,local_origin,state_origin, photo) VALUES ('$voter', '$password', '$firstname', '$lastname','$middlename','$home_address','$bvn', '$local_origin','$state_origin','$filename')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Voter added successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: voters.php');
?>