<?php
namespace App;
use illuminate\Database\Eloquent\Model;

class Maker extends Model{
    public $timestamps = false;
    public function maker(){
        return $this->hasMany("App\Drink");
    }
}
