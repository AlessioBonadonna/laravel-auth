@extends('layouts.admin')

@section('content')
    <h1>Edit project</h1>

    <h1>Edit project: {{ $project->title }}</h1>
    <div class="row bg-white">
        <div class="col-12">
            <form action="{{ route('admin.projects.update', $project->slug) }}" method="project" class="p-4">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="name_proj" class="form-label">Titolo</label>
                    <input type="text" class="form-control @error('name_proj') is-invalid @enderror" id="title"
                        name="title" value="{{ old('name_proj', $project->name_proj) }}">
                    @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">Content</label>
                    <textarea class="form-control" id="content" name="content">{{ old('content', $project->content) }}</textarea>
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
                <button type="reset" class="btn btn-primary">Reset</button>
            </form>
        </div>
    </div>
@endsection
