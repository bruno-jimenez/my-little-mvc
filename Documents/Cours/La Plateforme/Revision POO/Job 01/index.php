<?php

require_once 'Product.php'; // Assurez-vous d'inclure le fichier contenant la classe Product

// Création d'une instance de la classe Product
$product = new Product(1, 't-shirt', ['https://picsum/200/300'], 1000, 'A beautiful t-shirt', 10, new DateTime(), new DateTime());

// Affichage des propriétés avec var_dump() avant modification
echo "Avant modification :\n";
var_dump($product);

// Utilisation des getters
echo "Nom du produit : " . $product->getName() . "\n";
echo "Prix du produit : " . $product->getPrice() . "\n";

// Modification des propriétés avec les setters
$product->setPrice(1200);
$product->setDescription('An amazing t-shirt');
$product->setUpdatedAt(new DateTime());

// Affichage des propriétés avec var_dump() après modification
echo "Après modification :\n";
var_dump($product);
