<?php
	
	//Credentials
    $servername = "localhost";
    $username = "root";
    $password = "1234";
    $dbname = "discount";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
	$email = $_POST['email'];
   	$mobilenumber = $_POST['mobilenumber'];
	$formmessage = $_POST['formmessage'];

	$sql = "INSERT INTO feedback_form (Email,Mobile_Number,Message)
       		VALUES('$email','$mobilenumber','$formmessage')";
	
	if ($conn->query($sql) === TRUE) {
    	echo "New record created successfully";
	} else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}

	// Close connection
    $conn->close();
?>