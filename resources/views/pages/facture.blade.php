<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
<link rel="stylesheet" href="{{asset('css/facture.css')}}">

<div class="container">
    <div class="row">
        <div class="col-1">
            @include('layouts.sidebare')
        </div>
    </div>
    <div class="acueil-content">
        <div class="produit my-5">      
            <div class="tableau my-5">
                    <div class="text-center">
                        <h1>Liste des commandes</h1>
                    </div>
    
         <div class="row">
            <div class="col">
                <p>Numero Commande</p>
           </div>

            <div class="col">
                <p>{{$form_data["numero_commande"]}}</p>
            </div>
            <div class="row">
                <div class="col">
                    <p>Description</p>
                </div>
                <div class="col">
                    <p>{{$form_data["description"]}}</p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p>Date Commande</p>
                </div>
                <div class="col">
                    <p>{{$form_data["date_commande"]}}</p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p>Date Livraison</p>
                </div>
                <div class="col">
                    <p>{{$form_data["date_livraison"]}}</p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p>Fournisseur prenom fournisseur</p>
                    <p>Fournisseur nom fournisseur</p>
                </div>
                <div class="col">
                    <p>{{$fournisseur->prenom}}</p>
                    <p>{{$fournisseur->nom}}</p>
                </div>
            </div>
        </div>
    </div>
        <a href="{{ url('facture/pdf')}}" class="boutonImpression">Imprimer</a>
</div>

