@extends('layouts.backoffice.template')
@section('title')
    nouveau categorie
@endsection
@section('content')
    <form action="{{ route('categories.store') }}" method="POST" class="p-5">
        @csrf
        <fieldset>
            <legend>Données de Catégories</legend>
            <div class="mb-3">
                <label for="name" class="form-label fst-italic">Nom categorie: </label>
                <input type="text" class="form-control" id="name" name="name" />
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="photo" class="form-label fst-italic">Photo categorie: </label>
                <input type="file" class="form-control" id="photo" name="photo">
            </div>
            <button type="submit" class="btn btn-primary">envoyer</button>
        </fieldset>
    </form>
@endsection
