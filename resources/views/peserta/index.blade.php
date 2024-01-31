<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tabel Peserta') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gradient-to-r from-blue-200 to-blue-400 dark:bg-gray-800">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <table class="min-w-full bg-white dark:bg-gray-700 divide-y divide-gray-300 dark:divide-gray-600 rounded-lg overflow-hidden">
                        <thead class="bg-blue-200 dark:bg-gray-800 text-white">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                                    ID Peserta
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                                    Kode Skema
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                                    Nama Peserta
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                                    Jenis Kelamin
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                                    Alamat
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                                    No. HP
                                </th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-300 dark:divide-gray-600">
                            @foreach ($data as $item)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $item->id_peserta }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $item->kd_skema }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $item->nm_peserta }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $item->jekel }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $item->alamat }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $item->no_hp }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
