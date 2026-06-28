@extends('layouts.app')

@section('content')

<div class="min-h-screen bg-[#0d1117] text-white py-12">

    <div class="max-w-3xl mx-auto">

        <div class="bg-[#161b22] rounded-2xl border border-white/10 p-8">

            <div class="flex justify-between items-center mb-8">

                <div>

                    <h1 class="text-3xl font-bold">
                        Add New Project
                    </h1>

                    <p class="text-gray-400 mt-2">
                        Fill in the information below to add a new portfolio project.
                    </p>

                </div>

                <a href="{{ route('admin.dashboard') }}"
                    class="px-5 py-2 bg-gray-700 hover:bg-gray-600 rounded-lg">

                    ← Back

                </a>

            </div>


            @if ($errors->any())

                <div class="bg-red-500/20 border border-red-500 rounded-xl p-4 mb-6">

                    <ul class="list-disc list-inside text-red-400">

                        @foreach ($errors->all() as $error)

                            <li>{{ $error }}</li>

                        @endforeach

                    </ul>

                </div>

            @endif


            <form action="{{ route('projects.store') }}"
                  method="POST"
                  enctype="multipart/form-data">

                @csrf

                <!-- Title -->

                <div class="mb-6">

                    <label class="block mb-2 font-semibold">

                        Project Title

                    </label>

                    <input
                        type="text"
                        name="title"
                        value="{{ old('title') }}"
                        class="w-full bg-[#0d1117] border border-white/10 rounded-xl px-4 py-3 focus:border-blue-500 outline-none">

                </div>

                <!-- Category -->

                <div class="mb-6">

                    <label class="block mb-2 font-semibold">

                        Category

                    </label>

                    <input
                        type="text"
                        name="category"
                        value="{{ old('category') }}"
                        placeholder="UI Design / Website / Branding"
                        class="w-full bg-[#0d1117] border border-white/10 rounded-xl px-4 py-3 focus:border-blue-500 outline-none">

                </div>

                <!-- Project URL -->

                <div class="mb-6">

                    <label class="block mb-2 font-semibold">

                        Project URL

                    </label>

                    <input
                        type="url"
                        name="project_link"
                        value="{{ old('project_link') }}"
                        placeholder="https://example.com"
                        class="w-full bg-[#0d1117] border border-white/10 rounded-xl px-4 py-3 focus:border-blue-500 outline-none">

                </div>

                <!-- Image -->

                <div class="mb-8">

                    <label class="block mb-2 font-semibold">

                        Project Image

                    </label>

                    <input
                        type="file"
                        name="image"
                        accept="image/*"
                        class="w-full bg-[#0d1117] border border-white/10 rounded-xl px-4 py-3">

                </div>

                <!-- Buttons -->

                <div class="flex gap-4">

                    <button
                        type="submit"
                        class="bg-blue-600 hover:bg-blue-700 px-8 py-3 rounded-xl font-semibold transition">

                        Save Project

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