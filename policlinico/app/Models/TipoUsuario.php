<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoUsuario extends Model
{
    use HasFactory;
    protected $primaryKey = 'IdTipoUsuario';
    protected $table = 'tipo_usuario';
    protected $fillable = ['TipoUsuario'];
}
