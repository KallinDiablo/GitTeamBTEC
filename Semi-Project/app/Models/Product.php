<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public $table ="product";

    public $primaryKey = 'pID';
    
    public $fillable = [
    
    'pName','pDescription','pImage1','pImage2','pPrice','pQuantity','cID',
    
    ];
    public function Country(){
        return $this -> belongsTo('app\Models\Country');
    }
    public function category(){
        return $this->belongsToMany('App\Models\Category');

    }
    const UPDATE_AT ='update_at';
    const CREATE_AT ='create_at';
    public $timestamps=false;

    
}
