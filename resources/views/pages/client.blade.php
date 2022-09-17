<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
<link rel="stylesheet" href="{{asset('css/style.css')}}">

<div class="container ">
    <div class="row">
        <div class="col-1">
            @include('layouts.sidebare')
        </div>
    </div>

    <div class="row client my-5">
    <div class="row text-center p-5">
        <h1>Liste des clients</h1>
    </div>
                <div class="col-7 tableau">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th  scope="col">ID</th>
                                <th  scope="col">Prenom</th>
                                <th  scope="col">Nom</th>
                                <th  scope="col">Téléphone</th>
                                <th  scope="col">Adresse</th>
                            </tr>
                        </thead>
                            @foreach ($clients as $client)   
                            <tbody>
                                <tr>
                                    <td>{{$client->id }}</td>
                                    <td>{{$client->prenom }}</td>
                                    <td>{{$client->nom }}</td>
                                    <td>{{$client->tel }}</td>
                                    <td>{{$client->adresse }}</td>
                                    <td>
                                        <a href="{{ route('client.edit', $client->id)}}" id="{{$client->id}}" type="button" class="btn " data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            <span class="iconify" data-icon="el:file-edit-alt" style="color: #566787;" data-width="30" data-height="30"></span>
                                        </a>
                                    </td>
                                    <td>
                                        <form method="POST" action="{{ route('client.delete', $client)}}">
                                            @csrf
                                            @method("DELETE")
                                            <button type="submit">
                                                <span class="iconify" data-icon="fluent:delete-16-filled" style="color: #ce0033;" data-width="30" data-height="30"></span>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            </tbody>
                            @endforeach
                    </table>
                    <div class="container mt-3">
                        <div class="row" style="class" width: 100%;>
                            {{ $clients->links()}}
                        </div>
                   </div>
                </div>
        </div>
</div>


{{-- Modale form update --}}

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modifier Client</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
                <div class="modal-body">
                        <div class="container p-5">
                            <div class="row p-5 bg-white formulairedajout">
                                <form method="POST" action="{{ route('client.update', $client->id)}}" enctype="multipart/form-data" class="w-50">
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
                                        <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Fermer</button>
                                        <button type="submit" class="btn btn-success">Enregistrer</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                </div>
        </div>
    </div>
</div>