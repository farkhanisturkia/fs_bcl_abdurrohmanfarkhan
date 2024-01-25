<?php

namespace App\Tables;

use App\Models\Pengiriman;
use GuzzleHttp\Psr7\Query;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\AbstractTable;
use ProtoneMedia\Splade\SpladeTable;

class Pengirimen extends AbstractTable
{
    /**
     * Create a new instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the user is authorized to perform bulk actions and exports.
     *
     * @return bool
     */
    public function authorize(Request $request)
    {
        return true;
    }

    /**
     * The resource or query builder.
     *
     * @return mixed
     */
    public function for()
    {
        return Pengiriman::query();
    }

    /**
     * Configure the given SpladeTable.
     *
     * @param \ProtoneMedia\Splade\SpladeTable $table
     * @return void
     */
    public function configure(SpladeTable $table)
    {
        $table
            // ->withGlobalSearch(columns: ['id'])
            ->column('id', sortable: true)
            ->column('pengirim')
            ->column('nomor')
            ->column('tanggal')
            ->column('asal')
            ->column('tujuan')
            ->column('status')
            ->column('detail')
            ->searchInput('nomor')
            ->searchInput('tujuan')
            ->export(
                label: 'CSV export',
                filename: 'Pengiriman.csv',
            )
            ->selectFilter('status',[
                'Tertunda' => 'Tertunda',
                'Dalam perjalanan' => 'Dalam perjalanan',
                'Telah tiba'  => 'Telah tiba'
            ], 
            noFilterOption: true,
            noFilterOptionLabel: 'Semua')
            ->paginate(15);

    }
}
