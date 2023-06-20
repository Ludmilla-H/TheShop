<?php

namespace App\Models;

use App\Models\User;
use App\Models\Favori;
use App\Models\Categorie;
use App\Models\Commentaire;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Produit extends Model
{
    use HasFactory;

    protected $casts = [
        'carouselImage' => 'array'
    ]; 
    
    protected $fillable =['categorie_id', 'user_id' , 'name' , 'description' , 'price' , 'defaultImage' , 'carouselImage'] ;

    public function user(): BelongsTo {

        return $this->belongsTo(User::class);
    }
    
    public function categorie(): BelongsTo{
        
        return $this->belongsTo(Categorie::class);
    }

    public function commentaires(): HasMany{
        
        return $this->hasMany(Commentaire::class);
    }

    public function favoris(): HasMany{
        
        return $this->hasMany(Favori::class);
    }


}
