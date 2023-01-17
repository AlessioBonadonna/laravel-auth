@extends('layouts.admin')
@section('content')
    <h1>Show Post</h1>
    {{-- 
    <h1>{{ $project->name_proj }}</h1>
    <p>{{ $project->description }}</p>
    <img src="{{ asset('storage/' . $project->cover_image) }}"> --}}
    </div>
    <div>Nome: {{ $project->name_proj }}</div>

    @if ($project->type)
        <td>{{ $project->type->workflow }}</td>
    @else
        <td>/</td>
    @endif
    @if (count($project->languages))
        @foreach ($project->languages as $language)
            <div>{{ $language->name }}</div>
        @endforeach
    @endif
    <div>Difficoltà: {{ $project->lvl_dif }}</div>
    <div>Framework: {{ $project->framework }}</div>
    <div>Team: {{ $project->team }}</div>
@endsection
