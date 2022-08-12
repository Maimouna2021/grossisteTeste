<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
<link rel="stylesheet" href="{{asset('css/commande.css')}}">

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
                            Liste des commandes
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
<div class="row commande my-5">
<div class="col-7 tableau">
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <td>ID</td>
                <th>Numéro Commande</th>
                <th>Description</th>
                <th>Date Commande</th>
                <th>Date Livraison</th>
                <th>fournisseur_id</th>
        </tr>
        </thead>
            @foreach ($commandes as $commande)

        <tbody>
            <tr>
                <td>{{$commande->numero_commande }}</td>
                <td>{{$commande->description }}</</td>
                <td>{{$commande->date_commande }}</</td>
                <td>{{$commande->date_livraison }}</</td>
                <td>{{$commande->fournisseur_id }}</</td>
                <td type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <span class="iconify" data-icon="el:file-edit-alt" style="color: #566787;" data-width="40" data-height="50"></span>
                        </td>
                        <td>
                            <span class="iconify" data-icon="fluent:delete-16-filled" style="color: #ce0033;" data-width="40" data-height="50"></span>
                        </td>
                <td>
                    <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                    <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                </td>
            </tr>
            
        </tbody>
        @endforeach
    </table>   
</div>