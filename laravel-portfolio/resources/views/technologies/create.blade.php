@extends('layouts.projects')

@section('title', 'Tecnologie conosciute')

@section('page')

    <form class="form-control d-flex flex-column gap-3 py-3" action="{{ route('technologies.store') }}" method="POST">
        @csrf

        <div class="d-flex flex-column gap-1">
            <label for="name">Nome tecnologia</label>
            <input type="text" name="name" id="name" class="rounded-1 border-1 px-2 py-1" required>
        </div>

        <div class="d-flex flex-column gap-1">
            <label for="color">Colore da associare alla tecnologia</label>
            <input type="color" name="color" id="color" class="rounded-1 border-1 px-2 py-1" required>
        </div>

        <div class="d-flex justify-content-center my-2">
            <input type="submit" class="btn btn-success fs-4" value="Aggiungi">
        </div>

    </form>

@endsection
