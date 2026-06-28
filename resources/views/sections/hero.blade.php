<section class="relative min-h-screen flex items-center pt-20 overflow-hidden">

    <!-- Background -->
    <div class="absolute top-1/4 -left-20 w-96 h-96 bg-brand-primary/20 rounded-full blur-[120px]"></div>
    <div class="absolute bottom-1/4 -right-20 w-96 h-96 bg-brand-secondary/20 rounded-full blur-[120px]"></div>

    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center relative z-10">

        <!-- Left -->
        <div class="animate-fade-up">

            

            <div class="hero-ticker">
                <div class="hero-ticker-track">

                    <!-- First Set -->
                    <div class="ticker-group">
                        <span>📢</span>
                        <span>Welcome to Kamal Hossain's Portfolio</span>
                        <span>💻</span>
                        <span>Contact Me for Web Development</span>
                        <span>⚛️</span>
                        <span>UI/UX & Graphic Design</span>
                        <span>🚀</span>
                        <span>Available for Freelance Projects</span>
                        <span>💻</span>
                        <span>Laravel Developer</span>
                        <span>⚛️</span>
                        <span>React Developer</span>
                        <span>🎨</span>
                        <span>UI/UX Designer</span>
                        <span>🚀</span>
                        <span>Open to Remote Work</span>
                        <span>📩</span>
                        <span>Let's Work Together</span>
                    </div>

                    <!-- Duplicate Set -->
                    

                </div>
            </div>

            <h2 class="text-brand-primary font-mono text-sm tracking-widest uppercase mb-4">
                Welcome to my world
            </h2>

            <h1 class="text-5xl lg:text-7xl mb-6 leading-tight">
                I'm
                <span class="text-gradient">
                    Kamal Hossain
                </span>
                <br>
                Crafting Digital Experiences.
            </h1>

            <p class="text-xl text-gray-400 mb-8 max-w-lg leading-relaxed">
                A passionate Graphic Designer and Web Developer focused on building beautiful,
                functional, and user-centric digital solutions.
            </p>

            <div class="flex flex-wrap gap-4">

                <a href="#portfolio"
                    class="px-8 py-4 bg-brand-primary text-white rounded-full font-semibold hover:bg-blue-600 transition-all flex items-center gap-2 group">

                    View My Work

                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="w-5 h-5 group-hover:translate-x-1 transition-transform"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor">

                        <path stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M9 5l7 7-7 7" />

                    </svg>

                </a>

                <a href="#contact"
                    class="px-8 py-4 border border-white/20 text-white rounded-full font-semibold hover:bg-white/5 transition-all">

                    Let's Talk

                </a>

            </div>

        </div>

        <!-- Right -->
        <div class="relative animate-fade">

            <div class="aspect-square rounded-3xl overflow-hidden glass p-4">

                <img
                    src="{{ asset('images/Portfolio.png') }}"
                    alt="Kamal Hossain"
                    class="w-full h-full object-cover rounded-2xl grayscale hover:grayscale-0 transition-all duration-700">

            </div>

            <!-- Floating Badge -->
            <div class="absolute -top-6 -right-6 glass p-4 rounded-2xl flex items-center gap-3 floating">

                <div
                    class="w-10 h-10 bg-brand-primary/20 rounded-full flex items-center justify-center text-brand-primary">

                    🎨

                </div>

                <div>

                    <p class="text-xs text-gray-400">
                        Design
                    </p>

                    <p class="text-sm font-bold">
                        Expert
                    </p>

                </div>

            </div>

            <!-- Floating Badge -->
            <div class="absolute -bottom-6 -left-6 glass p-4 rounded-2xl flex items-center gap-3 floating2">

                <div
                    class="w-10 h-10 bg-brand-secondary/20 rounded-full flex items-center justify-center text-brand-secondary">

                    💻

                </div>

                <div>

                    <p class="text-xs text-gray-400">
                        Development
                    </p>

                    <p class="text-sm font-bold">
                        Full Stack
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>