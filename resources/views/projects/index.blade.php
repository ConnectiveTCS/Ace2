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
                    <h1 class="text-3xl font-bold">Projects</h1>
                    <div class="mt-4">
                        <a href="{{ route('projects.create') }}"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Create
                            Project</a>
                    </div>
                    <div class="mt-4">


                        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                <thead
                                    class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
                                        <th scope="col" class="px-6 py-3">
                                            Client Name
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Rating
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Project Duration
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Project Case Study
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($projects as $project)
                                        <tr
                                            class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700 border-gray-200">
                                            <th scope="row"
                                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                {{ $project->clientName }}
                                            </th>
                                            <td class="px-6 py-4">
                                                {{ $project->clientRating }}
                                            </td>
                                            <td class="px-6 py-4">
                                                {{ $project->clientProjectDuration }}
                                            </td>
                                            <td class="px-6 py-4">
                                                {{ $project->clientShortStudy }}
                                            </td>
                                            <td class="px-6 py-4 text-center">
                                                <a href="{{ route('projects.edit', $project) }}"
                                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                                <form action="{{ route('projects.destroy', $project) }}" method="POST"
                                                    class="inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class="font-medium text-red-600 dark:text-red-500 hover:underline">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
