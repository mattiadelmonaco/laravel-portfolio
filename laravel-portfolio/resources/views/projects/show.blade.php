@extends('layouts.projects')

@section('title', $project->name)

@section('page')

    <h2>
        Periodo di sviluppo: {{ $project->period }} - per: {{ $project->client }}
    </h2>

    <p>
        {{ $project->summary }}
    </p>

@endsection
