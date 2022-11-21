<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receipt extends Model
{
    use HasFactory;

    public $table ="Receipt";

    public $primaryKey = 'rID';
    
    public $fillable = [
    
    'rID','uID','rTotalPrice','status','update_at','create_at',
    
    ];
    public function User(){
        return $this -> hasMany('app\Models\User');
    }
    public function Detail(){
        return $this -> hasMany('app\Models\Detail');
    }
    const UPDATE_AT ='update_at';
    const CREATE_AT ='create_at';
    public $timestamps=false;
}
