<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    use HasFactory;
    public $table ="category_product";

    public $primaryKey = ['pID','CategoryID'];
    public $incrementing = false;
    public function Category(){
        return $this -> belongsTo('app\Model\Category');
    }
    public function Product(){
        return $this -> belongsTo('app\Model\Product');
    }
    public $timestamps=false;

}
