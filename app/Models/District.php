<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;

    public $table ="district";

    public $primaryKey = 'districtid';
    
    public $fillable = [
    
    'name','type','location','pronvinceid'
    
    ];
    public function User(){

        return $this->hasMany('app\Model\User');

    }
    public function Province(){

        return $this->hasMany('app\Model\Province');

    }
    public $timestamps=false;
}
