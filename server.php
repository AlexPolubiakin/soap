<?php 

/**
 *  SOAP SERVER CLASS
 *  https://gist.github.com/umidjons/f3de2533c51495a9c557
 */


 /**
 * 
 * Создать базу данных этим товаром
 * // [ "title" => "Lenovo Vibe Shot", "manufacturer" => "Lenovo", "price" => 9e3, "color" => "black"],
 * [ "title" => "Apple iPhone 7 128GB", "manufacturer" => "Apple", "price" => 9e4, "color" => "white" ],
 * [ "title" => "Samsung Galaxy S8", "manufacturer" => "Samsung", "price" => 5e4, "color" => "grey" ],
 * [ "title" => "Lenovo P2", "manufacturer" => "Lenovo", "price" => 2e4, "color" => "grey" ],
 * [ "title" => "Xiaomi Mi6 128GB", "manufacturer" => "Xiaomi", "price" => 7e3, "color" => "white" ],
 * [ "title" => "Xiaomi Mi Note 3 64Gb", "manufacturer" => "Xiaomi", "price" => 2e4, "color" => "black" ],
 * ]
 * Необходимо реализовать методы в классе:
 * Которые вытаскивают из бд по значениям
 * title
 * manufacturer
 * price
 * color
 * 
 * написать wsdl документ
 * 
 * Понять как связывается сервер и клиент , судя по всему на основе wdsl документа 
 * 
 * создать на другом хосте или на другом сервере простую страницу где выводяться по 1 значению title manufacturer price color 
 * 
 */


// Отключение кеширования wsdl-документа
ini_set("soap.wsdl_cache_enabled", "0");
// Создание SOAP-сервера
$server = new SoapServer("http://localhost/soap/goods.wsdl");
// Регистрация класса
$server->setClass("GoodsInfo");
// Запуск сервера
$server->handle();



 class GoodsInfo {

    function getItemsByName(){

    }
    function getItemsByManufacturer(){
        
    }
    function getItemsByPrice(){
        
    }
    function getItemsByColor(){
        
    }
 }