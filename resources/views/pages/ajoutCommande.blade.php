<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
<link rel="stylesheet" href="{{asset('css/ajoutCommande.css')}}">

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
                            Ajout commande
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


        <form method="POST"  action="{{ url('commande/store')}}" enctype="multipart/form-data" class="w-50">
        @csrf
           
            <div class="modal-body">					
                <div class="form-group">
                    <label>numero_commande</label>
                    <input type="text" class="form-control" name="numero_commande"required>
                </div>

                <div class="form-group">
                    <label>description </label>
                    <input type="text" class="form-control" name="description" required>
                </div>
                
                <div class="form-group">
                    <label>date_commande</label>
                    <input type="date" class="form-control" name="date_commande" required>
                </div>
                <div class="form-group">
                    <label>date_livraison</label>
                    <input type="date" class="form-control" name="date_livraison" required>
                </div>	
                <div class="form-group">
                    <label>fournisseur_id</label>
                    <input type="text" class="form-control" name="fournisseur_id" required>
                </div>				
            </div>
            <div class="modal-footer">
                <input type="submit" class="btn btn-success mt-3" value="Ajouter">
            </div>
        </form>

</div>