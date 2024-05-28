<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categorias';

    protected $fillable = [
        'nome_categoria',
        'descricao_categoria',
    ];

    public function produtos()
    {
        return $this->hasMany(Produto::class);
    }
}
