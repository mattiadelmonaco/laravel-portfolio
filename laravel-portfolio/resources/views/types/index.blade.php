@extends('layouts.projects')

@section('title', 'Tipologie di progetto')

@section('page')

    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>Tipologia</th>
                <th>Descrizione</th>
                <th></th>
                <th></th>

            </tr>
        </thead>
        <tbody>
            @foreach ($types as $type)
                <tr>
                    <td>{{ $type->name }}</td>
                    <td>{{ $type->description }}</td>
                    <td class="d-flex gap-3">
                        <a class="btn btn-warning" href="{{ route('types.edit', $type) }}"><i
                                class="fa-regular fa-pen-to-square"></i></a>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                            data-bs-target="#modal-{{ $type->id }}">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </td>
                </tr>

                <div class="modal fade" id="modal-{{ $type->id }}" tabindex="-1"
                    aria-labelledby="modalLabel-{{ $type->id }}" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="modalLabel-{{ $type->id }}">Elimina tipologia</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Sicuro di eliminare definitivamente la tipologia?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                                <form action="{{ route('types.destroy', $type->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <input type="submit" class="btn btn-danger" value="Elimina tipologia">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </tbody>
    </table>

    <div class="d-flex justify-content-center">
        <a href="{{ route('types.create') }}" class="btn btn-primary" type="button">Aggiungi una tipologia</a>
    </div>

@endsection
