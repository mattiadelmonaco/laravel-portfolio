@extends('layouts.projects')

@section('title', 'Modifica il progetto')

@section('page')

    <form class="form-control d-flex flex-column gap-3 py-3" action="{{ route('projects.update', $project->id) }}"
        method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="d-flex flex-column gap-1">
            <label for="name">Nome progetto</label>
            <input type="text" name="name" id="name" class="rounded-1 border-1 px-2 py-1"
                value="{{ $project->name }}" required>
        </div>

        <div class="d-flex flex-column gap-1">
            <label for="client">Cliente</label>
            <input type="text" name="client" id="client" class="rounded-1 border-1 px-2 py-1"
                value="{{ $project->client }}" required>
        </div>

        <div class="d-flex flex-row align-items-center gap-1">
            <label for="start_period">Sviluppato dal: </label>
            <input type="date" name="start_period" id="start_period" min="2000-01-01" max="2100-01-01"
                class="rounded-1 border-1 px-2 py-1" value="{{ $project->start_period }}" required>
            <label for="end_period">al: </label>
            <input type="date" name="end_period" id="end_period" min="2000-01-01" max="2100-01-01"
                class="rounded-1 border-1 px-2 py-1" value="{{ $project->end_period }}" required>
        </div>

        <div class="d-flex flex-row align-items-center gap-1">
            <label for="type_id">Tipologia del progetto: </label>
            <select name="type_id" id="type_id" required>
                @foreach ($types as $type)
                    <option value="{{ $type->id }}" {{ $project->type_id == $type->id ? 'selected' : '' }}>
                        {{ $type->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="d-flex flex-row align-items-center gap-2">
            <p class="m-0">Tecnologie utilizzate: </p>
            @foreach ($technologies as $technology)
                <div class="border rounded px-2 py-1">
                    <input type="checkbox" name="technologies[]" value="{{ $technology->id }}"
                        id="technology-{{ $technology->id }}"
                        {{ $project->technologies->contains($technology->id) ? 'checked' : '' }}>
                    <label for="technology-{{ $technology->id }}">{{ $technology->name }}</label>
                </div>
            @endforeach
            </select>
        </div>

        <div>
            <label for="image">Seleziona un'immagine</label>
            <input type="file" name="image" id="image">

            @if ($project->image)
                <div>
                    <img src="{{ asset('storage/' . $project->image) }}" alt="immagine per progetto {{ $project->name }}">
                </div>
            @endif
        </div>

        <div class="d-flex flex-column gap-1">
            <label for="summary">Breve descrizione del progetto</label>
            <textarea name="summary" id="summary" rows="5" class="rounded-1 border-1 px-2 py-1" required>{{ $project->summary }}</textarea>
        </div>

        <div class="d-flex justify-content-center my-2">
            <input type="submit" class="btn btn-success fs-4" value="Modifica">
        </div>

    </form>

@endsection
