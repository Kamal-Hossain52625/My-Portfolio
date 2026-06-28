@extends('layouts.app')

@section('content')

<div class="min-h-screen flex items-center justify-center bg-[#0d1117] px-6">

    <div class="w-full max-w-md bg-[#161b22] border border-white/10 rounded-2xl p-8 shadow-2xl">

        <div class="text-center mb-8">

            <h1 class="text-3xl font-bold text-white">
                Admin Login
            </h1>

            <p class="text-gray-400 mt-2">
                Sign in to access your dashboard
            </p>

        </div>

        @if(session('error'))

            <div class="mb-5 bg-red-500/20 border border-red-500 text-red-400 rounded-lg p-3">
                {{ session('error') }}
            </div>

        @endif

        <form action="{{ route('admin.login.submit') }}" method="POST">

            @csrf

            <div class="mb-5">

                <label class="block text-gray-300 mb-2">
                    Username
                </label>

                <input
                    type="text"
                    name="username"
                    class="w-full px-4 py-3 bg-[#0d1117] border border-white/10 rounded-xl text-white focus:outline-none focus:border-blue-500"
                    placeholder="Enter Username">

                @error('username')
                    <small class="text-red-500">{{ $message }}</small>
                @enderror

            </div>

            <div class="mb-6">

                <label class="block text-gray-300 mb-2">
                    Password
                </label>

                <input
                    type="password"
                    name="password"
                    class="w-full px-4 py-3 bg-[#0d1117] border border-white/10 rounded-xl text-white focus:outline-none focus:border-blue-500"
                    placeholder="Enter Password">

                @error('password')
                    <small class="text-red-500">{{ $message }}</small>
                @enderror

            </div>

            <button
                class="w-full bg-blue-600 hover:bg-blue-700 py-3 rounded-xl font-semibold transition">

                Login

            </button>

        </form>

    </div>

</div>

@endsection