<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Daftar Mahasiswa') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">

                @if(session('success'))
                    <div class="mb-4 text-green-600 font-bold">
                        {{ session('success') }}
                    </div>
                @endif

                @if(Auth::user()->role === 'admin')
                    <a href="{{ route('mahasiswa.create') }}" class="px-4 py-2 bg-blue-600 text-white rounded mb-4 inline-block">Tambah Mahasiswa</a>
                @endif

                <table class="w-full text-left border-collapse border border-gray-200 mt-4">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="border p-2">NIM</th>
                            <th class="border p-2">Nama</th>
                            <th class="border p-2">Prodi</th>
                            <th class="border p-2">Email</th>
                            <th class="border p-2">Angkatan</th>
                            @if(Auth::user()->role === 'admin')
                                <th class="border p-2">Aksi</th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($mahasiswa as $mhs)
                            <tr>
                                <td class="border p-2">{{ $mhs->nim }}</td>
                                <td class="border p-2">{{ $mhs->nama }}</td>
                                <td class="border p-2">{{ $mhs->prodi }}</td>
                                <td class="border p-2">{{ $mhs->email }}</td>
                                <td class="border p-2">{{ $mhs->angkatan }}</td>
                                @if(Auth::user()->role === 'admin')
                                    <td class="border p-2 flex gap-2">
                                        <a href="{{ route('mahasiswa.edit', $mhs->id) }}" class="text-blue-600">Edit</a>
                                        <form action="{{ route('mahasiswa.destroy', $mhs->id) }}" method="POST" onsubmit="return confirm('Yakin hapus?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-600">Hapus</button>
                                        </form>
                                    </td>
                                @endif
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="border p-2 text-center text-gray-500">Belum ada data mahasiswa.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</x-app-layout>