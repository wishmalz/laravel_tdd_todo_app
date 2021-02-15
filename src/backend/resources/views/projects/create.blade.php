@extends('layouts.app')

@section('content')
    <div class="flex justify-center mt-12 ">
        <form method="POST" action="{{ route('projects.store') }}">
            {{ csrf_field() }}
            <h1 class="text-2xl font-bold text-center">Create a new project</h1>
            <div class="mt-10">
                <label for="title">Title</label>
                <div>
                    <input type="text" placeholder="My awesome project" name="title" class="shadow w-full">
                </div>
            </div>
            <div class="mt-4">
                <label for="description">Description</label>
                <div>
                    <textarea name="description" class="shadow w-full" placeholder="I should start doing exercise.">
                    </textarea>
                </div>
            </div>
            <div class="flex justify-between items-center mt-10">
                <button type="submit" class="button">Create Project</button>
                <a href="{{ route('projects') }}">Cancel</a>
            </div>
        </form>
    </div>
@endsection
