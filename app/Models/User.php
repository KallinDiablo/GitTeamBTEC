<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasFactory;

    public $table ="users";

    public $primaryKey = 'uID';
    
    public $fillable = [
    
    'uName','uUsername','uPassword','uEmail','uImage','uPhoneNumber','roleId','status','pronvinceid','districid','wardid','number','uMoney',
    
    ];
    public function Receipt(){
        return $this -> belongsTo('app\Models\Receipt');
    }
    public function Role(){
        return $this -> belongsTo('app\Models\Role');
    }
    public function Province(){
        return $this -> belongsTo('app\Models\Province');
    }
    public function District(){
        return $this -> belongsTo('app\Models\District');
    }
    public function Ward(){
        return $this -> belongsTo('app\Models\Ward');
    }
    public $timestamps=false;
}
