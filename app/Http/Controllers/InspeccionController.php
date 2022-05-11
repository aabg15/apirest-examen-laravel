<?php

namespace App\Http\Controllers;

use App\Models\Inspecciones;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InspeccionController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inspecciones = Inspecciones::all();

        $query = DB::table('vehiculosinpecciones')
            ->join('vehiculos', 'vehiculosinpecciones.id_vehiculo', '=', 'vehiculos.id')
            ->join('neumaticos', 'vehiculosinpecciones.id_vehiculo', '=', 'neumaticos.id_vehiculo')
            ->join('vehiculosidentificaciones', 'vehiculosidentificaciones.id_vehiculo', '=', 'vehiculosinpecciones.id_vehiculo')
            ->select('vehiculosinpecciones.*', 'vehiculos.marca', 'neumaticos.posicion', 'neumaticos.interior', 'vehiculosidentificaciones.*')
            ->get();

        return \response($query);
        //return \response(json_encode($inspecciones))
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $accountId = $request->input('id');
        $inspecci = Inspecciones::findOrFail($accountId); //busca la cuenta
        //return $account->balance;
        return \response($inspecci);
    }

    public function store(Request $request)
    {

        $request->validate([
            'nombre' => 'required',
            'apellidos' => 'required',
            'correo' => 'required',
            'estado' => 'required'
        ]);

        if ($request->input(key: 'type') === 'deposit') { //para depositos
            return $this->deposit(
                $request->input(key: 'destination'),
                $request->input(key: 'amount')
            );
        } elseif ($request->input(key: 'type') === 'withdraw') { //para retiros.

            return $this->withdraw(
                $request->input(key: 'origin'),
                $request->input(key: 'amount')
            );
        } elseif ($request->input(key: 'type') === 'transfer') {
            return $this->transfer(
                $request->input(key: 'origin'),
                $request->input(key: 'destination'),
                $request->input(key: 'amount')
            );
        }
    }
}
