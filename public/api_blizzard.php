<?php
    $curl = curl_init("https://raider.io/api/v1/guilds/profile?region=eu&realm=ysondre&name=Bad%20Seeds&fields=raid_progression");
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); // A modifier avec certificat .pem + curl_setopt_array (nécessite 3 param)
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $data = curl_exec($curl);
        if($data === false){
            var_dump(curl_error($curl));
        }else{
            if(curl_getinfo($curl,CURLINFO_HTTP_CODE) === 200){
                $data = json_decode($data, true);
                echo '<pre>';
                    var_dump($data);
                echo'</pre>';
            }
        }
    curl_close($curl);
?>
