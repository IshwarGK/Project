<?php

                            
                                            include "db_connect.php";
                                                
                                            $sql2 = "SELECT * FROM coupon_validation_airtel where plan_name = 'Zoom 599' and used = 0 limit 1";
                                        $result2 = $conn->query($sql2);
                                        $row2 = $result2->fetch_assoc();
                                        
                                        if($row2 > 0){
                                            $coupon_code = $row2['coupon_code'];
                                            $sql3 = "UPDATE coupon_validation_airtel SET used= 1 WHERE coupon_code= '$coupon_code'";
                                            $result3 = $conn->query($sql3);
                                                
                                     
                                    
                                        }?>