<?php

namespace App\Http\Controllers;

use App\Models\Armada;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\SpladeForm;
use ProtoneMedia\Splade\SpladeTable;
use ProtoneMedia\Splade\Facades\Toast;
use ProtoneMedia\Splade\FormBuilder\Input;
use ProtoneMedia\Splade\FormBuilder\Submit;

class ArmadaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('armada.index', [
            'armadas' => SpladeTable::for(Armada::class)
                ->column('nomor')
                ->column('jenis')
                ->column('ketersediaan')
                ->column('kapasitas')
                ->column('actions')
                ->paginate(15),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $form = SpladeForm::make()
        //     ->id('create-armada-form')
        //     ->class('space-y-4')
        //     ->method('POST')
        //     ->action(route('armada.store'))
        //     ->fields([
        //         Input::make('nomor')->label('Nomor armada'),
        //         Input::make('jenis')->label("Jenis armada"),
        //         Input::make('ketersediaan')->label("Ketersediaan armada"),
        //         Input::make('kapasitas')->label("Kapasitas armada"),
        //         Submit::make()->label('Save'),
        //     ]);
 
        // return view('armada.create', [
        //     'form' => $form,
        // ]);
        return view('armada.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());

        Armada::create([
            'nomor'           =>$request->nomor,
            'jenis'           =>$request->jenis,
            'ketersediaan'    =>$request->ketersediaan,
            'kapasitas'       =>$request->kapasitas,
        ]);

        // return redirect()->route('users.index');

        Toast::title('Data Armada Tersimpan')->autoDismiss(3);

        return to_route('armada.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Armada $armada)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Armada $armada)
    {
        return view('armada.edit',[
            'armadas'    => $armada
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Armada $armada)
    {
        $armada->update([
            'nomor'           =>$request->nomor,
            'jenis'           =>$request->jenis,
            'ketersediaan'    =>$request->ketersediaan,
            'kapasitas'       =>$request->kapasitas,
        ]);

        // return redirect()->route('users.index');

        Toast::title('Data Armada Diubah')->autoDismiss(3);

        return to_route('armada.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Armada $armada)
    {
        $armada->delete();

        Toast::title('Data Armada Dihapus')->autoDismiss(3);

        return to_route('armada.index');
    }
}
