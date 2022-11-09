<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    public $table ="country";

    public $primaryKey = 'cID';
    
    public $fillable = [
    
    'cName',
    
    ];
    public function Product(){

        return $this->hasMany('app\Model\Product');

    }
    public $timestamps=false;

}
