@extends('layouts.app')

@section('content')

    <header class="flex items-center mb-3 py-4">
        <div class="flex justify-between w-full items-end">
            <h2 class="text-gray-400 no-underline text-sm font-normal">My Projects</h2>
            <a href="{{ route('projects.create') }}" class="button">New Project</a>
        </div>
    </header>

    <main class="lg:flex lg:flex-wrap -mx-3">
        @forelse($projects as $project)
            <div class="lg:w-1/3 px-3 pb-6">
                @include('projects.card')
            </div>
        @empty
            <div>No projects yet.</div>
    </main>
    @endforelse
    </div>

    <template>
        <modal name="my-first-modal">
            This is my first modal
        </modal>
    </template>

    <script>
        export default {
            name: 'MyComponent',
            methods: {
                show () {
                    this.$modal.show('my-first-modal');
                },
                hide () {
                    this.$modal.hide('my-first-modal');
                }
            },
            mount () {
                this.show()
            }
        }
    </script>
@endsection
