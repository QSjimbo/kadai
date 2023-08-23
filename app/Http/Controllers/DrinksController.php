<?php
namespace App\Http\Controllers;
use illuminate\Http\Request;
use App\Maker;

class DrinksController extends Controller
{
    public function index(Request $request)
    {

        if ($request->hasCookie("accessCount")) {
            $count = $request->cookie("accessCount");
        } else {
            $count = 0;
        }

        $count ++;

        $drinks = $this->getDrinks();

        // returnの記述を以下のように修正する
        return response()
            ->view("drinks.index", [
                "drinks" => $drinks,
                "accessCount" => $count
            ])
            ->cookie("accessCount", $count);
    }
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

    public function create(){
        $makers = Maker::all();
        // foreach ($makers as $maker) {
        //     echo $maker->name;
        // }
        return view("drinks.create", ["makers" => $makers]);
    }



























}


