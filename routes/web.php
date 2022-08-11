<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\FournisseurController;
use App\Http\Controllers\ProduitVenduController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

// Route pour les produits
Route::get('/produit', [ProduitController::class, 'index'])->name('produit.index');
Route::get('/produit/ajout', [ProduitController::class, 'create'])->name('produit.create');
Route::post('/produit/store', [ProduitController::class, 'store'])->name('produit.store');

// Route pour les clients
Route::get('/client', [ClientController::class, 'index'])->name('client.index');
Route::get('/client/ajout', [ClientController::class, 'create'])->name('client.create');
Route::post('/client/store', [ClientController::class, 'store'])->name('client.store');

// Route pour les fournisseurs
Route::get('/fournisseur', [FournisseurController::class, 'index'])->name('fournisseur.index');
Route::get('/fournisseur/ajout', [FournisseurController::class, 'create'])->name('fournisseur.create');
Route::post('/fournisseur/store', [FournisseurController::class, 'store'])->name('fournisseur.store');


// Route pour les produitVendus
Route::get('/produitVendu', [ProduitVenduController::class, 'index'])->name('produitVendu.index');
Route::get('/produitVendu/ajout', [ProduitVenduController::class, 'create'])->name('produitVendu.create');
Route::post('/produitVendu/store', [ProduitVenduController::class, 'store'])->name('produitVendu.store');




// Route::get('/ajoutCommande',[AjoutCommandeController::class, 'index'])->name('AjoutCommande.index');
Route::get('ajoutCommande', function (){
    return view('pages.ajoutCommande');
});

Route::get('/commande', [CommandeController::class, 'index'])->name('commande.index');
// Route::get('commande', function (){
//     return view('pages.commande');
// });

// Route::get('/stock', [StockController::class, 'index'])->name('stock.index');
// Route::get('stock', function (){
//     return view('pages.stock');
// });
// Route::get('/ajoutProduit',[AjoutProduitController::class, 'index'])->name('AjoutProduit.index');
// Route::get('ajoutProduit', function (){
//     return view('pages.ajoutProduit');
// });
// Route::get('/ajoutFournisseur',[AjoutFournisseurController::class, 'index'])->name('AjoutFournisseur.index');
// Route::get('ajoutFournisseur', function (){
//     return view('pages.ajoutFournisseur');
// });
// Route::get('/fournisseur', [FournisseurController::class, 'index'])->name('fournisseur.index');
// Route::get('fournisseur', function (){
//     return view('pages.fournisseur');
// });
// Route::get('/fournisseur', [ClientController::class, 'index'])->name('client.index');
// Route::get('client', function (){
//     return view('pages.client');
// });
// Route::get('/ajoutClient',[AjoutClientController::class, 'index'])->name('AjoutClient.index');
// Route::get('ajoutClient', function (){
//     return view('pages.ajoutClient');
// });
Route::get('/facture', [FactureController::class, 'index'])->name('facture.index');
// Route::get('facture', function (){
//     return view('pages.facture');
// });
// Route::get('/Vente', [VenteController::class, 'create'])->name('vente.create');
// Route::get('vente', function (){
//     return view('pages.vente');
// });

Route::get('/dashboard', function () {
    return view('pages.accueil');
Route::get('produit', function(){
        return view('pages.produit');
    });
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
