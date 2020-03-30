<?php 
    class API_raiderio {
        public function getForecast(string $guildname): ?array {

            $curl = curl_init("https://raider.io/api/v1/guilds/profile?region=eu&realm=ysondre&name={$guildname}&fields=raid_progression");
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); // A modifier avec certificat .pem + curl_setopt_array (nécessite 3 param)
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            $data = curl_exec($curl);

            if($data === false || curl_getinfo($curl, CURLINFO_HTTP_CODE) !== 200){
                return null;
            }
            
            $results = [];
            $data = json_decode($data, true);
            foreach($data['raid_progression'] as $raid){
                $results[] = [
                    'raid' => $raid['summary'],
                ];
            }
            return $results;
        }
    }
?>