<?php

namespace App\Models;

use App\Models\Produit;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProduitImages extends Model
{
    use HasFactory;

    protected $fillable =['produit_id' , 'position' , 'image'] ;


    public function produit(): BelongsTo
    {
        return $this->belongsTo(Produit::class);
    }
}
