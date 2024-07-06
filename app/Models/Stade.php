<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stade extends Model
{
    use HasFactory;

    public function generateUniqueReference($categoryName)
    {
        // Générez une référence unique en concaténant le nom de la catégorie avec une valeur aléatoire
        $reference = strtolower($categoryName) . '_' . uniqid();

        // Vérifiez si la référence générée est déjà utilisée dans la base de données
        // Si c'est le cas, régénérez-la jusqu'à ce qu'elle soit unique
        while (self::where('code', $reference)->exists()) {
            $reference = strtolower($categoryName) . '_' . uniqid();
        }

        $this->code = $reference;
    }

}
