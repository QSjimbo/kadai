<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestFormController extends Controller
{
    public function form(){
        return view("requestForm.form");
    }

    public function postRequest(Request $request){
        // echo $request -> post("message"). "<br>";
        echo $request -> get("message");
    }

    public function getRequest(Request $request){
        echo $request -> get("message");
    }


    public function showAllrequest(Request $request){
        $allRequestData = $request -> all();
        foreach ($allRequestData as $data) {
            echo $data;
        }
    }
}
