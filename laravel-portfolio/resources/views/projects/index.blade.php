@extends('layouts.projects')

@section('title', 'I miei progetti')

@section('page')
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>Nome progetto</th>
                <th>Cliente</th>
                <th>Periodo di sviluppo</th>
                <th>Tipologia</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
                <tr>
                    <td>{{ $project->name }}</td>
                    <td>{{ $project->client }}</td>
                    <td><strong>dal: </strong>{{ $project->start_period }} <strong>al: </strong>{{ $project->end_period }}
                    </td>
                    <td class={{ $project->type ? '' : 'text-danger' }}>
                        {{ $project->type ? $project->type->name : 'Tipologia non specificata' }}</td>
                    <td>
                        <a href='{{ route('projects.show', $project->id) }}'>Maggiori informazioni</a>
                    </td>
                    <td class="d-flex gap-3">
                        <a class="btn btn-warning" href="{{ route('projects.edit', $project) }}"><i
                                class="fa-regular fa-pen-to-square"></i></a>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                            data-bs-target="#modal-{{ $project->id }}">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </td>
                </tr>

                <div class="modal fade" id="modal-{{ $project->id }}" tabindex="-1"
                    aria-labelledby="modalLabel-{{ $project->id }}" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="modalLabel-{{ $project->id }}">Elimina progetto</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
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
            @endforeach
        </tbody>
    </table>

    <div class="d-flex justify-content-center">
        <a href="{{ route('projects.create') }}" class="btn btn-primary" type="button">Aggiungi un progetto</a>
    </div>
@endsection
