<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
<link rel="stylesheet" href="{{asset('css/produit.css')}}">

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
                            Liste des produits
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

    <div class="row produit my-5">
            <div class="col-7 tableau">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th  scope="col">ID</th>
                            <th  scope="col">Libelle</th>
                            <th  scope="col">Description</th>
                            <th  scope="col">Quantite</th>
                            <th  scope="col">Prix Unitaire</th>
                            <th  scope="col">Date Entrée</th>
                            <th  scope="col">Date Peremption</th>
                        </tr>
                    </thead>
                     @foreach ($produits as $produit)
                                
                    <tbody>
                    <tr>
                        <td>{{$produit->id }}</td>
                        <td>{{$produit->libelle }}</td>
                        <td>{{$produit->description }}</td>
                        <td>{{$produit->quantite }}</td>
                        <td>{{$produit->prix_unitaire }}</td>
                        <td>{{$produit->date_entre }}</td>
                        <td>{{$produit->date_peremption }}</td>
                    </tr>
                    </tbody>
                   @endforeach

                </table>
            </div>
        </div>
    </div>
</div>