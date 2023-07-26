@extends('layouts.base')

@section('contents')

    <h1>Cocktails</h1>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Istruzioni</th>
                <th scope="col">Immagine</th>
                <th scope="col">Tipo</th>
                <th scope="col">Data</th>
                <th scope="col">Categoria</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cocktails as $cocktail)
                <tr>
                    <th scope="row">{{ $cocktail->id }}</th>
                    <td>{{ $cocktail->strDrink }}</td>
                    <td>{{ $cocktail->strInstructionsIT }}</td>
                    <td>{{ $cocktail->strDrinkThumb }}</td>
                    <td>{{ $cocktail->strAlcoholic }}</td>
                    <td>{{ $cocktail->dateModified }}</td>
                    <td>{{ $cocktail->strCategory }}</td>
                </tr>            
            @endforeach
        </tbody>
    </table>

@endsection