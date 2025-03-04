<x-app-layout>
    <x-slot name="title">
        {{ __('Home') }}
    </x-slot>
    <!-- Hero Section -->
    <section id="hero" class="bg-gray-100 dark:bg-gray-900 flex items-center justify-center md:p-3 z-50">
        <div class="overflow-hidden bg-gray-100 dark:bg-gray-900 py-24 sm:py-32 rounded-md md:w-full shadow-lg">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div
                    class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2">
                    <div class="lg:pt-4 lg:pr-8">
                        <div class="lg:max-w-lg">
                            <h2 class="text-base/7 font-semibold text-[#ff3b1d]">See My Work</h2>
                            <p class="mt-2 text-4xl font-semibold tracking-tight text-pretty text-gray-900 sm:text-5xl">
                                Where Strategy Meets Creativity</p>
                            <p class="mt-6 text-lg/8 text-gray-600">Every project is a case study in precision design
                                and innovative solutions. Explore a curated selection of websites and digital
                                experiences crafted to elevate brands and drive growth. Whether you're a small business
                                or a startup, discover how thoughtful design and technical expertise can transform your
                                online presence.</p>
                            <dl class="mt-10 max-w-xl space-y-8 text-base/7 text-gray-600 lg:max-w-none">
                                <div class="relative pl-9">
                                    <dt class="inline font-semibold text-gray-900">
                                        <svg class="absolute top-1 left-1 size-5 text-indigo-600" viewBox="0 0 20 20"
                                            fill="currentColor" aria-hidden="true" data-slot="icon">
                                            <path fill-rule="evenodd"
                                                d="M5.5 17a4.5 4.5 0 0 1-1.44-8.765 4.5 4.5 0 0 1 8.302-3.046 3.5 3.5 0 0 1 4.504 4.272A4 4 0 0 1 15 17H5.5Zm3.75-2.75a.75.75 0 0 0 1.5 0V9.66l1.95 2.1a.75.75 0 1 0 1.1-1.02l-3.25-3.5a.75.75 0 0 0-1.1 0l-3.25 3.5a.75.75 0 1 0 1.1 1.02l1.95-2.1v4.59Z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        Tailored Solutions:
                                    </dt>
                                    <dd class="inline">Each project is uniquely crafted to meet the specific needs and
                                        goals of the client.
                                    </dd>
                                </div>
                                <div class="relative pl-9">
                                    <dt class="inline font-semibold text-gray-900">
                                        <svg class="absolute top-1 left-1 size-5 text-indigo-600" viewBox="0 0 20 20"
                                            fill="currentColor" aria-hidden="true" data-slot="icon">
                                            <path fill-rule="evenodd"
                                                d="M10 1a4.5 4.5 0 0 0-4.5 4.5V9H5a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2v-6a2 2 0 0 0-2-2h-.5V5.5A4.5 4.5 0 0 0 10 1Zm3 8V5.5a3 3 0 1 0-6 0V9h6Z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        Strategic Execution:
                                    </dt>
                                    <dd class="inline">Every design is underpinned by a clear strategy that focuses on
                                        enhancing user engagement and driving conversions.</dd>
                                </div>
                                <div class="relative pl-9">
                                    <dt class="inline font-semibold text-gray-900">
                                        <svg class="absolute top-1 left-1 size-5 text-indigo-600" viewBox="0 0 20 20"
                                            fill="currentColor" aria-hidden="true" data-slot="icon">
                                            <path
                                                d="M4.632 3.533A2 2 0 0 1 6.577 2h6.846a2 2 0 0 1 1.945 1.533l1.976 8.234A3.489 3.489 0 0 0 16 11.5H4c-.476 0-.93.095-1.344.267l1.976-8.234Z" />
                                            <path fill-rule="evenodd"
                                                d="M4 13a2 2 0 1 0 0 4h12a2 2 0 1 0 0-4H4Zm11.24 2a.75.75 0 0 1 .75-.75H16a.75.75 0 0 1 .75.75v.01a.75.75 0 0 1-.75.75h-.01a.75.75 0 0 1-.75-.75V15Zm-2.25-.75a.75.75 0 0 0-.75.75v.01c0 .414.336.75.75.75H13a.75.75 0 0 0 .75-.75V15a.75.75 0 0 0-.75-.75h-.01Z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        Innovative Approach:
                                    </dt>
                                    <dd class="inline">The portfolio showcases creative problem-solving and
                                        forward-thinking design methodologies.</dd>
                                </div>

                            </dl>
                        </div>
                    </div>
                    <img src="{{ asset('assets/ND1.webp') }}" alt="Product screenshot" alt="Product screenshot"
                        class="w-[48rem] max-w-none rounded-xl ring-1 shadow-xl ring-gray-400/10 sm:w-[57rem] md:-ml-4 lg:-ml-0"
                        width="2432" height="1442">
                </div>
            </div>
        </div>
    </section>
    <!-- Projects Section -->
    <section class=" bg-gray-100 dark:bg-gray-900 z-10 flex flex-col">
        <div class="bg-gray-100 dark:bg-gray-900 py-6 sm:py-8 lg:py-12">
            <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
                <div class="mb-4 flex items-center justify-between gap-8 sm:mb-8 md:mb-12">
                    <div class="flex items-center gap-12">
                        <h2 class="text-2xl font-bold text-gray-800 lg:text-3xl dark:text-white">Gallery</h2>

                        <p class="hidden max-w-screen-sm text-gray-500 dark:text-gray-300 md:block">
                            This is a section of some simple filler text,
                            also known as placeholder text. It shares some characteristics of a real written text.
                        </p>
                    </div>

                    <a href="#"
                        class="inline-block rounded-lg border bg-white dark:bg-gray-700 dark:border-none px-4 py-2 text-center text-sm font-semibold text-gray-500 dark:text-gray-200 outline-none ring-indigo-300 transition duration-100 hover:bg-gray-100 focus-visible:ring active:bg-gray-200 md:px-8 md:py-3 md:text-base">
                        More
                    </a>
                </div>

                <div class="grid grid-cols-2 gap-4 sm:grid-cols-3 md:gap-6 xl:gap-8">
                    <!-- image - start -->
                    <a href="#"
                        class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:h-80">
                        <img src="https://images.unsplash.com/photo-1593508512255-86ab42a8e620?auto=format&q=75&fit=crop&w=600"
                            loading="lazy" alt="Photo by Minh Pham"
                            class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                        <div
                            class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
                        </div>

                        <span class="relative ml-4 mb-3 inline-block text-sm text-white md:ml-5 md:text-lg">VR</span>
                    </a>
                    <!-- image - end -->

                    <!-- image - start -->
                    <a href="#"
                        class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:col-span-2 md:h-80">
                        <img src="https://images.unsplash.com/photo-1542759564-7ccbb6ac450a?auto=format&q=75&fit=crop&w=1000"
                            loading="lazy" alt="Photo by Magicle"
                            class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                        <div
                            class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
                        </div>

                        <span class="relative ml-4 mb-3 inline-block text-sm text-white md:ml-5 md:text-lg">Tech</span>
                    </a>
                    <!-- image - end -->

                    <!-- image - start -->
                    <a href="#"
                        class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:col-span-2 md:h-80">
                        <img src="https://images.unsplash.com/photo-1610465299996-30f240ac2b1c?auto=format&q=75&fit=crop&w=1000"
                            loading="lazy" alt="Photo by Martin Sanchez"
                            class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                        <div
                            class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
                        </div>

                        <span class="relative ml-4 mb-3 inline-block text-sm text-white md:ml-5 md:text-lg">Dev</span>
                    </a>
                    <!-- image - end -->

                    <!-- image - start -->
                    <a href="#"
                        class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:h-80">
                        <img src="https://images.unsplash.com/photo-1550745165-9bc0b252726f?auto=format&q=75&fit=crop&w=600"
                            loading="lazy" alt="Photo by Lorenzo Herrera"
                            class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                        <div
                            class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
                        </div>

                        <span class="relative ml-4 mb-3 inline-block text-sm text-white md:ml-5 md:text-lg">Retro</span>
                    </a>
                    <!-- image - end -->
                </div>
            </div>
        </div>
    </section>
    {{-- Why Work With Us Section --}}


    </section>

    {{-- Scripts & Styles --}}

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

        // Parallax scroll effect for all parallax divs in the project section
        document.addEventListener("scroll", function() {
            const parallaxDivs = document.querySelectorAll(".parallax-div");
            parallaxDivs.forEach(div => {
                const offset = window.scrollY * -0.2;
                div.style.backgroundPosition = `center ${offset}px`;
            });
        });
    </script>
</x-app-layout>
