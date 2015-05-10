<?php

	// Start the session
	//session_start();
	
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
	//$username = $_POST['username'];
	//$pwd = $_POST['pwd'];
    if(isset($_COOKIE['cookies_username'])){
        
        $username = $_COOKIE['cookies_username'];
        $pwd = $_COOKIE['cookies_pwd'];
       // echo "Cookie named '" . $username . "' is not set!";
        $sql = "SELECT * FROM seller_account WHERE Username = '$username' and Password = '$pwd'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        if ($row > 0) {
            $response_array['status'] = 'success'; 

        } else {
            $response_array['status'] = 'error';
        }
        echo json_encode($response_array);
        header('Location: seller_after_login.php');
    }
    else{   
        $username = $_POST['username'];
        $pwd = $_POST['pwd'];

        $sql = "SELECT * FROM seller_account WHERE Username = '$username' and Password = '$pwd'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        if ($row > 0) {
            $response_array['status'] = 'success'; 

            $cookie_name = "cookies_username";
            $cookie_value = $username;
            setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

            $cookie_name = "cookies_pwd";
            $cookie_value = $pwd;
            setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

        } else {
            $response_array['status'] = 'error';
        }
        echo json_encode($response_array);
    }
	// Close connection
    $conn->close();
?>