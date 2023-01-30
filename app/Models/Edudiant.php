<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Edudiant extends Model
{
    use HasFactory;
    
    public function departement(){
        return $this->belongsTo(Departement::class);
    }
}
