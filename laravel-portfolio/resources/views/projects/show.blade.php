@extends('layouts.projects')

@section('title', $project->name)

@section('page')

    <h2>
        Periodo di sviluppo: {{ $project->period }} - per: {{ $project->client }}
    </h2>

    <p>
        {{ $project->summary }}
    </p>

    <div class="d-flex justify-content-center gap-3">
        <a href="{{ route('projects.index') }}" class="btn btn-primary">Torna all'elenco dei progetti</a>
        <a class="btn btn-warning" href="{{ route('projects.edit', $project) }}">Modifica informazioni del progetto</a>
        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Elimina progetto
        </button>
        {{--  --}}
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Elimina progetto</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Sicuro di eliminare definitivamente il post?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                    <form action="{{ route('projects.destroy', $project->id) }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <input type="submit" class="btn btn-danger" value="Elimina progetto">
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
