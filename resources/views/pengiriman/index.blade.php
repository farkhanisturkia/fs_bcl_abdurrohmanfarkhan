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
                    <Link href="/pengiriman/create" class="px-4 py-2 bg-green-500 rounded text-white hover:bg-green-300 hover:text-black">Tambah Data</Link>
                    <x-splade-table :for="$pengirimen" pagination-scroll="preserve"/>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
