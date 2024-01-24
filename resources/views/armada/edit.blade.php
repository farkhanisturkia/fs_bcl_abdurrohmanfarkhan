<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('New Data Pengiriman') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    {{-- <x-splade-form :for="$form" /> --}}

                    <x-splade-form action="{{ route('armada.update', $armadas) }}" class="space-y-4" :default="$armadas" method="put">
                        <x-splade-input id="nomor" type="text" name="nomor" label="Nomor Armada" required />
                        <x-splade-select name="jenis" label="Jenis Kendaraan Armada" required>
                            <option value="Darat">Darat</option>
                            <option value="Udara">Udara</option>
                            <option value="Laut">Laut</option>
                        </x-splade-select>
                        <x-splade-select name="ketersediaan" label='Ketersediaan Armada' required>
                            <option value="Tersedia">Tersedia</option>
                            <option value="Tidak Tersedia">Tidak Tersedia</option>
                        </x-splade-select>
                        <x-splade-input id="kapasitas" name="kapasitas" label='Kapasitas Armada' required />
                        <x-splade-submit class="ml-4" label="Submit" />
                    </x-splade-form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
