<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public $table ="category";

    public $primaryKey = 'CategoryID';
    
    public $fillable = [
    
    'CategoryName', 'CategoryDescription',
    
    ];
    public function product(){
        return $this->belongsToMany('App\Models\Product');

    }
    public $timestamps=false;

}
