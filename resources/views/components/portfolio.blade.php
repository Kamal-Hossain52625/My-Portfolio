<section id="portfolio" class="py-24">
    <div class="max-w-7xl mx-auto px-6">

        <!-- Section Title -->
        <div class="text-center mb-16">
            <h2 class="text-4xl mb-4">My Portfolio</h2>
            <p class="text-gray-400 max-w-2xl mx-auto">
                A selection of my recent projects across various disciplines of design and development.
            </p>
        </div>

        @if($projects->count() == 0)

        <div class="text-center py-20 bg-white/5 rounded-3xl border border-white/10">
            <p class="text-gray-400 text-lg mb-6">
                No projects found.
            </p>

            <a href="{{ route('projects.create') }}"
                class="px-6 py-3 bg-blue-600 text-white rounded-xl hover:bg-blue-700 transition">
                Add Your First Project
            </a>
        </div>

        @else

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">

            @foreach($projects as $project)

            <div
                class="group relative overflow-hidden rounded-2xl aspect-[4/3] bg-[#18181b] border border-white/10">

                <!-- Image -->
                <img
                    src="{{ $project->image ? asset('storage/'.$project->image) : 'https://images.unsplash.com/photo-1618005182384-a83a8bd57fbe?auto=format&fit=crop&w=600&q=80' }}"
                    alt="{{ $project->title }}"
                    class="w-full h-full object-cover transition duration-500 group-hover:scale-110">

                <!-- Hover Overlay -->
                <div
                    class="absolute inset-0 bg-gradient-to-t from-black/95 via-black/40 to-transparent opacity-0 group-hover:opacity-100 transition duration-300 flex flex-col justify-end p-6">

                    <p class="text-blue-500 text-sm mb-2">
                        {{ $project->category }}
                    </p>

                    <h3 class="text-2xl font-bold text-white mb-4">
                        {{ $project->title }}
                    </h3>

                    <div class="flex items-center gap-3">

                        @if($project->project_link)

                        <a
                            href="{{ $project->project_link }}"
                            target="_blank"
                            class="text-white hover:text-blue-500 transition font-semibold">
                            View Project →
                        </a>

                        @endif

                    </div>

                </div>

            </div>

            @endforeach

        </div>

        @endif

        @if(session('admin'))

        <div class="absolute top-3 right-3 flex gap-2">

            <a href="{{ route('projects.edit',$project->id) }}"
                class="bg-yellow-500 text-white px-3 py-2 rounded-lg">
                Edit
            </a>

            <form action="{{ route('projects.destroy',$project->id) }}"
                method="POST">

                @csrf
                @method('DELETE')

                <button
                    onclick="return confirm('Delete this project?')"
                    class="bg-red-600 text-white px-3 py-2 rounded-lg">
                    Delete
                </button>

            </form>

        </div>

        @endif

    </div>
</section>