<?php

namespace App\Modules\L5Modular\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    use HasFactory;
    public $guarded = [];

    public function contrats(){
        return $this->belongsTo('App\Modules\L5Modular\Models\Contrat');
    }
}
