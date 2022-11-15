<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    public $table ="roles";

    public $primaryKey = 'roleId';
    
    public $fillable = [
    
    'roleName',
    
    ];
    public function User(){

        return $this->hasMany('app\Model\User');

    }
    public $timestamps=false;
}
