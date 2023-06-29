<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class ProductController extends Controller {

    public function index($id = 0) {
        //Lister tout les produits

        if ($id !== 0){
            //requete de classement 
        $products = Produit::where('categorie_id' , $id)
                            ->orderBy('created_at', 'desc')
                            ->paginate(6);

        } else {
            //requete de filtration
        $products = Produit::orderBy('created_at', 'desc') 
                            ->paginate(6);


        }
        

        return view ('welcome' , compact('products'));

    }
    //
}
