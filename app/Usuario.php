<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'users';
    public    $timestamps = false;
    protected $fillable = [        
        'name',
        'email',
        'cpf',
        'data_nascimento',
        'password',
        'admin',
        'ativo'
    ];
    
}
