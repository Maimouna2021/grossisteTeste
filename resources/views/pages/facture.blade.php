<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
<link rel="stylesheet" href="{{asset('css/facture.css')}}">

<div class="container">
    <div class="row">
        <div class="col-1">
            @include('layouts.sidebare')
        </div>
        <div class="col-9 acueil-content">
            <div class=" d-flex flex-column">
                <div class="menu bg-white w-75 d-flex flex-row">
                    <div class="hambergger-menu">
                        <button class="btn boutonmenu" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">
                            <span class="iconify" data-icon="dashicons:menu-alt" style="color: white;" data-width="40" data-height="40"></span>
                        </button>
                    </div>
                    <div class="title">
                        <p class="h1">
                            Ajout client
                        </p>
                    </div>

                <div class="Logout-btn btn">
                    <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-9 acueil-content">
    <h1>Enregistrer une facture</h1>
                <div class="form mt-5">
                <div class="container">
                <form>
                    <div class="row">
                       <div class="col-4">
                          <input class="form-control form-control-lg" type="text" placeholder="Nom">
                       </div> 
                       <div class="col-4">
                          <input class="form-control form-control-lg" type="text" placeholder="Prenom">
                       </div> 
                       <div class="col-4">
                          <input class="form-control form-control-lg" type="text" placeholder="Adresse">
                       </div> 
                    </div>
                     <div class="row">
                       <div class="col-4 mt-3">
                          <input class="form-control form-control-lg" type="text" placeholder="Telephone">
                       </div> 
                </form>
                <div>
                    <div class="row">
                       <div class="col-4 p-3">
                          <h3>libelle</h3>
                       </div> 
                       <div class="col-4 p-3">
                          <h3>Quantite</h3>
                       </div> 
                       <div class="col-4 p-3">
                          <h3>Prix-Unitaire</h3>
                       </div> 
                    </div>
                    <hr>

                     <div class="row">
                       <div class="col-4 p-3">
                          <p>Vitalait</p>
                       </div> 
                       <div class="col-4 p-3">
                          <p>20 cartons</p>
                       </div> 
                       <div class="col-4 p-3">
                          <p>8 000</p>
                       </div> 
                    </div>

                      <div class="row">
                       <div class="col-4 p-3">
                          <p>Vitalait</p>
                       </div> 
                       <div class="col-4 p-3">
                          <p>20 cartons</p>
                       </div> 
                       <div class="col-4 p-3">
                          <p>8 000</p>
                       </div> 
                    </div>

                     <div class="row">
                       <div class="col-4 p-3">
                          <p>Vitalait</p>
                       </div> 
                       <div class="col-4 p-3">
                          <p>20 cartons</p>
                       </div> 
                       <div class="col-4 p-3">
                          <p>8 000</p>
                       </div> 
                    </div>
                     <div class="col-12 rounded">
                        <button type="buttonImprimmer" class="bouton">Imprimer</button>
                     </div> 
                </div>
               </div>
            </div>
        </form>   
   </div>
</div>