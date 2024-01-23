<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Data pemesanan') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    {{-- <x-splade-form :for="$form" /> --}}

                    <x-splade-form action="{{ route('pemesanan.update', $pemesanan) }}" class="space-y-4" :default="$pemesanan" method="put">
                        <x-splade-select name="jenis" label='Jenis Armada'>
                            @foreach ($armadas as $armada)
                                <option value="{{ $armada->jenis }}">{{ $armada->jenis }} Kapasitas {{ $armada->kapasitas }} KG</option>
                            @endforeach
                        </x-splade-select>
                        <x-splade-input id="tanggal" type="date" name="tanggal" label='Tanggal pemesanan' autosize />
                        <x-splade-textarea id="detail" name="detail" label='Detail barang' autosize />
                        <x-splade-submit class="ml-4" label="Submit" />
                    </x-splade-form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>