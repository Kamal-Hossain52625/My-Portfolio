<nav class="fixed top-0 left-0 w-full z-50 glass">

    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">

        <!-- Logo -->
        <a href="/" class="text-2xl font-display font-bold text-white flex items-center gap-1">

            <span>KH</span>

            <span class="text-brand-primary">.</span>

        </a>

        <!-- Desktop Menu -->
        <div class="hidden md:flex items-center space-x-8">

            <a href="#home"
                class="text-sm font-medium text-gray-400 hover:text-white transition">
                Home
            </a>

            <a href="#about"
                class="text-sm font-medium text-gray-400 hover:text-white transition">
                About
            </a>

            <a href="#services"
                class="text-sm font-medium text-gray-400 hover:text-white transition">
                Services
            </a>

            <a href="#portfolio"
                class="text-sm font-medium text-gray-400 hover:text-white transition">
                Portfolio
            </a>

            <a href="#contact"
                class="text-sm font-medium text-gray-400 hover:text-white transition">
                Contact
            </a>

            <a href="{{ route('admin.login') }}"
                class="text-sm font-semibold text-brand-primary hover:text-blue-400 transition flex items-center gap-2">

                🔐 Admin

            </a>

        </div>

        <!-- Mobile Button -->

        <button
            id="menu-btn"
            class="md:hidden text-white text-3xl">

            ☰

        </button>

    </div>

    <!-- Mobile Menu -->

    <div id="mobile-menu"
        class="hidden md:hidden bg-[#0d1117] border-t border-white/10">

        <div class="flex flex-col p-6 space-y-5">

            <a href="#home" class="text-gray-300">
                Home
            </a>

            <a href="#about" class="text-gray-300">
                About
            </a>

            <a href="#services" class="text-gray-300">
                Services
            </a>

            <a href="#portfolio" class="text-gray-300">
                Portfolio
            </a>

            <a href="#contact" class="text-gray-300">
                Contact
            </a>

            <a href="{{ route('admin.login') }}"
                class="text-brand-primary font-semibold">

                🔐 Admin Area

            </a>

        </div>

    </div>

</nav>

<script>

document.addEventListener("DOMContentLoaded",function(){

const btn=document.getElementById("menu-btn");

const menu=document.getElementById("mobile-menu");

btn.addEventListener("click",function(){

menu.classList.toggle("hidden");

});

});

</script>