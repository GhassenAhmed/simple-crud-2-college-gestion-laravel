<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departement extends Model
{
    use HasFactory;
    public function Edudiants(){
        return $this->hasMany(Edudiant::class);
    }

    public function Enseignanrs(){
        return $this->hasMany(Enseignant::class);
    }
}
