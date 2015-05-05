<?php

                                            $plan_name = $_POST['plan'];
                                            include "db_connect.php";
                                                
                                            $sql2 = "SELECT * FROM coupon_validation_airtel where plan_name = '$plan_name' and used = 0 limit 1";
                                        $result2 = $conn->query($sql2);
                                        $row2 = $result2->fetch_assoc();
                                        
                                        if($row2 > 0){
                                            $coupon_code = $row2['coupon_code'];
                                            $sql3 = "UPDATE coupon_validation_airtel SET used = 1,`used_date`= CURDATE() WHERE coupon_code= '$coupon_code'";
                                            $result3 = $conn->query($sql3);
                                                
                                            }

                                        if($row2 == 0){
                                             $sql2 = "SELECT * FROM coupon_validation_tikona where plan_name = '$plan_name'  and used = 0 limit 1";
                                            $result2 = $conn->query($sql2);
                                            $row2 = $result2->fetch_assoc();
                                            
                                            if($row2 > 0){
                                            $coupon_code = $row2['coupon_code'];
                                            $sql3 = "UPDATE coupon_validation_tikona SET used= 1,`used_date`= CURDATE() WHERE coupon_code= '$coupon_code'";
                                            $result3 = $conn->query($sql3);
                                                
                                            }
                                        }
                                            
                                        if($row2 == 0){
                                             $sql2 = "SELECT * FROM coupon_validation_you_broadband where plan_name = '$plan_name' and used = 0 limit 1";
                                            $result2 = $conn->query($sql2);
                                            $row2 = $result2->fetch_assoc();
                                            if($row2 > 0){
                                            $coupon_code = $row2['coupon_code'];
                                            $sql3 = "UPDATE coupon_validation_you_broadband SET used= 1,`used_date`= CURDATE() WHERE coupon_code= '$coupon_code'";
                                            $result3 = $conn->query($sql3);
                                                
                                            }
                                        }
                                        if($row2 == 0){
                                             $sql2 = "SELECT * FROM coupon_validation_docomo where plan_name = '$plan_name' and used = 0 limit 1";
                                            $result2 = $conn->query($sql2);
                                            $row2 = $result2->fetch_assoc();
                                            if($row2 > 0){
                                            $coupon_code = $row2['coupon_code'];
                                            $sql3 = "UPDATE coupon_validation_docomo SET used= 1,`used_date`= CURDATE() WHERE coupon_code= '$coupon_code'";
                                            $result3 = $conn->query($sql3);
                                                
                                            }
                                        }
                                        if($row2 == 0){
                                             $sql2 = "SELECT * FROM coupon_validation_hathway where plan_name = '$plan_name' and used = 0 limit 1";
                                            $result2 = $conn->query($sql2);
                                            $row2 = $result2->fetch_assoc();
                                            if($row2 > 0){
                                            $coupon_code = $row2['coupon_code'];
                                            $sql3 = "UPDATE coupon_validation_hathway SET used= 1,`used_date`= CURDATE() WHERE coupon_code= '$coupon_code'";
                                            $result3 = $conn->query($sql3);
                                                
                                            }
                                        }
                                        if($row2 == 0){
                                             $sql2 = "SELECT * FROM coupon_validation_bsnl where plan_name = '$plan_name' and used = 0 limit 1";
                                            $result2 = $conn->query($sql2);
                                            $row2 = $result2->fetch_assoc();
                                            if($row2 > 0){
                                            $coupon_code = $row2['coupon_code'];
                                            $sql3 = "UPDATE coupon_validation_bsnl SET used= 1,`used_date`= CURDATE() WHERE coupon_code= '$coupon_code'";
                                            $result3 = $conn->query($sql3);
                                                
                                            }
                                        }
                                            
                                            
                                        $response_array['status'] = $coupon_code;
echo json_encode($response_array);
                                        
                                            
                                            
                                            
                                        ?>