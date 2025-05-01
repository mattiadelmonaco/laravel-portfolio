@extends('layouts.projects')

<div class="">

    @section('title', 'Aggiungi un progetto')
</div>

@section('page')

    <form class="form-control d-flex flex-column gap-3 py-3" action="{{ route('projects.store') }}" method="POST">
        @csrf

        <div class="d-flex flex-column gap-1">
            <label for="name">Nome progetto</label>
            <input type="text" name="name" id="name" class="rounded-1 border-1 px-2 py-1">
        </div>

        <div class="d-flex flex-column gap-1">
            <label for="client">Cliente</label>
            <input type="text" name="client" id="client" class="rounded-1 border-1 px-2 py-1">
        </div>

        <div class="d-flex flex-column gap-1">
            <label for="period">Periodo di sviluppo</label>
            <input type="date" name="period" id="period" class="rounded-1 border-1 px-2 py-1">
        </div>

        <div class="d-flex flex-column gap-1">
            <label for="summary">Breve descrizione del progetto</label>
            <textarea name="summary" id="summary" rows="5" class="rounded-1 border-1 px-2 py-1"></textarea>
        </div>

        <div class="d-flex justify-content-center my-2">
            <input type="submit" class="btn btn-success fs-4" value="Aggiungi">
        </div>

    </form>

@endsection
