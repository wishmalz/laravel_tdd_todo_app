<div class="mt-10">
    <label for="title">Title</label>
    <div>
        <input type="text" placeholder="My awesome project" name="title" class="shadow w-full"
               value="{{ $project->title }}" required>
    </div>
</div>
<div class="mt-4">
    <label for="description">Description</label>
    <div>
        <textarea name="description" class="shadow w-full"
        placeholder="I should start doing exercise." required> {{ $project->description }} </textarea>
    </div>
</div>
<div class="flex justify-between items-center mt-10">
    <button type="submit" class="button">{{ $buttonText }}</button>
    <a href="{{ $project->path() }}">Cancel</a>
</div>

@if($errors->any())
    <div class="field mt-6">
        @foreach($errors->all() as $error)
            <li class="text-sm text-red-600">{{ $error }}</li>
        @endforeach
    </div>
@endif
