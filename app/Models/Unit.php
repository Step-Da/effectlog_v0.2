<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{  
    public function readURL($url)
    {
        $crequest = curl_init();
        curl_setopt($crequest, CURLOPT_HEADER, 0);
        curl_setopt($crequest, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($crequest, CURLOPT_URL, $url);
        curl_setopt($crequest, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($crequest, CURLOPT_VERBOSE, 0);
        curl_setopt($crequest, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($crequest, CURLOPT_ENCODING, true);
        curl_setopt($crequest, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4 );
        curl_setopt($crequest, CURLOPT_ENCODING,  '');
        
        $response = curl_exec($crequest);
        curl_close($crequest);
        $decode = json_decode($response);
        return $decode;
    }

    public function watchStatistics($data)
    {
        $error = 0; $success = 0;
        foreach($data as $item){ $item[0] == 10 ? ($error++) : ($success++); }
        $statistics = array('error' => $error, 'success' => $success);
        return $statistics;
    }
}