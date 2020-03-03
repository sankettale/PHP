<?php     
        //adding new visitor
            function getUserIpAddr(){
                if(!empty($_SERVER['HTTP_CLIENT_IP'])){
                    //ip from share internet
                    $ip = $_SERVER['HTTP_CLIENT_IP'];
                }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
                    //ip pass from proxy
                    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
                }else{
                    $ip = $_SERVER['REMOTE_ADDR'];
                }
                return $ip;
            }
            $visitor_ip= getUserIpAddr();
            //$visitor_ip="15:150:15:15";
            //checking if visitor is unique
            $query="select * from counter_table where ip_address='$visitor_ip'";
            $result= mysqli_query($conn,$query);
            if(!$result)
            {
                die('retriving query failed'.$query);
            }
            $total_visitors= mysqli_num_rows($result);
            if ($total_visitors<1)
            {
                $query="insert into `counter_table`(`ip_address`) values('$visitor_ip') ";
                $result= mysqli_query($conn,$query);
            }
?>
