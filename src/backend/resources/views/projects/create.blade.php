@extends('layouts.app')

@section('content')
    <form method="POST" action="{{ route('projects.store') }}">
        {{ csrf_field() }}
        <h1>Create a project</h1>
        <div>
            <label for="title">Title</label>
            <div>
                <input type="text" placeholder="Title" name="title">
            </div>
        </div>
        <div>
            <label for="description">Description</label>
            <div>
                <textarea name="description"> </textarea>
            </div>
        </div>
        <div>
            <div>
                <button type="submit">Create Project</button>
                <a href="{{ route('projects') }}">Cancel</a>
            </div>
        </div>
    </form>
@endsection
