@extends('layouts.projects')

@section('title', 'I miei progetti')

@section('content')
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Cliente</th>
                <th>Periodo di sviluppo</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
                <tr>
                    <td>{{ $project->name }}</td>
                    <td>{{ $project->client }}</td>
                    <td>{{ $project->period }}</td>
                </tr>
            @endforeach

        </tbody>

    </table>
@endsection
