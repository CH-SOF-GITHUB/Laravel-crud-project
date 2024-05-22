@extends('layouts.template')
@section('title')
    informations de contact
@endsection
@section('content')
    <div>
        CLient: {{ $name }}<br>
        Reçu par: {{ $email }}<br>
        Sujet: {{ $subject }}<hr>
        Message: {{ $message }}
    </div>
@endsection
