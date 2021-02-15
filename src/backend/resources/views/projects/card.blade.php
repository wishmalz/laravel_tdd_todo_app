<div class="card">
    <h3 class="font-normal text-xl py-4 -ml-5 border-l-4 border-indigo-400 pl-4 mb-3">
        <a href="{{ $project->path() }}" class="no-underline text-black">{{ $project->title }}</a>
    </h3>
    <div class="text-gray-400">
        {{ Str::limit($project->description, 100) }}
    </div>
</div>
