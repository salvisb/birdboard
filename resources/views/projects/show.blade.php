<x-app-layout>
    <header class="flex items-center mb-3 py-5">
        <div class="flex justify-between items-end w-full">
            <p class="text-gray-400 text-sm font-normal">
                <a href="/projects" class="text-gray-400 text-sm font-normal no-underline">My Projects</a>
                / {{ $project->title }}
            </p>
        </div>
    </header>

    <main>
        <div class="lg:flex -mx-3">
            <div class="lg:w-3/4 px-3 mb-6">
                <div class="mb-8">
                    <h2 class="text-gray-400 text-lg font-normal mb-3">Tasks</h2>
                    @foreach ($project->tasks as $task)
                        <div class="card mb-3">
                            <form action="{{ $task->path() }}" method="POST">
                                @method('PATCH')
                                @csrf
                                <div class="flex">
                                    <input name="body"
                                           value="{{ $task->body }}"
                                           class="w-full @if ($task->completed) text-gray-400 @endif">
                                    <input type="checkbox"
                                           name="completed"
                                           onchange="this.form.submit();"
                                           @if ($task->completed) checked="checked" @endif>
                                </div>
                            </form>
                        </div>
                    @endforeach
                    <div class="card mb-3">
                        <form action="{{ $project->path() . '/tasks' }}" method="POST">
                            @csrf
                            <input name="body" placeholder="Add a new task..." class="w-full">
                        </form>
                    </div>
                </div>

                <div>
                    <h2 class="text-gray-400 text-lg font-normal mb-3">General Notes</h2>
                    <textarea class="card w-full" style="min-height: 200px;">Lorem ipsum.</textarea>
                </div>
            </div>
            <div class="lg:w-1/4 px-3">
                @include('projects.card')
            </div>
        </div>
    </main>
</x-app-layout>

