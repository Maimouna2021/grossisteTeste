<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
<link rel="stylesheet" href="{{asset('css/style.css')}}">

<div class="container">
    <div class="row">
        <div class="col-1">
            @include('layouts.sidebare')
        </div>   
    </div>
</div>

<div class="container mt-5 p-5">
    <div class="card">
        <div class="card-header text-whith" style=" background: #790FFF;">
           <h3 style="text-align:center; color:white">Ajouter un fournisseur</h3>
        </div>
    <div class="card-body">
          <form method="POST" action="{{ url('fournisseur/store')}}" enctype="multipart/form-data" class="w-100">
            @csrf
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label>Prenom</label>
                    <input type="text" class="form-control" name="prenom" placeholder="Prenom" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label>Nom</label>
                    <input type="text" class="form-control" name="nom" placeholder="Nom" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label>Adresse</label>
                    <input type="text" class="form-control" name="adresse" placeholder="Adresse" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label>Telephone</label>
                    <input type="text" class="form-control" name="tel" placeholder="Telephone" required>
                </div>
                <div class="text-right">
                    <button href="{{ route('fournisseur.index')}}" class="btn" style=" background: #790FFF; color: white;">
                        Enregistrer
                    </button>
                    <button href="{{ route('fournisseur.create')}}" class="btn" style=" background: #790FFF; color: white;">
                        Annuler
                    </button>
                </div>
            </div>
        </form>
    </div>                
</div>

