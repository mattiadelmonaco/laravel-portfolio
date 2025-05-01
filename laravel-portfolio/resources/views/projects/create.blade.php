@extends('layouts.projects')

@section('title', 'Aggiungi un progetto')

@section('page')

    <form class="form-control d-flex flex-column gap-3 py-3" action="{{ route('projects.store') }}" method="POST">
        @csrf

        <div class="d-flex flex-column gap-1">
            <label for="name">Nome progetto</label>
            <input type="text" name="name" id="name" class="rounded-1 border-1 px-2 py-1" required>
        </div>

        <div class="d-flex flex-column gap-1">
            <label for="client">Cliente</label>
            <input type="text" name="client" id="client" class="rounded-1 border-1 px-2 py-1" required>
        </div>

        <div class="d-flex flex-row align-items-center gap-1">
            <label for="start_period">Sviluppato dal: </label>
            <input type="date" name="start_period" id="start_period" min="2000-01-01" max="2100-01-01" value="2000-01-01"
                class="rounded-1 border-1 px-2 py-1" required>
            <label for="end_period">al: </label>
            <input type="date" name="end_period" id="end_period" min="2000-01-01" max="2100-01-01" value="2000-01-01"
                class="rounded-1 border-1 px-2 py-1" required>
        </div>

        <div class="d-flex flex-column gap-1">
            <label for="summary">Breve descrizione del progetto</label>
            <textarea name="summary" id="summary" rows="5" class="rounded-1 border-1 px-2 py-1" required></textarea>
        </div>

        <div class="d-flex justify-content-center my-2">
            <input type="submit" class="btn btn-success fs-4" value="Aggiungi">
        </div>

    </form>

@endsection
