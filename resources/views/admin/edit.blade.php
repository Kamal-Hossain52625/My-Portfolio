@extends('layouts.app')

@section('content')

<div class="min-h-screen bg-[#0d1117] text-white py-12">

    <div class="max-w-3xl mx-auto">

        <div class="bg-[#161b22] border border-white/10 rounded-2xl p-8">

            <div class="flex justify-between items-center mb-8">

                <div>

                    <h1 class="text-3xl font-bold">
                        Edit Project
                    </h1>

                    <p class="text-gray-400 mt-2">
                        Update your portfolio project.
                    </p>

                </div>

                <a href="{{ route('admin.dashboard') }}"
                   class="bg-gray-700 hover:bg-gray-600 px-5 py-2 rounded-lg">

                    ← Back

                </a>

            </div>

            @if ($errors->any())

                <div class="bg-red-500/20 border border-red-500 rounded-xl p-4 mb-6">

                    <ul class="list-disc list-inside text-red-400">

                        @foreach($errors->all() as $error)

                            <li>{{ $error }}</li>

                        @endforeach

                    </ul>

                </div>

            @endif


            <form action="{{ route('projects.update',$project->id) }}"
                  method="POST"
                  enctype="multipart/form-data">

                @csrf
                @method('PUT')

                <!-- Title -->

                <div class="mb-6">

                    <label class="block mb-2 font-semibold">

                        Project Title

                    </label>

                    <input
                        type="text"
                        name="title"
                        value="{{ old('title',$project->title) }}"
                        class="w-full bg-[#0d1117] border border-white/10 rounded-xl px-4 py-3 outline-none focus:border-blue-500">

                </div>

                <!-- Category -->

                <div class="mb-6">

                    <label class="block mb-2 font-semibold">

                        Category

                    </label>

                    <input
                        type="text"
                        name="category"
                        value="{{ old('category',$project->category) }}"
                        class="w-full bg-[#0d1117] border border-white/10 rounded-xl px-4 py-3 outline-none focus:border-blue-500">

                </div>

                <!-- Project Link -->

                <div class="mb-6">

                    <label class="block mb-2 font-semibold">

                        Project URL

                    </label>

                    <input
                        type="url"
                        name="project_link"
                        value="{{ old('project_link',$project->project_link) }}"
                        class="w-full bg-[#0d1117] border border-white/10 rounded-xl px-4 py-3 outline-none focus:border-blue-500">

                </div>

                <!-- Current Image -->

                @if($project->image)

                    <div class="mb-6">

                        <label class="block mb-3 font-semibold">

                            Current Image

                        </label>

                        <img
                            src="{{ asset('storage/'.$project->image) }}"
                            class="w-48 rounded-xl border border-white/10">

                    </div>

                @endif

                <!-- New Image -->

                <div class="mb-8">

                    <label class="block mb-2 font-semibold">

                        Change Image (Optional)

                    </label>

                    <input
                        type="file"
                        name="image"
                        accept="image/*"
                        class="w-full bg-[#0d1117] border border-white/10 rounded-xl px-4 py-3">

                    <small class="text-gray-500">
                        Leave empty to keep the current image.
                    </small>

                </div>

                <!-- Buttons -->

                <div class="flex gap-4">

                    <button
                        type="submit"
                        class="bg-blue-600 hover:bg-blue-700 px-8 py-3 rounded-xl font-semibold">

                        Update Project

                    </button>

                    <a href="{{ route('admin.dashboard') }}"
                       class="bg-gray-700 hover:bg-gray-600 px-8 py-3 rounded-xl">

                        Cancel

                    </a>

                </div>

            </form>

        </div>

    </div>

</div>

@endsection