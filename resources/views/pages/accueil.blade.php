<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
<link rel="stylesheet" href="{{asset('css/accueil.css')}}">

<div class="container">
    <div class="row">
        <div class="col-1">
            @include('layouts.sidebare')
        </div>
        <div class="col-6 acueil-content">
            <div class=" d-flex flex-column">
                <div class="menu bg-white w-75 d-flex flex-row">
                    <div class="hambergger-menu">
                        <button class="btn boutonmenu" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">
                            <span class="iconify" data-icon="dashicons:menu-alt" style="color: white;" data-width="40" data-height="40"></span>
                        </button>
                    </div>
                    <div class="title">
                        <p class="h1">
                            Accueil
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
                <div class="row p-5 w-75" style="margin: 0 auto">
                    <div class="row">
                        <a href="" class=" card-body card P-3">
                            <div>
                                <span class="iconify" data-icon="ic:outline-production-quantity-limits" style="color: white;" data-width="30" data-height="30"></span>                
                            </div> 
                            <div>
                                <h5 class="card-title">Produit</h5>
                            </div>
                        </a>
                        <div class=" card-body card P-3">
                            <div>
                                <span class="iconify" data-icon="eos-icons:product-classes-outlined" style="color: white;" data-width="30" data-height="30"></span>            
                            </div> 
                            <div>
                                <h5 class="card-title">Vente</h5>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="card-body  card P-3">
                            <div>
                                <span class="iconify" data-icon="emojione-monotone:family-man-man-boy-boy" style="color: white;" data-width="30" data-height="30"></span>
                            </div> 
                            <div>
                                <h5 class="card-title">Client</h5>
                            </div>
                        </div>
                        <div class="card-body  card P-3">
                            <div>
                                <span class="iconify" data-icon="emojione-monotone:family-man-man-boy-boy" style="color: white;" data-width="30" data-height="30"></span>
                            </div> 
                            <div>
                                <h5 class="card-title">Fournisseur</h5>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="card-body  card P-3">
                            <div>
                                <span class="iconify" data-icon="icon-park-outline:transaction-order" style="color: white;" data-width="30" data-height="30"></span>
                            </div> 
                            <div>
                                <h5 class="card-title">Commande</h5>
                            </div>
                        </div>
                        <div class="card-body card ">
                            <div>
                                <span class="iconify" data-icon="medical-icon:i-billing" style="color: white;" data-width="30" data-height="30"></span>
                            </div> 
                            <div>
                                <h5 class="card-title">Facturation</h5>
                            </div>
                        </div>
                    </div> 
                </div>        
            </div>
        </div>
    </div>
</div>