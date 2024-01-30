<?php 
// Create an `Product` class with properties for product ID, name, and price. Create a `ShoppingCart` class to add products, calculate the total price, and display the items in the cart.

class Product {
    private $productId;
    private $name;
    private $price;

    public function __construct($productId, $name, $price) {
        $this->productId = $productId;
        $this->name = $name;
        $this->price = $price;
    }

    public function getPrice() {
        return $this->price;
    }
}

class ShoppingCart {
    private $items = [];

    public function addItem(Product $product) {
        $this->items[] = $product;
    }

    public function calculateTotal() {
        $total = 0;
        foreach ($this->items as $item) {
            $total += $item->getPrice();
        }
        return $total;
    }

    public function displayItems() {
        echo "Shopping Cart Items:\n";
        foreach ($this->items as $item) {
            echo "{$item->getPrice()} USD\n ";
        }
    }
}

// Create product objects
$product1 = new Product(1, "Laptop", 80000);
$product2 = new Product(2, "iphone", 110000);

// Create a shopping cart object
$cart = new ShoppingCart();

// Add products to the cart
$cart->addItem($product1);
$cart->addItem($product2);

// Display items and calculate total price
$cart->displayItems();
echo "Total Price: " . $cart->calculateTotal() . " USD";



?>