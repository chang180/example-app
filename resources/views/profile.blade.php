<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    {{ __('Welcome back,') }} {{ Auth::user()->name }}
                </div>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-2">
                <div class="overflow-x-auto relative">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="py-3 px-6">
                                    {{ __('avatar') }}
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    {{ __('Name') }}
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    {{ __('eMail') }}
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    {{ __('ProfileName') }}
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    {{ __('Website') }}
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    {{ __('Phone') }}
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    {{ __('Address') }}
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <td class="py-4 px-6">
                                    <img src="{{ $user->profile->avatar }}" alt="">
                                </td>
                                <td class="py-4 px-6">
                                    {{ $user->name }}
                                </td>
                                <td class="py-4 px-6">
                                    {{ $user->email }}
                                </td>
                                <td class="py-4 px-6">
                                    {{ $user->profile->name }}
                                </td>
                                <td class="py-4 px-6 text-white">
                                    {{ $user->profile->website }}
                                </td>
                                <td class="py-4 px-6">
                                    {{ $user->profile->phone }}
                                </td>
                                <td class="py-4 px-6">
                                    {{ $user->profile->address }}
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
