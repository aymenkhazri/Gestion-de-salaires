<?php

namespace App\Modules\L5Modular\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contrat extends Model
{
    use HasFactory;
    public $guarded = [];

    public function employes(){
        return $this->hasMany('App\Modules\L5Modular\Models\Employe');
    }
}
