<x-app-layout>
    <x-slot name="title">
        {{ __('Home') }}
    </x-slot>
    <section id="hero" class="bg-gray-100 dark:bg-gray-900 md:h-[90vh] flex items-center justify-center md:p-3">
        <div
            class="mx-auto py-16 px-4 sm:px-6 lg:px-8 rounded-lg shadow-lg bg-white dark:bg-gray-800 md:w-full md:h-full">
            <div
                class=" my-auto text-center text-gray-700 h-full dark:text-gray-300 flex flex-col items-center justify-center space-y-4">
                <h1 class="text-4xl font-extrabold text-gray-900 dark:text-gray-100 sm:text-5xl md:text-6xl">
                    Your Vision, Our Design
                </h1>
                <p class="mt-4 text-lg leading-6 text-gray-700 dark:text-gray-300">
                    We merge creativity with technical excellence to <br>build websites that drive business growth.
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

    {{-- Projects --}}
   <section class="mt-16 bg-gray-100 dark:bg-gray-900 md:h-[100vh] md:p-3 md:px-32">
    <h2 class="text-3xl font-extrabold text-gray-900 dark:text-gray-100 text-center">Our Projects</h2>
    @include('components.project-card')
        
   </section>

    <section id="about" class="bg-gray-100 dark:bg-gray-900 md:h-[100vh] flex items-center justify-center md:p-3">
        <div class="mx-auto py-16 px-4 sm:px-6 lg:px-8 md:w-full md:h-full">
            <div
                class=" my-auto text-center text-gray-700 h-full dark:text-gray-300 grid grid-cols-1 md:grid-cols-3 gap-4 items-center">
                <h2
                    class="text-4xl font-extrabold text-gray-900 dark:text-gray-100 sm:text-5xl md:text-3xl col-span-1 col-start-2">
                    We believe in designing websites that are both beautiful and functional. My approach combines
                    strategic
                    thinking with a keen eye for detail, ensuring that every project tells your unique story<span
                        class="text-[#ff3b1d]">.</span>
                </h2>

            </div>
        </div>
    </section>

    <section id="services"
        class="bg-gray-100 dark:bg-gray-900 md:max-h-[90vh] flex items-center justify-center md:p-3">
        <div
            class="mx-auto py-16 px-4 sm:px-6 lg:px-8 rounded-lg shadow-lg bg-white dark:bg-gray-800 md:w-full md:h-full">
            <h2 class="text-3xl font-extrabold text-gray-900 dark:text-gray-100 text-center">Our Services</h2>
            <p class="w-[50%] text-center place-self-center text-gray-700 dark:text-gray-300">From custom web design and
                responsive development to seamless user experience enhancements, we offer a
                comprehensive suite of services tailored for startups and small businesses.</p>
            <div class="mt-12 grid
                grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="card-3d bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6 overlap">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-gray-100">Web Design</h3>
                    <p class="mt-4 text-gray-700 dark:text-gray-300">We design websites that are both beautiful and
                        functional. Our approach combines strategic thinking with a keen eye for detail, ensuring that
                        every project tells your unique story.</p>
                </div>
                <div class="card-3d bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-gray-100">Web Development</h3>
                    <p class="mt-4 text-gray-700 dark:text-gray-300">We build websites that are fast, secure, and easy
                        to manage. Our development process is focused on creating a seamless user experience that drives
                        business growth.</p>
                </div>
                <div class="card-3d bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-gray-100">SaaS Development</h3>
                    <p class="mt-4 text-gray-700 dark:text-gray-300">
                        We develop custom software solutions that help businesses streamline operations, improve
                        efficiency, and drive growth. Our SaaS development services are designed to meet the unique
                        needs
                        of your business.
                    </p>
                </div>
                <div class="card-3d bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-gray-100">SEO</h3>
                    <p class="mt-4 text-gray-700 dark:text-gray-300">We optimize websites for search engines to help you
                        reach your target audience. Our SEO services are designed to increase visibility, drive traffic,
                        and generate leads for your business.</p>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
