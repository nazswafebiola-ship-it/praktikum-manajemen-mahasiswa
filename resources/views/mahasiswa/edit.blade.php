<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Mahasiswa') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST" class="space-y-4">
                    @csrf
                    @method('PUT')
                    <div>
                        <label class="block font-medium text-sm text-gray-700">NIM</label>
                        <input type="text" name="nim" value="{{ $mahasiswa->nim }}" class="w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div>
                        <label class="block font-medium text-sm text-gray-700">Nama</label>
                        <input type="text" name="nama" value="{{ $mahasiswa->nama }}" class="w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div>
                        <label class="block font-medium text-sm text-gray-700">Program Studi</label>
                        <input type="text" name="prodi" value="{{ $mahasiswa->prodi }}" class="w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div>
                        <label class="block font-medium text-sm text-gray-700">Email</label>
                        <input type="email" name="email" value="{{ $mahasiswa->email }}" class="w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div>
                        <label class="block font-medium text-sm text-gray-700">Angkatan</label>
                        <input type="number" name="angkatan" value="{{ $mahasiswa->angkatan }}" class="w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded">Update Data</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>