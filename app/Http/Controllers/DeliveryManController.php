<?php

namespace App\Http\Controllers;

use App\Models\DeliveryMan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /* Request entradas del formulario enviadas,
            debe establecer las entradas requeridas para crear el prodcuto
         */
        //Especificar las reglas de validación para los campos del videojuego
        //https://laravel.com/docs/8.x/validation#available-validation-rules
        $validator = Validator::make(
            $request->all(),
            [
                'fullName' => 'required|string|min:10',
                'idCard' => 'required|numeric|min:7',
                'telephone' => 'required|numeric|min:7',
                'email' => 'required|email',
                'enable' => 'required|boolean'

            ]
        );
        if ($validator->fails()) {
            return response()->json($validator->messages(), 422);
        }
        try {
            //Instancia
            $deliveryMan = new DeliveryMan();
            $deliveryMan->fullName = $request->input('fullName');
            $deliveryMan->idCard = $request->input('idCard');
            $deliveryMan->telephone = $request->input('telephone');
            $deliveryMan->email = $request->input('email');
            $deliveryMan->enable = $request->input('enable');
            $deliveryMan->vehicle_id = $request->input('vehicle_id');



            //Guardar el videojuego en la BD
            if ($deliveryMan->save()) {
                $response = 'Personal de entrega creado!';
                return response()->json($response, 201);
            } else {
                $response = [
                    'msg' => 'Error durante la creación'
                ];
                return response()->json($response, 404);
            }
        } catch (\Exception $e) {
            return response()->json($e->getMessage(), 422);
        }
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
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DeliveryMan  $deliveryMan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        /* Request entradas del formulario enviadas,
            debe establecer las entradas requeridas para crear el prodcuto
         */
        //Especificar las reglas de validación para los campos del videojuego
        //https://laravel.com/docs/8.x/validation#available-validation-rules
        $validator = Validator::make(
            $request->all(),
            [
                'fullName' => 'required|string|min:10',
                'idCard' => 'required|numeric|min:7',
                'telephone' => 'required|numeric|min:7',
                'email' => 'required|email',
                'enable' => 'required|boolean'

            ]
        );
        if ($validator->fails()) {
            return response()->json($validator->messages(), 422);
        }
        try {
            //Instancia
            $deliveryMan = DeliveryMan::find($id);
            $deliveryMan->fullName = $request->input('fullName');
            $deliveryMan->idCard = $request->input('idCard');
            $deliveryMan->telephone = $request->input('telephone');
            $deliveryMan->email = $request->input('email');
            $deliveryMan->enable = $request->input('enable');
            $deliveryMan->vehicle_id = $request->input('vehicle_id');

            //Guardar el videojuego en la BD
            if ($deliveryMan->save()) {
                $response = 'Personal de entrega actualizado!';
                return response()->json($response, 201);
            } else {
                $response = [
                    'msg' => 'Error durante la creación'
                ];
                return response()->json($response, 404);
            }
        } catch (\Exception $e) {
            return response()->json($e->getMessage(), 422);
        }
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
