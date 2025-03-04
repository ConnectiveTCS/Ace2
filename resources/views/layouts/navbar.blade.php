<nav class="border-gray-200 bg-gray-50 dark:bg-gray-800 dark:border-gray-700 sticky top-0 z-50">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{ asset('assets/Logo.webp') }}" class="h-10" alt="Ace Web Design Logo" />
        </a>
        <button data-collapse-toggle="navbar-hamburger" type="button"
            class=" relative inline-flex items-center justify-center p-2 w-10 h-10 text-sm text-gray-500 rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
            aria-controls="navbar-hamburger" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 1h15M1 7h15M1 13h15" />
            </svg>
        </button>
        <div class="hidden w-full" id="navbar-hamburger">
            <ul class="flex flex-col font-medium mt-4 rounded-lg bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
                <li>
                    <a href="#" class="block py-2 px-3 text-white bg-blue-700 rounded-sm dark:bg-blue-600"
                        aria-current="page">Home</a>
                </li>
                <li>
                    <a href="/#services"
                        class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Services</a>
                </li>
                <li>
                    <a href="#"
                        class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white">Projects</a>
                </li>
                <li>
                    <a href="#"
                        class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Contact</a>
                </li>
                @auth
                <li>
                    <a href="{{ route('projects.index') }}"
                        class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Admin: Projects</a>
                </li>
                @endauth
            </ul>

        </div>
    </div>
</nav>

<!-- Theme toggle switch -->
<div class="fixed bottom-4 left-4 z-50 opacity-30 hover:opacity-100 transition-opacity duration-300">
    <label for="theme-toggle" class="flex items-center cursor-pointer">
        <div class="relative">
            <input type="checkbox" id="theme-toggle" class="sr-only" onchange="toggleTheme(this)">
            <div class="block bg-gray-600 w-14 h-8 rounded-full"></div>
            <div class="dot absolute left-1 top-1 bg-white w-6 h-6 rounded-full transition-transform duration-300">
            </div>
        </div>

        <div id="theme-text" class="ml-3 text-gray-700 dark:text-gray-200 font-medium flex flex-col justify-center">
            <span>Light Mode</span>
        </div>
    </label>
</div>

<script>
    function toggleTheme(element) {
        const dot = element.parentElement.querySelector('.dot');
        const themeText = document.getElementById('theme-text');

        if (element.checked) {
            document.documentElement.classList.add('dark');
            dot.classList.add('translate-x-full');
            themeText.textContent = 'Dark Mode';
        } else {
            document.documentElement.classList.remove('dark');
            dot.classList.remove('translate-x-full');
            themeText.textContent = 'Light Mode';
        }
    }
</script>
