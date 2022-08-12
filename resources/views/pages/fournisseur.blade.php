<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
<link rel="stylesheet" href="{{asset('css/fournisseur.css')}}">

<div class="container ">
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
                            Liste des fournisseurs
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

    <div class="row fournisseur my-5">
            <div class="col-7 tableau">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th  scope="col">ID</th>
                            <th  scope="col">Prenom</th>
                            <th  scope="col">Nom</th>
                            <th  scope="col">Adresse</th>
                            <th  scope="col">Téléphone</th>
                        </tr>
                    </thead>
                    @foreach ($fournisseurs as $fournisseur)
                                
                    <tbody>
                    <tr>
                        <td>{{$fournisseur->id }}</td>
                        <td>{{$fournisseur->nom }}</td>
                        <td>{{$fournisseur->prenom }}</td>
                        <td>{{$fournisseur->tel }}</td>
                        <td>{{$fournisseur->adresse }}</td>
                        <td>
                            <a href="{{ route('fournisseur.edit', $fournisseur->id)}}" id="{{$fournisseur->id}}" type="button" class="btn " data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <span class="iconify" data-icon="el:file-edit-alt" style="color: #566787;" data-width="40" data-height="50"></span>
                            </a>
                        </td>
                        <td>
                            <form method="POST" action="{{ route('fournisseur.delete', $fournisseur)}}">
                                @csrf
                                @method("DELETE")
                                <button type="submit">
                                    <span class="iconify" data-icon="fluent:delete-16-filled" style="color: #ce0033;" data-width="40" data-height="50"></span>
                                </button>
                            </form>
                        </td>
                    </tr>
                    </tbody>
                   @endforeach
                </table>
            </div>
        </div>
    </div>
</div>


{{-- Modale form update --}}

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modifier Fournisseur</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
                <div class="container p-5">
            <div class="row p-5 bg-white formulairedajout">
                 <form method="POST" action="{{ route('fournisseur.update', $fournisseur->id)}}" enctype="multipart/form-data" class="w-50">
                @method("PUT")
                @csrf

                <!-- Prenom -->
                <div>
                    <x-input id="prenom" class="block mt-1 w-full form-control" type="text" name="prenom" :value="old('prenom')" placeholder="prenom" required autofocus />
                </div>

                <!-- Nom -->
                <div class="mt-4">
                    <x-input id="nom" class="block mt-1 w-full form-control" type="nom" name="nom" :value="old('nom')" placeholder="nom" required />
                </div>

                  <!-- Téléphone -->
                <div class="mt-4">
                    <x-input id="tel" class="block mt-1 w-full form-control" type="tel" name="tel" :value="old('tel')" placeholder="tel" required />
                </div>

                   <!-- Adresse -->
                <div class="mt-4">
                    <x-input id="adresse" class="block mt-1 w-full form-control" type="adresse" name="adresse" :value="old('adresse')" placeholder="adresse" required />
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Fermer</button>
                    <button type="submit" class="btn btn-success">Enregistrer</button>
                </div>
        </form>
        </div>
      </div>
    </div>
  </div>
</div>