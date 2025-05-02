@extends('layouts.projects')

@section('title', 'Tipologie di progetto')

@section('page')

    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>Tipologia</th>
                <th>Descrizione</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($types as $type)
                <tr>
                    <td>{{ $type->name }}</td>
                    <td>{{ $type->description }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
