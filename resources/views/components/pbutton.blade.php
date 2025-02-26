<a href="{{ $href ?? '#' }}"
    class=" px-4 py-2 {{ $lightbuttonText ?? 'text-gray-700' }} {{ $lightButtonColor ?? 'bg-black' }} {{ $darkButtonText ?? 'dark:text-gray-300' }} {{ $darkButtonColor ?? 'dark:bg-[#ff3b1d]' }} hover:bg-white hover:text-black rounded-full transition-[200ms] bg-white">
    {{$buttonText ?? 'Explore Projects'}}
    </a>
