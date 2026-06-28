<nav class="fixed top-0 left-0 w-full z-50 backdrop-blur-xl bg-black/40 border-b border-white/10">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">

        <!-- Logo -->
        <a href="{{ url('/') }}" class="text-2xl font-bold text-white flex items-center gap-1">
            <span>KM</span>
            <span class="text-blue-500">.</span>
        </a>

        <!-- Desktop Menu -->
        <div class="hidden md:flex items-center space-x-8">

            <a href="#home" class="text-sm text-gray-400 hover:text-white transition">
                Home
            </a>

            <a href="#about" class="text-sm text-gray-400 hover:text-white transition">
                About
            </a>

            <a href="#services" class="text-sm text-gray-400 hover:text-white transition">
                Services
            </a>

            <a href="#portfolio" class="text-sm text-gray-400 hover:text-white transition">
                Portfolio
            </a>

            <a href="#contact" class="text-sm text-gray-400 hover:text-white transition">
                Contact
            </a>

            @if(session('admin'))
                <a href="{{ route('admin.dashboard') }}"
                   class="text-sm font-semibold text-blue-500 hover:text-blue-400">
                    🔐 Admin
                </a>
            @else
                <a href="{{ route('admin.login') }}"
                   class="text-sm font-semibold text-blue-500 hover:text-blue-400">
                    🔐 Admin
                </a>
            @endif

        </div>

        <!-- Mobile Button -->
        <button
            id="menuBtn"
            class="md:hidden text-white text-2xl">

            ☰

        </button>

    </div>

    <!-- Mobile Menu -->

    <div
        id="mobileMenu"
        class="hidden md:hidden bg-[#111] border-t border-white/10">

        <div class="flex flex-col p-6 space-y-4">

            <a href="#home" class="text-lg text-gray-400 hover:text-white">
                Home
            </a>

            <a href="#about" class="text-lg text-gray-400 hover:text-white">
                About
            </a>

            <a href="#services" class="text-lg text-gray-400 hover:text-white">
                Services
            </a>

            <a href="#portfolio" class="text-lg text-gray-400 hover:text-white">
                Portfolio
            </a>

            <a href="#contact" class="text-lg text-gray-400 hover:text-white">
                Contact
            </a>

            @if(session('admin'))
                <a href="{{ route('admin.dashboard') }}"
                   class="text-lg text-blue-500 font-semibold">
                    🔐 Dashboard
                </a>
            @else
                <a href="{{ route('admin.login') }}"
                   class="text-lg text-blue-500 font-semibold">
                    🔐 Admin Area
                </a>
            @endif

        </div>

    </div>

</nav>

<script>
document.addEventListener('DOMContentLoaded', function () {

    const btn = document.getElementById('menuBtn');
    const menu = document.getElementById('mobileMenu');

    btn.addEventListener('click', function () {
        menu.classList.toggle('hidden');
    });

});
</script>