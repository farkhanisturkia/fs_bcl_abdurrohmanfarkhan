<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Data users') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    {{-- <Link href="/armada/create" class="px-4 py-2 bg-green-500 rounded text-white hover:bg-green-300 hover:text-black">New</Link>
                    <x-splade-table :for="$armadas" pagination-scroll="preserve">
                        <x-splade-cell actions as="$armadas">
                            <Link href="{{ route('armada.edit', $armadas) }}" class="px-3 py-2 bg-yellow-500 rounded text-white hover:bg-yellow-300 hover:text-black"> Ubah </Link>
                            <x-splade-form 
                                action="{{ route('armada.destroy', $armadas) }}"
                                method="delete"
                                confirm="Hapus Data Armada"
                                confirm-text="Apa Kamu Yakin Untuk Menghapus Data?"
                                confirm-button="Ya"
                                cancel-button="Tidak">
                                    <x-splade-button class="ms-2 bg-red-500 rounded text-white hover:bg-red-300 hover:text-black"> Hapus </x-splade-button>
                            </x-splade-form>
                        </x-splade-cell>
                    </x-splade-table> --}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
