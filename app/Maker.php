<?php
namespace App;
use illuminate\Database\Eloquent\Model;

class Maker extends Model{
    public $timestamps = false;
    public function drinks(){
        return $this->hasMany("App\Drink");
    }
}
