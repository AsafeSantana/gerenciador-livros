<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//MODEL
class Book extends Model
{
    use HasFactory;

    protected $fillable = ['titulo', 'autor', 'descricao', 'publicado'];
}
