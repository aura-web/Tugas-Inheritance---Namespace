<?php

// Namespace store
namespace store {
    class Product {
        private $name;
        private $price;

        public function __construct($name, $price) {
            $this->name = $name;
            $this->price = $price;
        }

        public function getInfo() {
            return "Store Product: {$this->name}, Price: Rp. {$this->price}<br>";
        }
    }
}

// Namespace warehouse
namespace warehouse {
    class Product {
        private $name;
        private $stock;

        public function __construct($name, $stock) {
            $this->name = $name;
            $this->stock = $stock;
        }

        public function getInfo() {
            return "Warehouse Product: {$this->name}, Stock: {$this->stock} units<br>";
        }
    }
}

// Kembali ke global namespace untuk membuat objek
namespace {
    use store\Product as StoreProduct;
    use warehouse\Product as WarehouseProduct;

    // Membuat objek dari kelas StoreProduct
    $storeProduct = new StoreProduct("Laptop", 15000000);
    echo $storeProduct->getInfo();

    // Membuat objek dari kelas WarehouseProduct
    $warehouseProduct = new WarehouseProduct("Laptop", 100);
    echo $warehouseProduct->getInfo();
}
?>
