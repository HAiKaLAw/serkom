<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-center text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tabel Skema') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gradient-to-r from-blue-200 to-blue-400 dark:bg-gray-900">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="flex items-center justify-end mt-4">
                <a href="{{ route('skema.create') }}" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300">
                    Add
                </a>
            </div>
            <div class="mt-4">
                <div class="bg-blue-300 dark:bg-gray-900 rounded-lg overflow-hidden">
                    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                        <thead class="bg-gradient-to-r from-blue-200 to-blue-400 dark:bg-gray-900 text-white">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                                    Kode Skema
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                                    Nama Skema
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                                    Jenis
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                                    Jumlah Unit
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                                    Aksi
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white dark:bg-gray-900 divide-y divide-gray-200 dark:divide-gray-700">
                            @foreach ($skemas as $skema)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $skema->kd_skema }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $skema->nm_skema }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $skema->jenis }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $skema->jml_unit }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <a href="{{ route('skema.edit', $skema->kd_skema) }}" class="text-blue-500 hover:underline">Edit</a>
                                        |
                                        <form action="{{ route('skema.destroy', $skema->kd_skema) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-500 hover:underline">Delete</button>
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
</x-app-layout>
