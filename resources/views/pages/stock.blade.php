<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
<link rel="stylesheet" href="{{asset('css/stock.css')}}">

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
                            Stock
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

    <div class="row stock my-5">
            <div class="col-7 tableau">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th  scope="col">id</th>
                            <th  scope="col">libelle</th>
                            <th  scope="col">description</th>
                            <th  scope="col">quantite</th>
                            <th  scope="col">prix_unitaire</th>
                            <th  scope="col">date_ente</th>
                            <th  scope="col">date_peremption</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>1</th>
                            <th>Fanta</th>
                            <th>En cartons</th>
                            <th>20</th>
                            <th>1000F</th>
                            <th>01-02-22</th>
                            <th>01-02-22</th>
                        </tr>
                        <tr>
                            <th>2</th>
                            <th>Fanta</th>
                            <th>En cartons</th>
                            <th>20</th>
                            <th>1000F</th>
                            <th>01-02-22</th>
                            <th>01-02-22</th>  
                        </tr>        
                        <tr>
                            <th>3</th>
                            <th>Fanta</th>
                            <th>En cartons</th>
                            <th>20</th>
                            <th>1000F</th>
                            <th>01-02-22</th>
                            <th>01-02-22</th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>