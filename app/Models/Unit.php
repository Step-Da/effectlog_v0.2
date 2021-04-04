<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use SimpleXMLElement;

class Unit extends Model
{  
    /**
     * Получение данных с сервера чарез строку (url)
     * 
     * @param string $url Строка подключение (ссылка)
     * 
     * @return mixed #decode Ответ (данные) с сервера
     */
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

    /**
     * Составление статистки на основе полученных данных с сервера
     * 
     * @param mixed $data Данные полученные с сервера
     * 
     * @return array $statistics Массив с статистикой
     */
    public function watchStatistics($data)
    {
        $error = 0; $success = 0;
        foreach($data as $item){ $item[0] == 10 ? ($error++) : ($success++); }
        $statistics = array('error' => $error, 'success' => $success);
        return $statistics;
    }


    public function readXml($url)
    {
        ini_set('max_execution_time', 300);
        $xmlData = simplexml_load_file($url);
    
        $primaryArray = array();
        $externalArray = array();

        foreach($xmlData->shop->offers->offer as $element){
            $primaryArray = [
                'name' => $element->name,
                'color' => $element->param[0],
                'article' => $element->param[1],
                'model' => $element->param[2],
                'active' => $element->productActivity,
                'picture' => $element->picture,
            ];
            array_push($externalArray, $primaryArray);
        }
        
        return $externalArray;
    }

    public function saveXmlData($externalArray)
    {
        for($i=0; $i <= count($externalArray); $i++){
            $offer = new Offer();
            $offer->name = $externalArray[$i]['name'];
            $offer->color = $externalArray[$i]['color'];
            $offer->article = $externalArray[$i]['article'];
            $offer->model = $externalArray[$i]['model'];
            $externalArray[$i]['active'] == "Y" ? ($offer->active = 1) : ($offer->active = 0);
            $offer->picture = $externalArray[$i]['picture'];
            $offer->save();
        }
    }
}