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
	$username = $_POST['username'];
	$dupli = "SELECT * FROM seller_account WHERE Username = '$username'";
	$result = $conn->query($dupli);
	if ($result->num_rows > 0) {
		$response_array['status'] = 'error'; 
	} else {
		$response_array['status'] = 'success';
	}
	echo json_encode($response_array);

	// Close connection
    $conn->close();
?>