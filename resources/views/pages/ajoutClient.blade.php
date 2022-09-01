<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
<link rel="stylesheet" href="{{asset('css/ajoutClient.css')}}">

<div class="container">
    <div class="row">
        <div class="col-1">
            @include('layouts.sidebare')
        </div>
    </div>

        <div class="container p-5">
         <div class="row text-center my-5">
                  <h1>Ajouter un client</h1>
                </div>
            <div class="row p-5 bg-white w-50 h-50 formulairedajout">
                 <form method="POST"  action="{{ url('client/store')}}" enctype="multipart/form-data" class="w-100">
                @csrf

                <!-- Prenom -->
                <div>
                    <x-input id="prenom" class="block mt-1 w-full form-control" type="text" name="prenom" :value="old('prenom')" placeholder="prenom" required autofocus />
                </div>

                <!-- Nom -->
                <div class="mt-4">
                    <x-input id="nom" class="block mt-1 w-full form-control" type="nom" name="nom" :value="old('nom')" placeholder="nom" required />
                </div>

                  <!--Adresse-->
                <div class="mt-4">
                    <x-input id="adresse" class="block mt-1 w-full form-control" type="adresse" name="adresse" :value="old('adresse')" placeholder="adresse" required />
                </div>

                   <!--Telephone-->
                <div class="mt-4">
                    <x-input id="telephone" class="block mt-1 w-full form-control" type="telephone" name="tel" :value="old('telephone')" placeholder="telephone" required />
                </div>

                <div class="p-3">
                    <button href="{{ route('produit.index')}}" class="btn boutonEnregister">Enregistrer</button>
                    <a href="{{ route('produit.create')}}" class="btn boutonAnnuler">Annuler</a>
                </div>
</form>
    </div>
</div>