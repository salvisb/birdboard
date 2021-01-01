<x-app-layout>
    <div class="flex items-center my-3">
        <a href="/projects/create">New Project</a>
    </div>

    <div class="flex">
        @forelse ($projects as $project)
            <div class="bg-white mr-4 p-5 rounded shadow w-1/3" style="height: 200px;">
                <h3 class="font-normal text-xl py-4">{{ $project->title }}</h3>

                <div class="text-gray-400">{{ Illuminate\Support\Str::limit($project->description, 300) }}</div>
            </div>
        @empty
            <div>No projects yet.</div>
        @endforelse
    </div>
</x-app-layout>
