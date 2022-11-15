<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ward extends Model
{
    use HasFactory;
    
    public $table ="ward";

    public $primaryKey = 'wardid';
    
    public $fillable = [
    
    'name','type','location','districtid'
    
    ];
    public function User(){

        return $this->hasMany('app\Model\User');

    }
    public function District(){

        return $this->hasMany('app\Model\District');

    }
    public $timestamps=false;
}
