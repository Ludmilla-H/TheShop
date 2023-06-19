<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;
    
    protected $fillable =['categorie_id', 'user_id' , 'name' , 'description' , 'price'] ;

    public function user(): BelongsTo {

        return $this->belongsTo(User::class);
    }
    
    public function categorie(): BelongsTo{
        
        return $this->belongsTo(Categorie::class);
    }


}
