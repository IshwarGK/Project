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
	$pwd = $_POST['pwd'];
	
	$sql = "SELECT Username and Password FROM seller_account WHERE Username = '$username' and Password = '$pwd'";
	$result = $conn->query($sql);
	if ($result->num_rows == 1) {
		$response_array['status'] = 'success'; 
	} else {
		$response_array['status'] = 'error';
	}
	echo json_encode($response_array);

	// Close connection
    $conn->close();
?>