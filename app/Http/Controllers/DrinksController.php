<?php
namespace App\Http\Controllers;

class DrinksController extends Controller
{
   public function index(){
    $drinks = $this->getDrinks();
    echo "<pre>";
    var_dump($drinks);
    echo "<pre>";
   }


   public function getDrinks(){
    $drinks = [
        [
            "name" => "water",
            "price" => 100,
            "stock" => 50,
            "maker" => array("name" => "A社")
        ],
        [
            "name"  => "tea",
            "price" => 120,
            "stock" => 80,
            "maker" => array("name" => "株式会社 B社")
        ],
        [
            "name"  => "soda",
        "price" => 147,
        "stock" => 100,
        "maker" => array("name" => "株式会社 C社")
        ]
    ];
    return $drinks;
   }
}
