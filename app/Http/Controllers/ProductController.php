<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class ProductController extends Controller {

    public function index($id = 0) {
        //Lister tout les produits

        if ($id !== 0){
            //requete de classement = where
        $products = Produit::where('categorie_id' , $id)
                            ->orderBy('created_at', 'desc')
                            ->paginate(6);

        } else {
            //requete de filtration = orderBy
        $products = Produit::orderBy('created_at', 'desc') 
                            ->paginate(6);


        }
        

        return view ('welcome' , compact('products'));

    }

    public function detail (Produit $product) {

    return view ('detail' , compact ('product'));



    }

    //
}
