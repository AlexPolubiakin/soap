<?php 

/**
 *  SOAP SERVER
 */

 class Goods {

    public $goods = [
        [ "title" => "Lenovo Vibe Shot", "manufacturer" => "Lenovo", "price" => 9e3, "color" => "black"],
        [ "title" => "Apple iPhone 7 128GB", "manufacturer" => "Apple", "price" => 9e4, "color" => "white" ],
        [ "title" => "Samsung Galaxy S8", "manufacturer" => "Samsung", "price" => 5e4, "color" => "grey" ],
        [ "title" => "Lenovo P2", "manufacturer" => "Lenovo", "price" => 2e4, "color" => "grey" ],
        [ "title" => "Xiaomi Mi6 128GB", "manufacturer" => "Xiaomi", "price" => 7e3, "color" => "white" ],
        [ "title" => "Xiaomi Mi Note 3 64Gb", "manufacturer" => "Xiaomi", "price" => 2e4, "color" => "black" ],
 ];


    function getGoodsByTitle($name){
        foreach($this->goods as $key => $value){
            if($this->goods[$key]['title'] == $name){
                $result[] = $value;
            }
        }    
        return $result;    
    }

    function getGoodsByManufacturer($manufacturer){
        foreach($this->goods as $key => $value){
            if($this->goods[$key]['manufacturer'] == $manufacturer){
                $result[] = $value;
            }
        }    
        return $result;
    }

    function getGoodsByPrice($price){
        foreach($this->goods as $key => $value){
            if($this->goods[$key]['price'] == $price){
                $result[] = $value;
            }
        }    
        return $result;
        
    }

    function getGoodsByColor($color){
        foreach($this->goods as $key => $value){
            if($this->goods[$key]['color'] == $color){
                $result[] = $value;
            }
        }    
        return $result;
        
    }
 }



// Отключение кеширования wsdl-документа
ini_set("soap.wsdl_cache_enabled", "0");
// Создание SOAP-сервера
$server = new SoapServer("http://localhost/soap/goods.wsdl");
// Регистрация класса
$server->setClass("Goods");
// Запуск сервера
$server->handle();


//  $test = new Goods;
// //  print_r($test->getGoodsByTitle('Lenovo P2'));
//  if($test->getGoodsByTitle('Lenovo P2')){
//      echo 'есть в наличии';
//  } else {
//      echo 'нет в наличии';
//  }

//  echo "<br>";

//  print_r($test->getGoodsByManufacturer('Xiaomi'));

//  echo "<br>";

//  print_r($test->getGoodsByPrice(5e4));

//  echo "<br>";

//  print_r($test->getGoodsByColor('black'));

phpinfo();