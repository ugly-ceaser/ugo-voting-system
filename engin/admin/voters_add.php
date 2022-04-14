<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];

		$email = $_POST['email'];

		
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

		//$voter ="sample";



		//generate password 

		$psample = substr(str_shuffle($set), 0, 15);

		//$psample = "sample";



		$password = password_hash($psample, PASSWORD_DEFAULT);

		//$password = "sample";


		$sql = "INSERT INTO `voters`( `voters_id`, `password`, `firstname`, `lastname`, `middlename`, `home_address`, `email`, `bvn`, `local_origin`, `state_origin`, `photo`) 
		VALUES ('$voter','$password','$firstname','$lastname','$middlename','$home_address','$email','$bvn','$local_origin','$state_origin','$filename')";
		
		
		
		
		
		
	
		if($conn->query($sql)){
			$_SESSION['success'] = 'Voter added successfully';


			//send the password to the voters email address

				$to = $email;
				$subject = 'Congrats';
				$from = 'Electoral commission';
				
				// To send HTML mail, the Content-type header must be set
				$headers  = 'MIME-Version: 1.0' . "\r\n";
				$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
				
				// Create email headers
				$headers .= 'From: '.$from."\r\n".
					'Reply-To: '.$from."\r\n" .
					'X-Mailer: PHP/' . phpversion();
				
				// Compose a simple HTML email message
				$message = '<html><body>';
				$message .= '<h1 style="color:#f40;">Hi <?= $firstname?></h1>';
				$message .= '<p style="color:#080;font-size:18px;">please log in with the following details password : <?= $password?> and voter id : <?= $voter ?></p>';
				$message .= '</body></html>';
				
				// Sending email
				if(mail($to, $subject, $message, $headers)){
					echo 'Your mail has been sent successfully.';
				} else{
					echo 'Unable to send email. Please try again.';
				}

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