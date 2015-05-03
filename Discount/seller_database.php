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
	$fullname = $_POST['fullname'];
   	$username = $_POST['username'];
	$email = $_POST['email'];
	$pwd = $_POST['pwd'];
	$mobilenumber = $_POST['mobilenumber'];
	$companyname = $_POST['companyname'];
	$companyaddress = $_POST['companyaddress'];
	$area = $_POST['area'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$zipcode = $_POST['zipcode'];
	$product = $_POST['product'];

	$dupli = "SELECT * FROM seller_account WHERE Username = '$username'";
	$result = $conn->query($dupli);
	if ($result->num_rows > 0) {
		$response_array['status'] = 'error'; 
	} else {
		$sql = "INSERT INTO seller_account (Full_Name, Username, Email, Password, Mobile_Number, Company_Name, Company_Address, Area, City, State, Zip_Code, Product)
       		VALUES('$fullname', '$username', '$email', '$pwd', '$mobilenumber', '$companyname', '$companyaddress', '$area', '$city', '$state', '$zipcode', '$product')";
	
		if ($conn->query($sql) === TRUE) {
    		$response_array['status'] = 'success';
		} else {
    		echo "Error: " . $sql . "<br>" . $conn->error . $conn->query($sql);
		}
	}
	echo json_encode($response_array);

	// Close connection
    $conn->close();
?>