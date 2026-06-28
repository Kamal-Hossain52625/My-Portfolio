<section id="contact" class="py-24">
    <div class="max-w-7xl mx-auto px-6">

        <div class="grid lg:grid-cols-2 gap-16">

            <!-- Contact Info -->
            <div>

                <h2 class="text-4xl mb-6">
                    Get In Touch
                </h2>

                <p class="text-gray-400 text-lg mb-12">
                    Have a project in mind? Or just want to say hi? Feel free to reach out. I'm always open to new opportunities and collaborations.
                </p>

                <div class="space-y-8">

                    <div class="flex items-center gap-6">

                        <div class="w-12 h-12 rounded-2xl bg-white/5 flex items-center justify-center text-blue-500">
                            📧
                        </div>

                        <div>
                            <p class="text-sm text-gray-500">
                                Email
                            </p>

                            <a
                                href="mailto:kamalhossainm5443@gmail.com"
                                class="text-lg hover:text-blue-500 transition">

                                kamalhossainm5443@gmail.com

                            </a>

                        </div>

                    </div>

                    <div class="flex items-center gap-6">

                        <div class="w-12 h-12 rounded-2xl bg-white/5 flex items-center justify-center text-blue-500">
                            📞
                        </div>

                        <div>

                            <p class="text-sm text-gray-500">
                                Phone
                            </p>

                            <a href="tel:+8801575573228"
                               class="block text-lg hover:text-blue-500">
                                +8801575573228
                            </a>

                            <a href="tel:+8801645515443"
                               class="block text-lg hover:text-blue-500">
                                +8801645515443
                            </a>

                        </div>

                    </div>

                    <div class="flex items-center gap-6">

                        <div class="w-12 h-12 rounded-2xl bg-white/5 flex items-center justify-center text-blue-500">
                            📍
                        </div>

                        <div>

                            <p class="text-sm text-gray-500">
                                Location
                            </p>

                            <p class="text-lg">
                                Dhaka, Bangladesh
                            </p>

                        </div>

                    </div>

                </div>

                <!-- Social Links -->

                <div class="flex gap-4 mt-12 flex-wrap">

                    <a href="https://github.com/Kamal-Hossain52625"
                       target="_blank">
                       
                        <img class="w-12 h-12 rounded-xl bg-white/5 flex items-center justify-center transition"
                        src="{{ asset('images/fav icon/github.png') }}" alt="github">
                    </a>

                    <a href="https://www.linkedin.com/in/kamal-hossain-4087a7297"
                       target="_blank">
                       <img class="w-12 h-12 rounded-xl bg-white/5 flex items-center justify-center transition"
                        src="{{ asset('images/fav icon/linkedin.jpg') }}" alt="linkedin">
                    </a>

                    <a href="https://www.facebook.com/profile.php?id=100005506395614"
                       target="_blank">

                        <img class="w-12 h-12 rounded-xl bg-white/5 flex items-center justify-center transition"
                        src="{{ asset('images/fav icon/facebook.png') }}" alt="facebook">
                    </a>

                    <a href="https://x.com/kamal_hoss5792"
                       target="_blank">
                        
                       <img class="w-12 h-12 rounded-xl bg-white/5 flex items-center justify-center transition"
                        src="{{ asset('images/fav icon/x-icon.png') }}" alt="x.com">
                    </a>

                    <a href="https://www.behance.net/kamalhossain66"
                       target="_blank">
                        
                       <img class="w-12 h-12 rounded-xl bg-white/5 flex items-center justify-center transition"
                        src="{{ asset('images/fav icon/behance.png') }}" alt="behance">
                    </a>

                </div>

            </div>

            <!-- Contact Form -->

            <div class="bg-white/5 p-8 rounded-3xl border border-white/10">

                @if(session('success'))

                    <div class="mb-6 p-4 rounded-xl bg-green-500/20 text-green-400">

                        {{ session('success') }}

                    </div>

                @endif

                @if($errors->any())

                    <div class="mb-6 p-4 rounded-xl bg-red-500/20 text-red-400">

                        <ul>

                            @foreach($errors->all() as $error)

                                <li>{{ $error }}</li>

                            @endforeach

                        </ul>

                    </div>

                @endif

                <form action="{{ route('contact.send') }}" method="POST">

                    @csrf

                    <div class="mb-5">

                        <label class="block mb-2">
                            Full Name
                        </label>

                        <input
                            type="text"
                            name="name"
                            value="{{ old('name') }}"
                            required
                            class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3">

                    </div>

                    <div class="mb-5">

                        <label class="block mb-2">
                            Email
                        </label>

                        <input
                            type="email"
                            name="email"
                            value="{{ old('email') }}"
                            required
                            class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3">

                    </div>

                    <div class="mb-5">

                        <label class="block mb-2">
                            Message
                        </label>

                        <textarea
                            rows="5"
                            name="message"
                            required
                            class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3">{{ old('message') }}</textarea>

                    </div>

                    <button
                        type="submit"
                        class="w-full bg-blue-600 hover:bg-blue-700 transition rounded-xl py-4 font-semibold">

                        Send Message

                    </button>

                </form>

            </div>

        </div>

    </div>
</section>