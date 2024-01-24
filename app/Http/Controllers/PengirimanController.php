<?php

namespace App\Http\Controllers;

use App\Models\Pengiriman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use ProtoneMedia\Splade\Facades\Toast;
use ProtoneMedia\Splade\SpladeForm;
use ProtoneMedia\Splade\SpladeTable;
use ProtoneMedia\Splade\FormBuilder\Date;
use ProtoneMedia\Splade\FormBuilder\Input;
use ProtoneMedia\Splade\FormBuilder\Submit;
use ProtoneMedia\Splade\FormBuilder\Password;

class PengirimanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::user()->role == 'kantor') {
            return view('pengiriman.index', [
                'pengirimen' => SpladeTable::for(Pengiriman::class)
                    ->column('pengirim')
                    ->column('nomor')
                    ->column('tanggal')
                    ->column('asal')
                    ->column('tujuan')
                    ->column('status')
                    ->column('detail')
                    ->searchInput('nomor')
                    ->searchInput('tujuan')
                    ->paginate(15),
            ]);
        }
        if (Auth::user()->role == 'lapangan') {
            return view('pengiriman.index', [
                'pengirimen' => SpladeTable::for(Pengiriman::class)
                    ->column('nomor')
                    ->column('tanggal')
                    ->column('asal')
                    ->column('tujuan')
                    ->column('status')
                    ->column('detail')
                    ->column('actions')
                    ->searchInput('nomor')
                    ->searchInput('tujuan')
                    ->paginate(15),
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $form = SpladeForm::make()
        //     ->id('create-pengiriman-form')
        //     ->class('space-y-4')
        //     ->method('POST')
        //     ->action(route('pengiriman.store'))
        //     ->fields([
        //         Input::make('pengirim')->hidden(),
        //         Input::make('nomor')->label('Nomor Pengiriman'),
        //         Date::make('tanggal')->label("Tanggal"),
        //         Input::make('asal')->label("Asal"),
        //         Input::make('tujuan')->label("Tujuan"),
        //         Input::make('status')->label("Status"),
        //         Submit::make()->label('Save'),
        //     ]);
 
        // return view('pengiriman.create', [
        //     'form' => $form,
        // ]);
        return view('pengiriman.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        Pengiriman::create([
            'pengirim'  =>Auth::user()->name,
            'nomor'     =>$request->nomor,
            'tanggal'   =>$request->tanggal,
            'asal'      =>$request->asal,
            'tujuan'    =>$request->tujuan,
            'status'    =>$request->status,
            'detail'    =>$request->detail
        ]);

        // return redirect()->route('users.index');

        Toast::title('Data Pengiriman Tersimpan')->autoDismiss(3);

        return to_route('pengiriman.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pengiriman $pengiriman)
    {
        return view('pengiriman.edit',[
            'pengiriman'    => $pengiriman
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pengiriman $pengiriman)
    {
        $pengiriman->update([
            'pengirim'  =>Auth::user()->name,
            'nomor'     =>$request->nomor,
            'tanggal'   =>$request->tanggal,
            'asal'      =>$request->asal,
            'tujuan'    =>$request->tujuan,
            'status'    =>$request->status,
            'detail'    =>$request->detail
        ]);

        Toast::title('Data Pengiriman Diubah')->autoDismiss(3);

        return to_route('pengiriman.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pengiriman $pengiriman)
    {
        // dd($id);

        $pengiriman->delete();

        Toast::title('Data Pengiriman Dihapus')->autoDismiss(3);

        return to_route('pengiriman.index');
    }
}
