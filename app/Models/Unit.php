<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Unit extends Model
{
    public function read($url)
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
        $list = json_decode($response);
        return $list;
    }

    public function multiRead($url)
    {
        // создаём оба ресурса cURL
        $ch1 = curl_init();
        $ch2 = curl_init();

        // устанавливаем URL и другие соответствующие опции
        curl_setopt($ch1, CURLOPT_URL, $url);
        curl_setopt($ch1, CURLOPT_HEADER, 0);
        curl_setopt($ch2, CURLOPT_URL, $url);
        curl_setopt($ch2, CURLOPT_HEADER, 0);

        //создаём набор дескрипторов cURL
        $mh = curl_multi_init();

        //добавляем два дескриптора
        curl_multi_add_handle($mh,$ch1);
        curl_multi_add_handle($mh,$ch2);

        //запускаем множественный обработчик
        do {
            $status = curl_multi_exec($mh, $active);
            if ($active) {
                // Ждём какое-то время для оживления активности
                curl_multi_select($mh);
            }
        } while ($active && $status == CURLM_OK);

        //закрываем дескрипторы
        curl_multi_remove_handle($mh, $ch1);
        curl_multi_remove_handle($mh, $ch2);
        curl_multi_close($mh);
    }

    public function generatingStatistics($json)
    {
        $error = 0;
        $success = 0;
        foreach($json as $elementJson){
            $elementJson[0] ==  $this->errorStatus ? ($error++) : ($success++);
        }
        $statisitic = array(
            'error' => $error,
            'success' => $success
        );
        return $statisitic; 
    }

    /////////////////////////////////////////////////////////////////////////////

    public function testfile($url)
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