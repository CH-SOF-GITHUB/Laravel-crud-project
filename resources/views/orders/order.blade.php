@extends('layouts.template')
@section('title')
    informations facture
@endsection
@section('content')
    <div>
        <h3 style="text-align: center">Facture: {{ $num }}</h3>
        <h3 style="text-align: center">Date: {{ $date }}</h3>
    </div>
@endsection
