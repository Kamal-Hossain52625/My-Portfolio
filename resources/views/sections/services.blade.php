@php

$services = [

    [
        'icon' => '💻',
        'title' => 'Web Development',
        'description' => 'Custom websites built with React, Next.js, PHP, Laravel and Tailwind CSS. Fast, responsive, and SEO-friendly.',
        'color' => 'text-blue-500'
    ],

    [
        'icon' => '🎨',
        'title' => 'Graphic Design',
        'description' => 'Logo design, brand guidelines, and marketing materials that make your business stand out.',
        'color' => 'text-emerald-500'
    ],

    [
        'icon' => '📱',
        'title' => 'UI/UX Design',
        'description' => 'User-centered design process to create intuitive and engaging digital experiences.',
        'color' => 'text-purple-500'
    ],

    [
        'icon' => '🌍',
        'title' => 'SEO Optimization',
        'description' => 'Improving your online visibility and search engine rankings to drive more traffic.',
        'color' => 'text-orange-500'
    ],

];

@endphp


<section id="services" class="py-24 bg-bg-card/30">

    <div class="max-w-7xl mx-auto px-6">

        <!-- Heading -->

        <div class="text-center mb-16">

            <h2 class="text-4xl font-bold mb-4">
                Services
            </h2>

            <p class="text-gray-400 max-w-2xl mx-auto">
                I offer a wide range of services to help you build and grow your digital presence.
            </p>

        </div>


        <!-- Cards -->

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">

            @foreach($services as $service)

                <div class="glass p-8 rounded-3xl transition duration-300 hover:-translate-y-3 hover:shadow-2xl">

                    <div class="{{ $service['color'] }} text-5xl mb-6">

                        {{ $service['icon'] }}

                    </div>

                    <h3 class="text-xl font-semibold mb-4">

                        {{ $service['title'] }}

                    </h3>

                    <p class="text-gray-500 text-sm leading-relaxed">

                        {{ $service['description'] }}

                    </p>

                </div>

            @endforeach

        </div>

    </div>

</section>