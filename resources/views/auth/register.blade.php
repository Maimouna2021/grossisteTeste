@extends('layouts.defaulte')

@section('content')
<div class="container-fluid p-5">
    <div class="row p-5">
        <form method="POST" action="{{ route('register') }}" class="w-50">
            @csrf
            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Nom')" />
                <x-input id="name" class="block mt-1 w-full form-control" type="text" name="name" :value="old('nom')" required autofocus />
            </div>
            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />
                <x-input id="email" class="block mt-1 w-full form-control" type="email" name="email" :value="old('email')" required />
            </div>
            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Mot de passe')" />
                <x-input id="password" class="block mt-1 w-full form-control"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>
            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirmer mot de passe')" />
                <x-input id="password_confirmation" class="block mt-1 w-full form-control"
                                type="password"
                                name="password_confirmation" required />
            </div>
            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Déjà enregistré?') }}
                </a><br>
                <x-button class="ml-4 ml-3 mt-3  btn btn-#8551C8">
                    {{ __('S\'inscrire') }}
                </x-button>
            </div>
        </form>
    </div>
</div>
@endsection
       
  