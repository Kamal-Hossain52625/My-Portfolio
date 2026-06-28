@extends('layouts.app')

@section('content')

<div class="min-h-screen bg-[#0d1117] text-white">

    <!-- Header -->
    <div class="border-b border-white/10">

        <div class="max-w-7xl mx-auto px-6 py-5 flex justify-between items-center">

            <div>

                <h1 class="text-3xl font-bold">
                    Admin Dashboard
                </h1>

                <a href="{{ url('/') }}" class="text-2xl font-bold text-white flex items-center gap-1">
                    <span>KM</span>
                    <span class="text-blue-500">.</span>
                </a>

            </div>

            <div class="flex gap-3">

                <a href="{{ route('projects.create') }}"
                    class="bg-blue-600 hover:bg-blue-700 px-5 py-3 rounded-xl font-semibold">

                    + Add Project

                </a>

                <form action="{{ route('admin.logout') }}" method="POST">

                    @csrf

                    <button
                        class="bg-red-600 hover:bg-red-700 px-5 py-3 rounded-xl">

                        Logout

                    </button>

                </form>

            </div>

        </div>

    </div>



    <!-- Statistics -->

    <div class="max-w-7xl mx-auto px-6 mt-8">

        <div class="grid md:grid-cols-3 gap-6">

            <div class="bg-[#161b22] rounded-2xl p-6 border border-white/10">

                <p class="text-gray-400">

                    Total Projects

                </p>

                <h2 class="text-4xl font-bold mt-2">

                    {{ $projects->count() }}

                </h2>

            </div>

        </div>

    </div>



    <!-- Project Table -->

    <div class="max-w-7xl mx-auto px-6 py-10">

        @if(session('success'))

        <div class="bg-green-500/20 border border-green-500 text-green-400 p-4 rounded-xl mb-6">

            {{ session('success') }}

        </div>

        @endif


        <div class="overflow-x-auto rounded-2xl border border-white/10">

            <table class="w-full">

                <thead class="bg-[#161b22]">

                    <tr>

                        <th class="text-left p-4">
                            Image
                        </th>

                        <th class="text-left p-4">
                            Title
                        </th>

                        <th class="text-left p-4">
                            Category
                        </th>

                        <th class="text-left p-4">
                            Link
                        </th>

                        <th class="text-center p-4">
                            Action
                        </th>

                    </tr>

                </thead>


                <tbody>

                    @forelse($projects as $project)

                    <tr class="border-t border-white/10 hover:bg-white/5">

                        <td class="p-4">

                            <img
                                src="{{ asset('storage/'.$project->image) }}"
                                class="w-20 h-14 rounded-lg object-cover">

                        </td>

                        <td class="p-4">

                            {{ $project->title }}

                        </td>

                        <td class="p-4">

                            {{ $project->category }}

                        </td>

                        <td class="p-4">

                            <a
                                href="{{ $project->project_link }}"
                                target="_blank"
                                class="text-blue-400 hover:underline">

                                Visit

                            </a>

                        </td>

                        <td class="p-4">

                            <div class="flex justify-center gap-3">

                                <a
                                    href="{{ route('projects.edit',$project->id) }}"
                                    class="bg-yellow-500 hover:bg-yellow-600 px-4 py-2 rounded-lg">

                                    Edit

                                </a>

                                <form
                                    action="{{ route('projects.destroy',$project->id) }}"
                                    method="POST">

                                    @csrf
                                    @method('DELETE')

                                    <button
                                        onclick="return confirm('Delete this project?')"
                                        class="bg-red-600 hover:bg-red-700 px-4 py-2 rounded-lg">

                                        Delete

                                    </button>

                                </form>

                            </div>

                        </td>

                    </tr>

                    @empty

                    <tr>

                        <td colspan="5" class="text-center p-10 text-gray-400">

                            No Projects Found

                        </td>

                    </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection