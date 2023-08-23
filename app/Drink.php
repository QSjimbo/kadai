<?php
namespace App;
use illuminate\Database\Eloquent\Model;

class Drink extends Model
{
    public $timestamps = false;
    protected $fillable = [
        "name",
        "price",
        "stock",
        "maker_id"
    ];
    public function maker(){
        return $this -> belongsTo("App\Maker");
    }
}
