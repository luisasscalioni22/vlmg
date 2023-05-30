<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disco extends Model
{
    use HasFactory;
    protected $fillable = [
        'titulo',
        'name',
        'quantidade',
    ];
    public function estilo(){
        return $this->belongsTo('App/Models/Estilo');
    }
}
