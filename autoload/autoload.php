<?php 
	  session_start();
    require_once  __DIR__. "/../libraries/database.php";
    require_once  __DIR__. "/../libraries/function.php";  

    $db = new database;
    define("ROOT", $_SERVER['DOCUMENT_ROOT'] ."/webphp/public/uploads/");
  $category = $db->fetchAll("category");
  // san pham moi
  $sqlNew = "SELECT * FROM product WHERE 1 ORDER BY ID DESC LIMIT 5";
	$productNew = $db->fetchsql($sqlNew);
  //san pham ban chay
  $sqnPay = "SELECT * FROM product WHERE 1 ORDER BY PAY DESC LIMIT 5";
  $productPay = $db->fetchsql($sqnPay);
 ?>