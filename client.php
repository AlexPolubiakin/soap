<meta charset="utf-8">
<?php
	try {
		$client = new SoapClient("https://soap-server-polubiakin.c9users.io/goods.wsdl");
		
		echo 'Поиск по Title = "Lenovo Vibe Shot"<br>';
		if($client->getGoodsByTitle("Lenovo Vibe Shot")){
		    echo "Товар есть в наличии<br><hr>";
		} else {
		    echo "Увы такого товара нет в наличии<br><hr>";
		}
	
	    
	    echo 'Поиск по Manufacturer = "Lenovo123"<br>';
		if($client->getGoodsByManufacturer("Lenovo123")){
		    echo "Такой производитель есть в наличии<br><hr>";
		} else {
		    echo "Увы такого производителя нет в наличии<br><hr>";
		}
	    
	    echo 'Поиск по Price = 10e4 <br>';
		if($client->getGoodsByPrice(123e4)){
		    echo "Товар с такой ценой есть в наличии<br><hr>";
		} else {
		    echo "Товара с такой ценой увы нет в наличии<br><hr>";
		}
		
		echo 'Поиск по Color = "black"<br>';
		if($client->getGoodsByColor("black")){
		    echo "Товар есть в наличии<br><hr>";
		} else {
		    echo "Увы такого товара нет в наличии<br><hr>";
		}
	    
	} catch (SoapFault $exception) {
		echo $exception->getMessage();	
    }
    
?>
