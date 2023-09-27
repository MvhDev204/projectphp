<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    // public static $products = [
    //     ["id" => "1", "name" => "Chuot logittech", "description" => "Chuột không dây logittech M171", "image" => "Untitled-6.png", "price" => "320.000đ" ],
    //     ["id" => "2", "name" => "chuot logittech", "description" => "Chuột không dây silent logittech M331", "image" => "Untitled-9.png", "price" => "385.000đ"],
    //     ["id" => "3", "name" => "chuot logittech", "description" => "Chuột không dây logittech silent M220", "image" => "Untitled-8.png", "price" => "395.000đ"],
    //     ["id" => "4", "name" => "chuot logittech", "description" => "Chuột không dây logittech pebble M350", "image" => "Untitled-7.png", "price" => "550.000đ"],

    //     ["id" => "5", "name" => "Chuot logittech", "description" => "Chuet có dây Gaming Logitech G102 Gen2 Lightsync", "image" => "Untitled-2.png", "price" => "450.000đ" ],
    //     ["id" => "6", "name" => "Chuot logittech", "description" => "Chuet Khöng däy Logitech MI 85", "image" => "Untitled-3.png", "price" => "285.000đ"],
    //     ["id" => "7", "name" => "Chuot logittech", "description" => "Chuet KhÖng däy Bluetooth Silent Logitech Signature M650", "image" => "Untitled-4.png", "price" => "765.000đ"],
    //     ["id" => "8", "name" => "Chuot logittech", "description" => "Chuet Bluetooth Silent Logitech M240", "image" => "Untitled-1.png", "price" => "350.000đ"],
    //     //chuot   

    //     //ban phim
    //     ["id" => "9", "name" => " ban phim co", "description" => "bàn phím cơ có dây Gaming Razer BlackWidow", "image" => "ban phim 2.jpeg", "price" => "2.240.000đ" ],
    //     ["id" => "10", "name" => " ban phim co", "description" => "Bộ bàn phím chuột không dây Bluetooth rapoo 8000m", "image" => "ban phim 1.jpeg", "price" => "500.000đ"],
    //     ["id" => "11", "name" => " ban phim co", "description" => "bàn phím cơ có dây Gaming silent razer blackwindow lite", "image" => "ban phim 3.jpeg", "price" => "1.670.000đ"],
    //     ["id" => "12", "name" => " ban phim co", "description" => "bàn phím cơ có dây Gaming asus tup k1", "image" => "ban phim 4.jpeg", "price" => "890.000đ"],

    //     ["id" => "13", "name" => " ban phim co", "description" => "Bän Phim Co cö Däy Gaming Corsair K68 RGB Mechanical", "image" => "ban phim 5.png", "price" => "3.100.000đ" ],
    //     ["id" => "14", "name" => " ban phim co", "description" => "Bän Phim Co Gaming MSI Vigor GK50 Elite", "image" => "ban phim 6.png", "price" => "2.500.000đ"],
    //     ["id" => "15", "name" => " ban phim co", "description" => "Bän phim Gaming Asus ROG Strix scope NX TKL DELUXE .", "image" => "ban phim 7.png", "price" => "1.845.000đ"],
    //     ["id" => "16", "name" => " ban phim co", "description" => "Bän phim Gaming Asus ROG Strix scope RX BL SW", "image" => "ban phim 8.png", "price" => "2.195.000đ"],
    //     ];
        public function index()
{
$viewData = [];
$viewData["title"] = "Products - shop Zay";

// $viewData["products"] = ProductController::$products;
$viewData["products"] = Product::all();
return view('product.index')->with("viewData", $viewData);
}
public function show($id)
{
// $viewData = [];
// // $product = ProductController::$products[$id - 1];
// $product = Product::findOrFail($id);
// $viewData["title"] = $product["name"] . " - shop Zay";
// // $viewData["subtitle"] = $product["name"] . " - Product information";

// $viewData["product"] = $product;
// return view('product.show')->with("viewData", $viewData);
$viewData = [];
$product = Product::findOrFail($id);
// $viewData["title"] = $product["name"]." - Online Store";
// $viewData["subtitle"] = $product["name"]." - Product information";
$viewData["title"] = $product->getName() . " - Online Store";
$viewData["subtitle"] = $product->getName() . " - Product information";
$viewData["product"] = $product;
return view('product.show')->with("viewData", $viewData);
}
}
