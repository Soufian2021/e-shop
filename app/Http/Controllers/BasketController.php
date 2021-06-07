<?php

namespace App\Http\Controllers;


use App\Models\Order;
use App\Models\Product;
use App\Models\Promotion;


use Illuminate\Http\Request;

use App\Repositories\BasketSessionRepository;

class BasketController extends Controller
{
    protected $basketRepository;
    public function __construct(BasketSessionRepository $basketRepository)
    {
        $this->basketRepository = $basketRepository;
    }


    # Affichage du panier
    public function show()
    {
        return view("basket.show"); // resources\views\basket\show.blade.php
    }
  
    public function add(Product $product, Request $request)
    {

        // Validation de la requête
        $this->validate($request, [
            "quantity" => "numeric|min:1"
        ]);

        // Ajout/Mise à jour du produit au panier avec sa quantité
        $this->basketRepository->add($product, $request->quantity);

        // Redirection vers le panier avec un message
        return redirect()->route("basket.show")->withMessage("Produit ajouté au panier");
    }

    // Suppression d'un produit du panier
    public function remove(Product $product)
    {

        // Suppression du produit du panier par son identifiant
        $this->basketRepository->remove($product);

        // Redirection vers le panier
        return back()->withMessage("Produit retiré du panier");
    }

    // Vider la panier
    public function empty()
    {

        // Suppression des informations du panier en session
        $this->basketRepository->empty();

        // Redirection vers le panier
        return back()->withMessage("Panier vidé");
    }


    // old version of coupon

    // public function storeCoupon(Request $request)
    // {
    //     $code = $request->get('code');

    //     $coupon = Promotion::where('code_promo', $code)->first();

    //     if (!$coupon) {
    //         return redirect()->back()->with('error', 'Le coupon est invalide.');
    //     }

    //     $request->session()->put('coupon', [
    //         'code' => $coupon->code_promo,
    //         'remise' => $coupon->discount($request->total)
    //     ]);

    //     return redirect()->back()->with('success', 'Le coupon est appliqué.');
    // }

    public function destroyCoupon()
    {
        request()->session()->forget('coupon');

        return redirect()->back()->with('success', 'Le coupon a été retiré.');
    }

}
