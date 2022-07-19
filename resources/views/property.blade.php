<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Properties') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    {{ __('Properties list for ') }} {{ $user_list->owner }}<br>
                    <a href="/profile">Back to profile list</a>
                </div>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-2">
                <div class="overflow-x-auto relative">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="py-3 px-6">
                                    {{ __('Title') }}
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    {{ __('Description') }}
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    {{ __('Address') }}
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($user_list as $item)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <td class="py-4 px-6">
                                    {{ $item->title }}
                                </td>
                                <td class="py-4 px-6">
                                    {{ $item->description }}
                                </td>
                                <td class="py-4 px-6">
                                    {{ $item->address }}
                                </td>
                            </tr> 
                                @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
