<x-app-layout>
    <x-slot name="title">
        {{ __('Home') }}
    </x-slot>
    <!-- Hero Section -->
    <section id="hero" class="bg-gray-100 dark:bg-gray-900 md:h-[90vh] flex items-center justify-center md:p-3">
        <div
            class="mx-auto py-16 px-4 sm:px-6 lg:px-8 rounded-lg shadow-lg bg-white dark:bg-gray-800 md:w-full md:h-full object-contain bg-[url(/public\herobg.png)] dark:bg-none">
            <!-- ...existing hero content... -->
            <div
                class="my-auto text-center text-gray-700 h-full dark:text-gray-300 flex flex-col items-center justify-center space-y-4">
                <h1 class="text-4xl font-extrabold text-gray-900 dark:text-gray-100 sm:text-5xl md:text-6xl">
                    Your Vision, Our Design
                </h1>
                <p class="mt-4 text-lg leading-6 text-gray-700 dark:text-gray-300">
                    We merge creativity with technical excellence to <br class="hidden md:block">build websites that
                    drive business growth.
                </p>
                <div class="mt-8 flex items-center justify-center space-x-4">
                    {{-- Left Button --}}
                    @include('components.pbutton', [
                        'href' => '#',
                        'buttonText' => 'Explore Projects',
                        'darkButtonColor' => 'dark:bg-[#ff3b1d]',
                        'darkButtonText' => 'dark:text-gray-800',
                        'lightbuttonText' => 'text-white',
                        'lightButtonColor' => 'bg-[#ff3b1d]',
                    ])
                    {{-- Right Button --}}
                    @include('components.pbutton', [
                        'href' => '#',
                        'buttonText' => 'Contact Us',
                        'darkButtonColor' => 'dark:bg-[#5ecde1]',
                        'darkButtonText' => 'dark:text-gray-800',
                        'lightbuttonText' => 'text-black',
                        'lightButtonColor' => 'bg-[#5ecde1]',
                    ])
                </div>
            </div>
        </div>
    </section>
    <!-- Projects Section -->
    <section class="mt-16 bg-gray-100 dark:bg-gray-900  md:p-3 md:px-32 px-2">
        <h2 class="text-3xl font-extrabold text-gray-900 dark:text-gray-100 text-center">Our Projects</h2>
        {{-- Limit the amount of projects to 5 --}}
        @php
            $projects = $projects->take(5);
        @endphp
        @foreach ($projects as $project)
            @include('components.project-card')
        @endforeach
        <div class="flex items-center justify-center mt-16">
            <a href="{{ route('projects.index') }}"
                class="text-lg font-semibold text-[#ff3b1d] dark:text-[#5ecde1] hover:underline animate-fade-in-bottom">View
                All Projects</a>
        </div>
    </section>
    <!-- About Section -->
    <section id="about"
        class="bg-gray-100 dark:bg-gray-900 md:h-[100vh] flex items-center justify-center md:p-3 bg-[url(/public\herobgdark.png)] bg-contain bg-no-repeat bg-center">
        <div class="mx-auto py-16 px-4 sm:px-6 lg:px-8 md:w-full md:h-full">
            <div
                class="my-auto text-center text-gray-700 h-full dark:text-gray-300 grid grid-cols-1 md:grid-cols-3 gap-4 items-center">
                <h2 id="animated-heading"
                    class="text-xl font-extrabold text-gray-900 dark:text-gray-100 sm:text-5xl md:text-3xl col-span-1 col-start-2">
                    We believe in designing websites that are both beautiful and functional. Our approach combines
                    strategic
                    thinking with a keen eye for detail, ensuring that every project tells your unique story<span
                        class="text-[#ff3b1d]">.</span>
                </h2>
            </div>
        </div>
    </section>
    <!-- Services Section -->
    <section id="services"
        class="bg-gray-100 dark:bg-gray-900 md:min-h-[90vh] flex items-center justify-center md:p-3">
        <div
            class="mx-auto py-16 px-4 sm:px-6 lg:px-8 rounded-lg shadow-lg bg-white dark:bg-gray-800 md:w-full md:h-full">


            <p class="md:w-[50%] text-center place-self-center text-gray-700 dark:text-gray-300">
                From custom web design and responsive development to seamless user experience enhancements, we offer a
                comprehensive suite of services tailored for startups and small businesses.
            </p>


            <div class="md:grid md:grid-cols-2 space-y-4 mt-8">
                <div
                    class="card-3d bg-white dark:bg-gray-800 p-6 overlap col-start-1 flex flex-col md:items-end justify-center">
                    <div class="md:w-[80%]">
                        <h3 class="md:w-[80%] text-2xl font-extrabold text-gray-900 dark:text-gray-100">Web Design</h3>
                        <p class="md:w-[80%] mt-4 text-gray-700 dark:text-gray-300">We design websites that are both
                            beautiful and
                            functional. Our approach combines strategic thinking with a keen eye for detail, ensuring
                            that
                            every project tells your unique story.</p>
                    </div>
                </div>
                <div class=" w-full flex justify-center items-center">
                    <img src="{{ asset('accent.png') }}" alt="Decor"
                        class="hidden md:block col-start-2 row-start-1 h-[30px]">
                </div>
                <div class=" w-full flex justify-center items-center">
                    <img src="{{ asset('accent.png') }}" alt="Decor"
                        class="hidden md:block col-start-1 row-start-1 h-[30px]">
                </div>
                <div
                    class="card-3d bg-white dark:bg-gray-800 p-6 overlap col-start-2 row-start-2 flex flex-col md:items-end justify-center">
                    <div class="md:w-[80%]">
                        <h3 class="md:w-[80%] text-2xl font-extrabold text-gray-900 dark:text-gray-100">Web Development
                        </h3>
                        <p class="md:w-[80%] mt-4 text-gray-700 dark:text-gray-300">We build websites that are fast,
                            secure,
                            and easy
                            to manage. Our development process is focused on creating a seamless user experience that
                            drives
                            business growth.</p>
                    </div>
                </div>
                <div
                    class="card-3d bg-white dark:bg-gray-800 p-6 overlap col-start-1 row-start-3 flex flex-col md:items-end justify-center">
                    <div class="md:w-[80%]">
                        <h3 class="md:w-[80%] text-2xl font-extrabold text-gray-900 dark:text-gray-100">SaaS Development
                        </h3>
                        <p class="md:w-[80%] mt-4 text-gray-700 dark:text-gray-300">
                            We develop custom software solutions that help businesses streamline operations, improve
                            efficiency, and drive growth. Our SaaS development services are designed to meet the unique
                            needs of your business.
                        </p>
                    </div>
                </div>
                <div class=" w-full flex justify-center items-center">
                    <img src="{{ asset('accent.png') }}" alt="Decor"
                        class="hidden md:block col-start-2 row-start-1 h-[30px]">
                </div>
                <div class=" w-full flex justify-center items-center">
                    <img src="{{ asset('accent.png') }}" alt="Decor"
                        class="hidden md:block col-start-2 row-start-1 h-[30px]">
                </div>
                <div
                    class="card-3d bg-white dark:bg-gray-800 p-6 overlap col-start-2 row-start-4 flex flex-col md:items-end justify-center">
                    <div class="md:w-[80%]">
                        <h3 class="md:w-[80%] text-2xl font-extrabold text-gray-900 dark:text-gray-100">SEO</h3>
                        <p class="md:w-[80%] mt-4 text-gray-700 dark:text-gray-300">We optimize websites for search
                            engines
                            to
                            help you
                            reach your target audience. Our SEO services are designed to increase visibility, drive
                            traffic,
                            and generate leads for your business.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    {{-- Why Work With Us Section --}}
    <section class="grid grid-cols-2 py-16 px-4 sm:px-6 lg:px-8 bg-gray-100 dark:bg-gray-900">
        <div class=" sticky self-start top-28">
            <h2 class="text-gray-900 dark:text-gray-100 md:text-9xl">Why Work With Us</h2>
        </div>

        <div class=" flex flex-col items-start justify-start space-y-20 col-start-2">

            <div class="flex flex-row items-center justify-center space-x-4 group">
                <p
                    class="md:text-6xl rounded-full min-h-24 place-content-center p-2 text-center min-w-24 bg-[#5ecde1] group-hover:bg-[#ff3b1d] group-hover:shadow-lg group-hover:cursor-pointer">
                    1
                </p>
                <div>
                    <h2
                        class="text-2xl font-black text-gray-900 dark:text-gray-100 group-hover:text-[#ff3b1d] group-hover:drop-shadow-[0_35px_35px_rgba(0,0,0,0.25)] group-hover:cursor-pointer">
                        Professional Collaborator
                    </h2>
                    <p class="md:w-4/5 text-gray-900 dark:text-gray-100">
                        Experience how professionalism and creativity will drive your project.
                    </p>
                </div>
            </div>

            <div class="flex flex-row items-center justify-center space-x-4 group">
                <p
                    class="md:text-6xl rounded-full min-h-24 place-content-center p-2 text-center min-w-24 bg-[#5ecde1] hover:shadow-lg  group-hover:bg-[#ff3b1d] group-hover:shadow-lg group-hover:cursor-pointer">
                    2</p>
                <div class="">
                    <h2 class="text-2xl font-black text-gray-900 dark:text-gray-100  group-hover:text-[#ff3b1d] group-hover:drop-shadow-[0_35px_35px_rgba(0,0,0,0.25)] group-hover:cursor-pointer">User-First Approach</h2>

                    <p class="md:w-4/5 text-gray-900 dark:text-gray-100">I prioritize your users' needs and desires,
                        guaranteeing designs that resonate and engage.</p>
                </div>
            </div>
            <div class="flex flex-row items-center justify-center space-x-4 group">
                <p
                    class="md:text-6xl rounded-full min-h-24 place-content-center p-2 text-center min-w-24 bg-[#5ecde1] hover:shadow-lg  group-hover:bg-[#ff3b1d] group-hover:shadow-lg group-hover:cursor-pointer">
                    3</p>
                <div class="">
                    <h2 class="text-2xl font-black text-gray-900 dark:text-gray-100  group-hover:text-[#ff3b1d] group-hover:drop-shadow-[0_35px_35px_rgba(0,0,0,0.25)] group-hover:cursor-pointer">Cutting-Edge Creativity
                    </h2>

                    <p class="md:w-4/5 text-gray-900 dark:text-gray-100">Expect innovative and trend-setting designs
                        that push boundaries and captivate audiences.</p>
                </div>
            </div>
            <div class="flex flex-row items-center justify-center space-x-4 group">
                <p
                    class="md:text-6xl rounded-full min-h-24 place-content-center p-2 text-center min-w-24 bg-[#5ecde1] hover:shadow-lg  group-hover:bg-[#ff3b1d] group-hover:shadow-lg group-hover:cursor-pointer">
                    4</p>
                <div class="">
                    <h2 class="text-2xl font-black text-gray-900 dark:text-gray-100  group-hover:text-[#ff3b1d] group-hover:drop-shadow-[0_35px_35px_rgba(0,0,0,0.25)] group-hover:cursor-pointer">Tenacity</h2>

                    <p class="md:w-4/5 text-gray-900 dark:text-gray-100">I tackle challenges head-on with a relentless
                        drive to achieve excellence, no matter the obstacles.</p>
                </div>
            </div>
            <div class="flex flex-row items-center justify-center space-x-4 group">
                <p
                    class="md:text-6xl rounded-full min-h-24 place-content-center p-2 text-center min-w-24 bg-[#5ecde1] hover:shadow-lg  group-hover:bg-[#ff3b1d] group-hover:shadow-lg group-hover:cursor-pointer">
                    5</p>
                <div class="">
                    <h2 class="text-2xl font-black text-gray-900 dark:text-gray-100  group-hover:text-[#ff3b1d] group-hover:drop-shadow-[0_35px_35px_rgba(0,0,0,0.25)] group-hover:cursor-pointer">True Partnership</h2>

                    <p class="md:w-4/5 text-gray-900 dark:text-gray-100">Together, we'll forge a dynamic alliance,
                        committed to realizing your goals and fostering mutual success.</p>
                </div>
            </div>

        </div>

    </section>


    <style>
        @keyframes fade-in-bottom {
            from {
                opacity: 0;
                transform: translateY(200px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-in-bottom {
            animation: fade-in-bottom 0.5s ease-out forwards;
        }

        @keyframes blurIn {
            from {
                filter: blur(20px);
                opacity: 0;
            }
        }

        .blurIn {
            animation: blurIn 1s ease-out forwards;
        }

        .hoverCircle:hover+div .whyHead {
            color: #ff3b1d;
            cursor: pointer;
            filter: drop-shadow(0 0 0.75rem #ff3b1d);
        }

        .hoverCircle:hover {
            cursor: pointer;
            background-color: #ff3b1d
        }

        .whyHead:hover+div .hoverCircle {
            color: #ff3b1d;
            cursor: pointer;
            filter: drop-shadow(0 0 0.75rem #ff3b1d);
        }

        .whyHead:hover {
            color: #ff3b1d;
            cursor: pointer;
            filter: drop-shadow(0 0 0.75rem #ff3b1d);
        }
    </style>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const h2 = document.getElementById("animated-heading");
            if (!h2) return;
            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        h2.classList.add("blurIn");
                        observer.unobserve(h2);
                    }
                });
            }, {
                threshold: 0.5
            });
            observer.observe(h2);
        });
    </script>
</x-app-layout>
