<div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-8">
    {{-- Left Column --}}
    <div class="flex flex-col items-start justify-center space-y-4">
        {{-- Project Image --}}
        <img src="{{ $project->clientImage ?? asset('assets/ND1.webp') }}"
            alt="{{ $project->clientName ?? 'Client Name' }} Photo" class="w-full h-96 object-cover rounded-lg shadow-lg">
        {{-- Review Section --}}
        <h3 class="text-xl font-bold dark:text-white text-black">Client Review</h3>
        <div class="flex flex-col items-start justify-center space-y-4 p-2 bg-gray-100 dark:bg-gray-900 rounded-lg">
            {{-- Rating --}}
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#EAC452">
                <path
                    d="m354-287 126-76 126 77-33-144 111-96-146-13-58-136-58 135-146 13 111 97-33 143ZM233-120l65-281L80-590l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Zm247-350Z" />
            </svg>
            {{-- Client Review Comment --}}
            <p class="text-sm my-2 font-thin dark:text-white text-black">
                {{ $project->clientReviewProject ?? 'My website is what I have ask for and more. If you want a practical Website and good value for your money , I highly recommend Ace Web Design.' }}
            </p>
            {{-- Client Section --}}
            <div class="flex items-center space-x-4 text-black">
                {{-- Client Profile Picture --}}
                <img src="{{ $project->clientProfilePicture ?? 'https://lh3.googleusercontent.com/a-/ALV-UjWu_m0gcx03JSImgMHzwCDXpU1p_-62hJNdJmS3GJcTJOMcsKc0=s45-c-rp-mo-br100' }}"
                    alt="{{ $project->clientName ?? 'Client Name' }} Profile Picture">
                {{-- Client Name and Business --}}
                <p class="dark:text-white text-black">{{ $project->clientName ?? 'Mandla Jezile' }} |
                    {{ $project->clientBusinessName ?? 'h' }}</p>
            </div>
        </div>
    </div>
    {{-- Right Column --}}
    <div class="border-t border-red-600 sticky top-24 self-start end gap-4 flex flex-row p-4">
        {{-- Project Details --}}
        {{-- Spacer --}}
        <div class="md:block md:min-w-[20%] dark:text-white text-black">
            {{ $project->clientProjectDuration ?? '1 Month' }}</div>
        <div class="md:w-[80%]">
            <h2 class="text-3xl dark:text-white text-black">{{ $project->clientBusinessName ?? 'Next Devlivery' }}</h2>
            <hr class="my-4 border-red-600">
            <p class="dark:text-white text-black">
                @if (is_array($project->clientShortStudy))
                    {{ implode(', ', $project->clientShortStudy) }}
                @else
                    {{ $project->clientShortStudy ?? "We designed and developed a new website for Next Delivery, a South African delivery services company. We aimed to clearly communicate their services, enhance the user experience for potential customers, and align the website with Next Delivery's brand identity" }}
                @endif
            </p>
            <span class="dark:text-white text-black text-lg">TYPE: <span class="flip-text inline-block">
                    @if (is_array($project->clientProjectCategory))
                        {{ implode(', ', $project->clientProjectCategory) }}
                    @else
                        {{ $project->clientProjectCategory ?? 'hello' }}
                    @endif
                </span></span>

        </div>

    </div>
</div>
@php
    $flipWords = is_array($project->clientProjectCategory)
        ? $project->clientProjectCategory
        : [$project->clientProjectCategory];
@endphp
<script>
    // Use the pre-defined PHP variable for flipWords
    const flipWords = @json($flipWords);

    setInterval(() => {
        document.querySelectorAll('.flip-text').forEach(element => {
            let currentText = element.textContent.trim();
            let currentIndex = flipWords.indexOf(currentText);
            if (currentIndex === -1) {
                currentIndex = 0;
            }
            const nextIndex = (currentIndex + 1) % flipWords.length;
            element.textContent = flipWords[nextIndex];
        });
    }, 2000);
</script>
