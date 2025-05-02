@extends('layouts.projects')

@section('title', 'Modifica una tipologia di progetto')

@section('page')

    <form class="form-control d-flex flex-column gap-3 py-3" action="{{ route('types.update', $type->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="d-flex flex-column gap-1">
            <label for="name">Nome tipologia</label>
            <input type="text" name="name" id="name" class="rounded-1 border-1 px-2 py-1" value="{{ $type->name }}"
                required>
        </div>

        <div class="d-flex flex-column gap-1">
            <label for="description">Breve descrizione della tipologia</label>
            <textarea name="description" id="description" rows="5" class="rounded-1 border-1 px-2 py-1" required>{{ $type->description }}</textarea>
        </div>

        <div class="d-flex justify-content-center my-2">
            <input type="submit" class="btn btn-success fs-4" value="Modifica">
        </div>

    </form>

@endsection
