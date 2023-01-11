@extends('layouts.admin')
@section('content')
    {{-- <ul>
        @foreach ($projects as $project)
            <div class="col-4">
                {{-- <div>{{ $project->name_proj }}</div>

        </div> 
    <li><a class="btn btn-primary text-white btn-sm" href="{{ route('admin.projects.show', $project->slug) }}"
            title="View project">{{ $project->name_proj }}</a></li>
    @endforeach
    </ul> --}}
    <h1>projects</h1>
    <a href="{{ route('admin.projects.create') }}">ao</a>
    @if (session()->has('message'))
        <div class="alert alert-success mb-3 mt-3">
            {{ session()->get('message') }}
        </div>
    @endif
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Content</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
                <tr>
                    <th scope="row">{{ $project->id }}</th>
                    <td><a href="{{ route('admin.projects.show', $project->slug) }}"
                            title="View project">{{ $project->name_proj }}</a></td>
                    <td>{{ Str::limit($project->description, 100) }}</td>
                    <td><a class="link-secondary" href="{{ route('admin.projects.edit', $project->slug) }}"
                            title="Edit project"><i class="fa-solid fa-pen"></i></a></td>
                    <td>
                        <form action="{{ route('admin.projects.destroy', $project->slug) }}" method="project">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="delete-button btn btn-danger ms-3"
                                data-item-title="{{ $project->name_proj }}"> <i class="fa-solid fa-trash-can"></i></button>
                        </form>
                </tr>
            @endforeach
            </ul>
        </tbody>
    </table>
    @include('partials.admin.modal')
@endsection
