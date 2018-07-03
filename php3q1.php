<?php

/**
 * 
 * Использовать пространство имен для класса goods
 * // Создайте класс Goods (свойства: title, manufactured, price, color; методы: show, export)
 * написать функции show() и export()(что должен делать данный метод ?// return данных в необходимом формате для добавления в goodsCollection)
 * 
 * // Создайте класс GoodsCollection (свойство: collection; методы: show, push, add, item)
 * свойство коллекция это массив товаров см класс Goods
 * 
 * методы
 * show() - распечатать коллекцию
 * push() - дбавить существующий элемент коллекции
 * add() - добавить новый элемент коллекции
 * item() - выводит информацию о элементе  по признаку? (какому?)
 * 
 *  */
// [
// [ "title" => "Lenovo Vibe Shot", "manufacturer" => "Lenovo", "price" => 9e3, "color" => "black"],
// [ "title" => "Apple iPhone 7 128GB", "manufacturer" => "Apple", "price" => 9e4, "color" => "white" ],
// [ "title" => "Samsung Galaxy S8", "manufacturer" => "Samsung", "price" => 5e4, "color" => "grey" ],
// [ "title" => "Lenovo P2", "manufacturer" => "Lenovo", "price" => 2e4, "color" => "grey" ],
// [ "title" => "Xiaomi Mi6 128GB", "manufacturer" => "Xiaomi", "price" => 7e3, "color" => "white" ],
// [ "title" => "Xiaomi Mi Note 3 64Gb", "manufacturer" => "Xiaomi", "price" => 2e4, "color" => "black" ],
// ]

// Создайте файл php3-task1.php — основной файл задания; создайте экземпляры классов и выведите товары на странице

namespace app;
include "app/autoload.php";
use \app\Goods\Goods as Goods;
use \app\GoodsCollection\GoodsCollection as GoodsCollection;

$g1 = new Goods('Lenovo Vibe Shot','Lenovo',9e3,'black');
$g2 = new Goods('Apple iPhone 7 128GB','Apple',9e4,'white');
$g3 = new Goods('Samsung Galaxy S8','Samsung Galaxy S8',5e4,'grey');
$g4 = new Goods('Lenovo P2','Lenovo',2e4,'grey');
// добавление нового элемента
echo "Работа метода show() в классе Goods: ";
echo "<br>";
echo $g1->show();

echo "<br>";
echo "<br>";

echo "Работа метода export() в классе Goods: ";
echo "<br>";
print_r($g1->export());

echo "<br>";
echo "<br>";

$goods = new GoodsCollection("");

$goods->push($g1->export());
$goods->push($g2->export());
$goods->push($g3->export());
$goods->push($g4->export());

// print_r($goods->collection[0]);

// Добавление элементов в коллекцию
$goods->add("Xiaomi Mi6 128GB","Xiaomi","7e3","white");
$goods->add("Xiaomi Mi Note 3 64Gb","Xiaomi","2e4","black");

echo "Использование метода item, вывод элемента GoodsCollection по индексу";
echo "<br>";
print_r($goods->item(5));

echo "<br>";
echo "<br>";
echo "Все элементы коллекции: ";
echo "<br>";
print_r($goods->collection);

// [ "title" => "Xiaomi Mi6 128GB", "manufacturer" => "Xiaomi", "price" => 7e3, "color" => "white" ],
// [ "title" => "Xiaomi Mi Note 3 64Gb", "manufacturer" => "Xiaomi", "price" => 2e4, "color" => "black" ],
?>

