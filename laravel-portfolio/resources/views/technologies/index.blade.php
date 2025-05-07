@extends('layouts.projects')

@section('title', 'Tecnologie conosciute')

@section('page')
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>Nome tecnologia</th>
                <th>Colore asscociato</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($technologies as $technology)
                <tr>
                    <td>{{ $technology->name }}</td>
                    <td>
                        <div class="d-flex gap-2">
                            <div style="width: 50px; height: 20px; background-color: {{ $technology->color }}"></div>
                            {{ $technology->color }}
                        </div>
                    </td>
                    <td class="d-flex gap-3">
                        <a class="btn btn-warning" href="{{ route('technologies.edit', $technology) }}"><i
                                class="fa-regular fa-pen-to-square"></i></a>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                            data-bs-target="#modal-{{ $technology->id }}">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </td>
                </tr>

                <div class="modal fade" id="modal-{{ $technology->id }}" tabindex="-1"
                    aria-labelledby="modalLabel-{{ $technology->id }}" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="modalLabel-{{ $technology->id }}">Elimina tecnologia</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Sicuro di eliminare definitivamente la tecnologia?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                                <form action="{{ route('technologies.destroy', $technology->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <input type="submit" class="btn btn-danger" value="Elimina tecnologia">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center">
        <a href="{{ route('technologies.create') }}" class="btn btn-primary" type="button">Aggiungi una tecnologia</a>
    </div>
@endsection
