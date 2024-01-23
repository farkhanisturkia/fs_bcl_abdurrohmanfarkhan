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

                    <x-splade-form action="{{ route('pengiriman.update', $pengiriman) }}" class="space-y-4" :default="$pengiriman" method="put">
                        {{-- <x-splade-input id="pengirim" type="text" name="pengirim" label="Pengirim" /> --}}
                        <x-splade-input id="nomor" type="text" name="nomor" label="Nomor Pengiriman" required />
                        <x-splade-input id="tanggal" type="date" name="tanggal" label="Tanggal Pengiriman" required />
                        <x-splade-input id="asal" type="text" name="asal" label="Asal Pengiriman" required />
                        <x-splade-input id="tujuan" type="text" name="tujuan" label="Tujuan Pengiriman" required />
                        <x-splade-select name="status" label='Status pengiriman'>
                            <option value="Tertunda">Tertunda</option>
                            <option value="Dalam perjalanan">Dalam perjalanan</option>
                            <option value="Telah tiba">Telah tiba</option>
                        </x-splade-select>
                        <x-splade-textarea id="detail" name="detail" label='Detail pengiriman' autosize />
                        <x-splade-submit class="ml-4" label="Submit" />
                    </x-splade-form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
