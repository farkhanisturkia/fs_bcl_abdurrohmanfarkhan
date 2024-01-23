<?php

namespace App\Http\Controllers;

use App\Models\Armada;
use App\Models\Pemesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use ProtoneMedia\Splade\SpladeTable;
use ProtoneMedia\Splade\Facades\Toast;

class PemesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::user()->role == 'kantor') {
            return view('pemesanan.index', [
                'pemesanan' => SpladeTable::for(Pemesanan::class)
                    ->column('pemesan')
                    ->column('jenis')
                    ->column('tanggal')
                    ->column('detail')
                    ->paginate(15),
            ]);
        }
        if (Auth::user()->role == 'client') {
            return view('pemesanan.index', [
                'pemesanan' => SpladeTable::for(Pemesanan::class)
                    ->column('jenis')
                    ->column('tanggal')
                    ->column('detail')
                    ->column('actions')
                    ->paginate(15),
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $armadas = Armada::where('ketersediaan','Tersedia')->get();
        $data = [
            'armadas' => $armadas
        ];
        return view('pemesanan.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());

        Pemesanan::create([
            'pemesan'   =>Auth::user()->name,
            'jenis'     =>$request->jenis,
            'tanggal'   =>$request->tanggal,
            'detail'    =>$request->detail
        ]);

        $armada = Armada::where('jenis',$request->jenis)->first();
        $armada->update([
            'ketersediaan' => 'Tidak tersedia'
        ]);

        Toast::title('Data Pemesanan Tersimpan')->autoDismiss(3);

        return to_route('pemesanan.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pemesanan $pemesanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pemesanan $pemesanan)
    {
        $armada = Armada::where('jenis',$pemesanan->jenis)->first();
        $armada->update([
            'ketersediaan' => 'Tersedia'
        ]);

        $armadas = Armada::where('ketersediaan', 'Tersedia')->get();
        return view('pemesanan.edit',[
            'pemesanan'    => $pemesanan,
            'armadas'      => $armadas
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pemesanan $pemesanan)
    {
        $pemesanan->update([
            'pemesan'   =>Auth::user()->name,
            'jenis'     =>$request->jenis,
            'tanggal'   =>$request->tanggal,
            'detail'    =>$request->detail
        ]);

        $armada = Armada::where('jenis',$request->jenis)->first();
        $armada->update([
            'ketersediaan' => 'Tidak tersedia'
        ]);

        Toast::title('Data Pemesanan Diubah')->autoDismiss(3);

        return to_route('pemesanan.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pemesanan $pemesanan)
    {
        $armada = Armada::where('jenis',$pemesanan->jenis)->first();
        $armada->update([
            'ketersediaan' => 'Tersedia'
        ]);
        
        $pemesanan->delete();

        Toast::title('Data Pemesanan Dihapus')->autoDismiss(3);

        return to_route('pemesanan.index');
    }
}
