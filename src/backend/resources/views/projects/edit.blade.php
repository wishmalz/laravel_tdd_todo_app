@extends('layouts.app')

@section('content')
    <div class="flex justify-center mt-12 ">
        <form method="POST" action="{{ $project->path() }}">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}

            <h1 class="text-2xl font-bold text-center">Edit your project</h1>

            @include('projects.form', ['buttonText' => 'Update Project'])

        </form>
    </div>
@endsection
