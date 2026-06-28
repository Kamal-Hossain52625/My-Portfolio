<section id="portfolio" class="py-24">

    <div class="max-w-7xl mx-auto px-6">

        <div class="text-center mb-16">

            <h2 class="text-4xl font-bold mb-4">
                My Portfolio
            </h2>

            <p class="text-gray-400 max-w-2xl mx-auto">
                A selection of my recent projects across various disciplines of design and development.
            </p>

            @if(session('admin'))

                <div class="mt-5 inline-flex items-center gap-2 bg-brand-primary/20 text-brand-primary px-4 py-2 rounded-full text-sm">

                    🟢 Admin Mode Active

                </div>

            @endif

        </div>


        @if($projects->count()==0)

            <div class="text-center py-20 bg-white/5 rounded-3xl border border-white/10">

                <p class="text-lg text-gray-400 mb-6">

                    No projects found.

                </p>

                <a href="{{ route('admin.projects.create') }}"
                    class="px-6 py-3 bg-brand-primary rounded-xl font-semibold hover:bg-blue-600 transition">

                    Add First Project

                </a>

            </div>

        @else

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">

            @foreach($projects as $project)

            <div class="group relative overflow-hidden rounded-3xl bg-bg-card border border-white/10">

                <img
                    src="{{ $project->image ? asset('storage/'.$project->image) : asset('images/default-project.jpg') }}"
                    alt="{{ $project->title }}"
                    class="w-full h-72 object-cover transition duration-500 group-hover:scale-110">

                <div class="absolute inset-0 bg-gradient-to-t from-black/95 via-black/40 to-transparent opacity-0 group-hover:opacity-100 transition duration-300 flex flex-col justify-end p-6">

                    <p class="text-brand-primary text-sm mb-2">

                        {{ $project->category }}

                    </p>

                    <h3 class="text-2xl font-bold text-white mb-4">

                        {{ $project->title }}

                    </h3>

                    <div class="flex items-center gap-4">

                        @if($project->project_link)

                        <a href="{{ $project->project_link }}"
                            target="_blank"
                            class="text-white hover:text-brand-primary transition">

                            🔗 View Project

                        </a>

                        @endif


                        @if(session('admin'))

                        <form action="{{ route('projects.destroy',$project->id) }}"
                            method="POST"
                            class="ml-auto">

                            @csrf
                            @method('DELETE')

                            <button
                                class="bg-red-600 hover:bg-red-700 px-3 py-2 rounded-lg">

                                🗑

                            </button>

                        </form>

                        @endif

                    </div>

                </div>

            </div>

            @endforeach

        </div>

        @endif

    </div>

</section>