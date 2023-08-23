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
    public function drink(){
        return $this -> belongsTo("App\Maker");
    }
}
