<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estilo extends Model
{
    use HasFactory;
    protected $fillable = [ 
        'descricao',
    ];
    public function estilo(){
        return $this->hasMany('App/Models/Disco', 'estilo_id');
    }
}

