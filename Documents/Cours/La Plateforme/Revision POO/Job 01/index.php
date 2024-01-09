<?php

require_once 'Category.php';
require_once 'Product.php';

// Utilisation de la classe Category
$category = new Category(1, 'Clothing', 'Apparel category', new DateTime(), new DateTime());

// Utilisation de la classe Product liée à une catégorie
$product = new Product(1, 't-shirt', ['https://picsum/200/300'], 1000, 'A beautiful t-shirt', 10, new DateTime(), new DateTime(), $category->getId());

// Affichage des propriétés avec var_dump()
echo "Product:\n";
var_dump($product);

echo "Category:\n";
var_dump($category);