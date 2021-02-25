<div class="card flex flex-col">
    <h3 class="font-normal text-xl py-4 -ml-5 border-l-4 border-indigo-400 pl-4 mb-3">
        <a href="{{ $project->path() }}" class="no-underline text-black">{{ $project->title }}</a>
    </h3>
    <div class="text-gray-400 mb-4 flex-1">
        {{ Str::limit($project->description, 100) }}
    </div>

    <footer>
        <form action="{{ $project->path() }}" class="text-right" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="text-sm">
                Delete
            </button>
        </form>
    </footer>
</div>
