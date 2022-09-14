<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
<link rel="stylesheet" href="{{asset('css/ajoutCommande.css')}}">

<div class="container">
    <div class="row">
        <div class="col-1">
            @include('layouts.sidebare')
        </div>
    </div>
        <div class="container p-5">
            <div class="row text-center my-5">
                  <h1>Ajouter une commande</h1>
            </div>
            <div class="row p-5 bg-white w-50 h-75 formulairedajout">
               <form method="POST"  action="{{ url('commande/store')}}" enctype="multipart/form-data" class="w-100">
                    @csrf
                    <div class="modal-body">					
                        <div class="form-group">
                            <input type="text" class="form-control" name="numero_commande"required placeholder="numero commande">
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="description" required placeholder="description">
                        </div>
                        <div class="form-group mt-3">
                            <libelle>Date commande</libelle>
                            <input type="date" class="form-control" name="date_commande" required placeholder="date commande">
                        </div>
                        <div class="form-group mt-3">
                            <libelle>Date livraison</libelle>
                            <input type="date" class="form-control" name="date_livraison" required placeholder="date livraison">
                        </div>	
                        <div class="form-group">
                            <div class="mt-3">
                                <select class="form-control mb-3"  name="fournisseur_id" aria-label="liste des fournisseurs">
                                <option selected>Selectionner un fournisseur </option>
                                @foreach ($fournisseurs as $fournisseur)
                                <option value="{{ $fournisseur->id }}">{{ $fournisseur->prenom }} {{ $fournisseur->nom }}</option>
                                @endforeach
                                </select>
                            </div>
                        </div>				
                    </div>
                    <div class="p-3">
                        <button href="{{ route('produit.index')}}" class="btn btn-danger  boutonAjout">Ajouter</button>
                        <a href="{{ route('produit.create')}}" class="btn btn-danger boutonAnnuler">Annuler</a>
                    </div>
                </form>
            </div>
        </div>
</div>