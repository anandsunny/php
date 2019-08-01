<?php
class Logger {
	public function log($message) {
		echo "Logger message: $message";
	}
}

class userProfile {
	private $logger;
	public function createUser() {
		$this->logger->log("user created.");
	}
	public function updateUser() {
		$this->logger->log("user updated.");
	}
	public function deleteUser() {
		$this->logger->log("user deleted.");
	}
	public function __construct(Logger $logger) {
		$this->logger = $logger;
	}
}
$logger = new Logger;
$user = new userProfile($logger);
$user->updateUser();
?>

<?php
/**
* not dependency injection example
*/
// class stockItem {
// 	private $quantity;
// 	private $status;

// 	public function __construct($q, $s) {
// 		$this->quantity = $q;
// 		$this->status = $s;
// 	}
// 	public function getQuantity() {
// 		return $this->quantity;
// 	}
// 	public function getStatus() {
// 		return $this->status;
// 	}
// }
// class product {
// 	private $stockItem;
// 	private $sku;

// 	public function __construct($q, $s, $sku) {
// 		$this->stockItem = new stockItem($q, $s);
// 		$this->sku = $sku;
// 	}
// 	public function getStockItem() {
// 		return $this->stockItem;
// 	}
// 	public function getSku() {
// 		return $this->sku;
// 	}
// }
// $product = new product("porduct Quantity\n"," product status\n", " product sku function");
// var_dump($product->getStockItem());
?>

<?php

/**
* dependency injection example
*/
// class stockItem
// {
// 	private $quantity;
// 	private $status;
// 	function __construct($quantity, $status)
// 	{
// 		$this->quantity = $quantity;
// 		$this->status = $status;
// 	}
// 	public function getQuantity() {
// 		return $this->quantity;
// 	}
// 	public function getStatus() {
// 		return $this->status;
// 	}
// }
// class product {
// 	private $stockItem;
// 	private $sku;

// 	public function __construct($sku, stockItem $stockItem) {
// 		$this->stockItem = $stockItem;
// 		$this->sku = $sku;
// 	}
// 	public function getStockItem() {
// 		echo "getStockItem function of class product.";
// 		return $this->stockItem;
// 	}
// 	public function getSku() {
// 		return $this->sku;
// 	}
// }
// $stockItem = new stockItem("product quantity","product status");
// $product = new product("produc sku", $stockItem);
// $product->getStockItem();
?>