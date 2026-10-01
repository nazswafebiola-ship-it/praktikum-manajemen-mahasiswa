<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Mahasiswa') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <form action="{{ route('mahasiswa.store') }}" method="POST" class="space-y-4">
                    @csrf
                    <div>
                        <label class="block font-medium text-sm text-gray-700">NIM</label>
                        <input type="text" name="nim" class="w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div>
                        <label class="block font-medium text-sm text-gray-700">Nama</label>
                        <input type="text" name="nama" class="w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div>
                        <label class="block font-medium text-sm text-gray-700">Program Studi</label>
                        <input type="text" name="prodi" class="w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div>
                        <label class="block font-medium text-sm text-gray-700">Email</label>
                        <input type="email" name="email" class="w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div>
                        <label class="block font-medium text-sm text-gray-700">Angkatan</label>
                        <input type="number" name="angkatan" class="w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded">Simpan Data</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>