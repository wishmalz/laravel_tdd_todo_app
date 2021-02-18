@extends('layouts.app')

@section('content')
    <div class="flex justify-center mt-12 ">
        <form method="POST" action="{{ route('projects.store') }}">
            {{ csrf_field() }}
            <h1 class="text-2xl font-bold text-center">Create a new project</h1>

            @include('projects.form', ['buttonText' => 'Create Project', 'project' => new App\Project])

        </form>
    </div>
@endsection
