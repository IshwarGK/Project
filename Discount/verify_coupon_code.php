<?php

    include "db_connect.php";

    $username = $_POST['username'];
    $pwd = $_POST['pwd'];
    $coupon = $_POST['coupon'];

    if($username = 'AirtelUser'){
        $db_table = 'coupon_validation_airtel';
    }
    
	$sql2 = "select * from verified_coupon_airtel where coupon_code = '$coupon'";
	$result2 = $conn->query($sql2);
	$row2 = $result2->fetch_assoc();
	
	if($row2 > 0){
		$response_array['status'] = 'error';
		//echo json_encode($response_array);

	}
	else{

		$sql = "SELECT * FROM $db_table WHERE coupon_code = '$coupon'";
		$result = $conn->query($sql);
		$row = $result->fetch_assoc();
		if ($row > 0) {

				$sql3 = "INSERT INTO verified_coupon_airtel VALUES ('$username','$coupon',CURDATE())";
				$result3 = $conn->query($sql3);
			$response_array['status'] = 'success'; 

		} else {
			$response_array['status'] = 'wrongcoupon';
		}
	
	}
echo json_encode($response_array);
 
?>