<?php





$hostname = "http://maps.googleapis.com/maps/api/geocode/json?latlng=40.714224,-73.961452&sensor=true"; 


            // read the post from PayPal system and add 'cmd'


            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, "$hostname");
            curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);

            $res = curl_exec($ch);
            curl_close($ch);

            if(!$res)
            {
                // error log
                echo'Unable to find results.';
            } else {    
              // ALL output printing code goes down here**
                //$res=json_decode($res);
                //var_dump(json_decode($res));
                $obj=var_dump(json_decode($res, true));
                print_r($obj['"results']);
			}
?>