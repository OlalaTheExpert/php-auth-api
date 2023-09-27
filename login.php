<?php

$b='Sammy254';
 $cser=mysqli_connect("localhost","root","","api_endpoint") or die("connection failed:".mysqli_error());

            $res = mysqli_query($cser,"select * FROM users WHERE email='samwel@treasurecapital.co.ke' and password='$b'");
            $result=mysqli_fetch_array($res);
            if($result)
            {

                    $returnData = [
                        'success' => 1,
                        'message' => 'You have successfully logged in.',
                        'token' => $token
                    ];
            }
            
        ?>