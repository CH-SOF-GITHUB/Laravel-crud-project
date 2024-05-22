@extends('layouts.backoffice.template')
@section('title')
    categories
@endsection
@section('content')
    <h1> Liste des catégories
        <a href="{{route('categories.create')}}"><button class="btn btn-primary">+ ajouter categorie</button></a>
    </h1>
    {{-- @forelse ($categories as $key => $value) --}}
    <div class="row m-5">
        @forelse ($categories as $item)
            <div class="col-3">
                <h5>{{ $item->name }}</h5>
                <img width="100%" src="{{ asset('assets/images/categories/' . $item->photo) }}" />
                <div class="bg-light p-1">
                    <button class="btn btn-success">modifier</button>
                    <button class="btn btn-danger">supprimer</button>
                </div>
            </div>
        @empty
            <p> Pas de categories pour le moment ! </p>
        @endforelse
    </div>
@endsection
