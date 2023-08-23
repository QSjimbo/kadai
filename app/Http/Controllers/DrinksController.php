<?php
namespace App\Http\Controllers;
use illuminate\Http\Request;
use App\Maker;
use App\Drink;

class DrinksController extends Controller
{
    public function index()
    {
        $drinks = Drink::all();

        return view("drinks.index", [
            "drinks" => $drinks
        ]);
    }
    // Model課題のためcookie部分はコメントアウト
    // public function index(Request $request)
    // {
    //     if ($request->hasCookie("accessCount")) {
    //         $count = $request->cookie("accessCount");
    //     } else {
    //         $count = 0;
    //     }
    //     $count ++;
    //     $drinks = $this->getDrinks();
    //     return response()
    //         ->view("drinks.index", [
    //             "drinks" => $drinks,
    //             "accessCount" => $count
    //         ])
    //         ->cookie("accessCount", $count);
    // }

    public function cookieDelete(){
        $forget = \Cookie::forget("accessCount");
        return response()
      ->view("drinks.cookieDelete")
      ->cookie($forget);
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
   public function saveSession(Request $request){
    $data = [
        "price" => 120,
        "stock" => 20
    ];
    $request->session()->put("コーラ", $data);
    }

    public function showSession(Request $request){
        echo "<pre>";
        var_dump($request->session()->all());
        echo "</pre>";

    }
    public function deleteSession(Request $request){
        $request -> session()->forget("コーラ");
        echo "削除しました。";
    }

    public function create()
    {
        // モデルから全件取得
        $makers = Maker::all();

        return view("drinks.create", [
            "makers" => $makers
        ]);
    }

    public function store(Request $request)
    {
        $drink = new Drink();
        $data = $request->all();

        $drink->name = $data["name"];
        $drink->price = $data["price"];
        $drink->stock = $data["stock"];
        $drink->maker_id = $data["maker_id"];

        $drink->save();
    }






}


