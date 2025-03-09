<?php
     class Product {
        private $db;
        
        public function __construct(PDO $pdo) {
            $this->db = $pdo;
        }
    
        public function getAllProducts() {
            $stmt = $this->db->query('SELECT * FROM products');
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    
        public function getProductById($id) {
            $stmt = $this->db->prepare('SELECT * FROM products WHERE id = :id');
            $stmt->execute(['id' => $id]);
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
    
        public function addProduct($name, $color, $img_url, $release_at, $brand, $price, $per_sale) {
            $stmt = $this->db->prepare('INSERT INTO products (name,color, img_url, release_at, brand, price, per_sale) VALUES (:name, :color, :img_url, :release_at, :brand, :price, :per_sale)');
            $stmt->execute(['name' => $name, 'color' => $color, 'img_url' => $img_url, 'release_at' => $release_at, 'brand' => $brand, 'price' => $price, 'per_sale' => $per_sale]);
            $stmt->execute(['name' => $name, 'color' => $color, 'img_url' => $img_url, 'release_at' => $release_at, 'brand' => $brand, 'price' => $price, 'per_sale' => $per_sale]);
            return $this->db->lastInsertId();
        }
    
        public function updateProduct($id, $name, $color, $img_url, $release_at, $brand, $price, $per_sale)  {
            $stmt = $this->db->prepare('UPDATE products SET name = :name, color = :color, img_url = :img_url, release_at = :release_at, brand = :brand, price = :price, per_sale = :per_sale WHERE id = :id');
            $stmt->execute(['id' => $id, 'name' => $name, 'color' => $color, 'img_url' => $img_url, 'release_at' => $release_at, 'brand' => $brand, 'price' => $price, 'per_sale' => $per_sale]);
            return $stmt->rowCount() > 0;
        }
    
        public function deleteProduct($id) {
            $stmt = $this->db->prepare('DELETE FROM products WHERE id = :id');
            $stmt->execute(['id' => $id]);
            return $stmt->rowCount() > 0;
        }
     }
?>