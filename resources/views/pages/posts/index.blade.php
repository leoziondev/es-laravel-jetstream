<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Posts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <table class="w-full table-auto rounded-sm">
                    @if ($posts->count())
                        <thead>
                            <tr class="text-left">
                                <th class="text-xl font-bold text-gray-700 p-4">Title</th>
                            </tr>
                        </thead>
                    @endif
                    <tbody>
                        @forelse ($posts as $post)
                            <tr class="border-t border-gray-100">
                                <td class="px-4 py-2">
                                    <h2 class="text-md text-gray-500 font-semibold">
                                        {{ $post->title }}
                                    </h2>
                                </td>
                                <td class="flex justify-end px-4 py-2 text-sm">
                                    <div class="flex items-center space-x-2">
                                        <a href="#" class="bg-gray-50 text-gray-400 transition-all hover:bg-indigo-100 hover:text-indigo-500 py-1 px-2 rounded-md shadow">
                                            <i class="fa-solid fa-eye"></i>
                                        </a>
                                        <a href="#" class="bg-gray-50 text-gray-400 transition-all hover:bg-indigo-100 hover:text-indigo-500 py-1 px-2 rounded-md shadow">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </a>
                                        <form action="#" method="POST">

                                            <button class="bg-gray-50 text-gray-400 transition-all hover:bg-red-100 hover:text-red-500 py-1 px-2 rounded-md shadow">
                                                <i class="fa-solid fa-trash-can"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr colspan="2">
                                <p class="py-8 text-gray-700 font-semibold text-sm text-center">No posts listings!</p>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
