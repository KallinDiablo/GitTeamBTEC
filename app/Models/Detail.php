<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    use HasFactory;

    public $table ="detail";

    public $primaryKey = 'dID';
    
    public $fillable = [
    
    'rID','pID','dQuantity'
    
    ];
    public function Receipt(){

        return $this->belongsTo('app\Model\Receipt');

    }
    public function Product(){
        return $this->belongsTo('App\Models\Product');

    }
    public $timestamps=false;
}
