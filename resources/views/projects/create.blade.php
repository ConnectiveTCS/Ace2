<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @if ($errors->any())
                        <div class="mb-4">
                            <ul class="list-disc list-inside text-red-500">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('projects.store') }}" method="POST" class="max-w-full mx-auto"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="mb-5">
                            <label for="clientImage"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Client
                                Image</label>
                            <input type="file" id="clientImage" name="clientImage"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                        </div>
                        <div class="mb-5">
                            <label for="clientProfilePicture"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Client Profile
                                Picture</label>
                            <input type="file" id="clientProfilePicture" name="clientProfilePicture"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                        </div>
                        <div class="mb-5">
                            <label for="clientName"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Client Name</label>
                            <input type="text" id="clientName" name="clientName"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="clientName" />
                        </div>
                        <div class="mb-5">
                            <label for="clientBusinessName"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Client Business
                                Name</label>
                            <input type="text" id="clientBusinessName" name="clientBusinessName"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="clientBusinessName" />
                        </div>
                        <div class="mb-5">
                            <label for="clientProjectCategory"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Client Project
                                Category</label>

                            <div>
                                <input type="checkbox" id="clientProjectCategory1" name="clientProjectCategory[]"
                                    value="Web Development">
                                <label for="clientProjectCategory1">Web Development</label><br>
                                <input type="checkbox" id="clientProjectCategory2" name="clientProjectCategory[]"
                                    value="Mobile Development">
                                <label for="clientProjectCategory2">Mobile Development</label><br>
                                <input type="checkbox" id="clientProjectCategory3" name="clientProjectCategory[]"
                                    value="Desktop Development">
                                <label for="clientProjectCategory3">Desktop Development</label><br>
                                <input type="checkbox" id="clientProjectCategory4" name="clientProjectCategory[]"
                                    value="Game Development">
                                <label for="clientProjectCategory4">Game Development</label><br>
                                <input type="checkbox" id="clientProjectCategory5" name="clientProjectCategory[]"
                                    value="AI Development">
                                <label for="clientProjectCategory5">AI Development</label><br>
                                <input type="checkbox" id="clientProjectCategory6" name="clientProjectCategory[]"
                                    value="Machine Learning Development">
                                <label for="clientProjectCategory6">Machine Learning Development</label><br>
                                <input type="checkbox" id="clientProjectCategory7" name="clientProjectCategory[]"
                                    value="Data Science Development">
                                <label for="clientProjectCategory7">Data Science Development</label><br>
                                <input type="checkbox" id="clientProjectCategory8" name="clientProjectCategory[]"
                                    value="Other Development">
                                <label for="clientProjectCategory8">Other Development</label><br>

                            </div>
                        </div>
                        <div class="mb-5">
                            <label for="clientProjectName"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Client Full
                                Brief</label>
                            <textarea name="clientProjectName" id="clientProjectName" cols="30" rows="10"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
                        </div>
                        <div class="mb-5">
                            <label for="clientShortStudy"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Client Short
                                Study</label>
                            <textarea name="clientShortStudy" id="clientShortStudy" cols="30" rows="10"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
                        </div>
                        <div class="mb-5">
                            <label for="clientProjectDuration"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">client Project
                                Duration</label>
                            <input type="text" id="clientProjectDuration" name="clientProjectDuration"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="clientProjectDuration" />
                        </div>
                        <div class="mb-5">
                            <label for="clientReviewProject"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Client
                                Review</label>
                            <input type="text" id="clientReviewProject" name="clientReviewProject"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Client Review" />
                        </div>
                        <button type="submit"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
