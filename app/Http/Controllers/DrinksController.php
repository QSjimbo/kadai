<?php
namespace App\Http\Controllers;

class DrinksController extends Controller
{
//    public function index(){
//        $drinks = $this->getDrinks();
//        return view("drinks.index", ["drinks" => $drinks]);
//    }
    // 課題１
   public function index(Request $request){
    if ($request->hasCookie("accessCount")){// hasCookie("OOO")は組み込み「""内の内容のCookieを持ってるかどうか」
        $count = $request->cookie("accessCount");
    }else{
        $count = 0;
    }
    var_dump($count);
    $drinks = $this->getDrinks();
    return view("drinks.index", ["drinks" => $drinks]);
   }


   public function getDrinks(){
    $drinks = [
        [
            "name" => "water",
            "price" => 100,
            "stock" => 50,
            "maker" => array("name" => "株式会社 A社")
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


