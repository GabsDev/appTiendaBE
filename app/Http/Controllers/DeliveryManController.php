<?php

namespace App\Http\Controllers;

use App\Models\DeliveryMan;
use Illuminate\Http\Request;

class DeliveryManController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            //Listar al personal de entrega
            $deliveryMan = DeliveryMan::where('enable', true)->with(['vehicle'])->orderBy('fullName', 'asc')->get();
            $response = $deliveryMan;
            return response()->json($response, 200);
        } catch (\Exception $e) {
            return response()->json($e->getMessage(), 422);
        }
    }


    public function all()
    {
        try {
            /*  Listado del personal de entrega
           incluyendo las ordenes  que tiene asignados
           y la información del vehiculo asignado
            */
            $deliveryMan = DeliveryMan::orderBy('fullName', 'desc')->with(['vehicle'])->get();
            $response = $deliveryMan;

            return response()->json($response, 200);
        } catch (\Exception $e) {
            return response()->json($e->getMessage(), 422);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DeliveryMan  $deliveryMan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            //Obtener un objeto con la informacion de un empleado de entrega.
            $deliveryMan = DeliveryMan::where('id', $id)->with(['vehicle'])->first();
            $response = $deliveryMan;
            return response()->json($response, 200);
        } catch (\Exception $e) {
            return response()->json($e->getMessage(), 422);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DeliveryMan  $deliveryMan
     * @return \Illuminate\Http\Response
     */
    public function edit(DeliveryMan $deliveryMan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DeliveryMan  $deliveryMan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DeliveryMan $deliveryMan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DeliveryMan  $deliveryMan
     * @return \Illuminate\Http\Response
     */
    public function destroy(DeliveryMan $deliveryMan)
    {
        //
    }
}
