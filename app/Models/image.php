<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\categoria_img;

class image extends Model
{
    use HasFactory;
    
    public function categoria()
{
    return $this->belongsTo(CategoriaImg::class, 'categoria_id');  // Relación con el modelo CategoriaImg
}

};
