@extends('layouts.admin')
@section('content')
    <h1>Show Post</h1>

    <h1>{{ $project->name_proj }}</h1>
    <p>{{ $project->description }}</p>
    <img src="{{ asset('storage/' . $project->cover_image) }}">
@endsection
