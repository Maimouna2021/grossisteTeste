<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
<link rel="stylesheet" href="{{asset('css/ajoutClient.css')}}">

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
                            Ajout fournisseur
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
        <div class="container p-5">
            <div class="row p-5 bg-white formulairedajout">
                 <form method="POST" action="{{ url('fournisseur/store')}}" enctype="multipart/form-data" class="w-50">
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

                <div class="flex items-center justify-end mt-4">
                    <x-button class="ml-4 ml-3 mt-3 bouton">
                        {{ __('Enregistrer') }}
                    </x-button><br>
                     <x-button class="ml-4 ml-3 mt-3 bouton">
                        {{ __('listeClient') }}
                    </x-button>
                </div>
        </form>
        </div>    

</div>