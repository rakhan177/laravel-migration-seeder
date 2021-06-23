{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>

        </style>
    </head>
    <body>
        <h1>Benvenuto in Vacanze Boolean</h1>
        <div class="">
          Clicca sulla sezione che desideri per verificare le nostre offerte.
        </div>
        <div class="">
          <a href="{{ route('product') }}">pagina prodotti</a>
        </div>
    </body>
</html> --}}
@extends('layout.layout')
{{-- estendo la mia homepage con il layout di base con @extends --}}
{{-- inserisco il titolo, passato come secondo argomento --}}
@section('pageTitle', 'Home Page')
{{-- mettiamo il segnaposto(yeld) del body per iniziare a scrivere --}}
@section('bodyContent')

  <div class="">
ciao
  </div>

@endsection
