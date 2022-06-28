<?php

class Product {
    private $barcode;
    private $title;
    private $price;

    public function getBarcode() {
        return $this->barcode;
    }
    public function getTitle() {
        return $this->title;
    }
    public function getPrice() {
        return $this->price;
    }
    public function setBarcode($barcode) {
        $this->barcode = $barcode;
    }
    public function setTitle($title) {
        $this->title = $title;
    }
    public function setPrice($price) {
        $this->price = $price;
    }
    
    public function __construct($barcode, $title, $price) {
        $this->barcode = $barcode;
        $this->title = $title;
        $this->price = $price;
    }

}

class ShoppingCartItem extends Product {
    private $quantity;
    private Product $product;

    public function getQuantity() {
        return $this->quantity;
    }
    public function setQuantity($quantity) {
        $this->quantity = $quantity;
    }
    function ShoppingCartItem($product, $quantity){
        $shoppingCartItem = [];
        if($product instanceof Product) {
            $shoppingCartItem[] = $shoppingCartItem;
        }

    }
    
}

class ShoppingCart extends ShoppingCartItem {
    private $cartitems = [];
    private Product $product;

    public function getCartitems() {
        $this->cartitems[] = $cartitems;
    }
    //da li item vec postoji u nizu, ako postoji treba ga naci i povecati samo quantity
    public function addToCart($product, $quantity = 1) {
        if(ShoppingCartItem() instanceof ShoppingCartItem){
            $shoppingCartItem = $cartitems;
            $quantity = $quantity + 1;
        }
        return $this;
        
    }
    public function kojaIzlistavaSveDodateIteme() {
        foreach ($cartitems as $item) {
            if($item->getProduct()->getBarcode() == $this->barcode) {
                return $this->getProduct();
            }
        }    

    }
    //brise item iz niza
    public function removeItem($productBarcode) {
        if($productBarcode instanceof Product) {
            foreach($this->cartitems as $index => $item) {
                if($item->getProduct()->getBarcode() == $product->getBarcode()) {
                    unset($this->cartitems[$index]);
                    break;
                }
            }
       }
    }

}

$product1 = new Product(1, 'olovka', 50);
$product2 = new Product(2, 'gumica', 80);
$product3 = new Product(3, 'sestar', 250);
$product4 = new Product(4, 'penkalo', 400);
$product5 = new Product(5, 'mine', 70);

$shopingCartItem1 =  new ShoppingCartItem(2, $product1);
$shopingCartItem2 =  new ShoppingCartItem(1, $product1);
$shopingCartItem3 =  new ShoppingCartItem(5, $product2);
$shopingCartItem4 =  new ShoppingCartItem(1, $product2);
$shopingCartItem5 =  new ShoppingCartItem(2, $product3);
$shopingCartItem6 =  new ShoppingCartItem(5, $product3);
$shopingCartItem7 =  new ShoppingCartItem(2, $product4);
$shopingCartItem8 =  new ShoppingCartItem(1, $product4);
$shopingCartItem9 =  new ShoppingCartItem(7, $product5);
$shopingCartItem10 = new ShoppingCartItem(3, $product5);


?>