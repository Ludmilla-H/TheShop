<?php

namespace App\Models;

use App\Models\User;
use App\Models\Produit;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Commentaire extends Model
{
    use HasFactory;

    protected $fillable =['user_id' , 'produit_id', 'text'] ;

    public function produit(): BelongsTo
    {
        return $this->belongsTo(Produit::class);
    }
    
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }


}
