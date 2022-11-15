<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    use HasFactory;

    public $table ="province";

    public $primaryKey = 'provinceid';
    
    public $fillable = [
    
    'name','type',
    
    ];
    public function User(){

        return $this->hasMany('app\Model\User');

    }
    public $timestamps=false;
}
