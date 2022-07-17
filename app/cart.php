<?php
    namespace App;
    class cart{
        public $products = null;
        // Product là một mảng.
        // Mỗi phần tử của mảng là một mảng [id, quantity, productInfo]
        public $totalPrice = 0;
        public $totalQuantity = 0;

        public function __construct($cart){
            if ($cart) {
                $this->products = $cart->products;
                $this->totalPrice = $cart->totalPrice;
                $this->totalQuantity = $cart->totalQuantity;
            }
        }

        public function addCart($product, $id){
            $newProduct = ['quantity'=>0, 'price'=>$product->price, 'productInfo'=>$product];

            if ($this->products && array_key_exists($id, $this->products)) {
                $newProduct = $this->products[$id];
            }
            $newProduct['quantity']++;
            $newProduct['price'] = $newProduct['quantity'] * $product->price;
            $this->products[$id] = $newProduct;
            $this->totalPrice += $product->price;
            $this->totalQuantity++;
        }

        public function deleteItem($id){
            $this->totalPrice -= $this->products[$id]['quantity'];
            $this->totalQuantity -= $this->products[$id]['price'];
            unset($this->products[$id]);
        }

        public function updateItem($id, $quantity){
            $this->totalQuantity -= $this->products[$id]['quantity'];
            $this->totalPrice -= $this->products[$id]['price'];

            $this->products[$id]['quantity'] = $quantity;
            $this->products[$id]['price'] = $quantity * $this->products[$id]['productInfo']->price;

            $this->totalQuantity += $this->products[$id]['quantity'];
            $this->totalPrice += $this->products[$id]['price'];
        }
    }
?>
