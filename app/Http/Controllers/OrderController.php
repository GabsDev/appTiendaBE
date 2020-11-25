<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Carbon\Carbon;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $ordenes = Order::orderBy('orderDate', 'desc')->with(["user", "client", "deliveryMan", "orderDetails.product"])->get();
            $response = $ordenes;

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
        //Especificar las reglas de validación para los campos de la orden si es necesario

        //Transacciones https://laravel.com/docs/8.x/database#database-transactions
        //Transacción guardar orden encabezado y detalles
        DB::beginTransaction();
        try {
            //Instancia orden
            $orden = new Order();
            //Fecha actual o dada por el usuario depende de la aplicación
            $orden->orderDate = Carbon::parse(Carbon::now())->format('Y-m-d');;
            $user = auth('api')->user();
            $orden->user()->associate($user->id);
            $orden->orderType->input('orderType');
            $orden->status->input('status');
            $orden->subTotal->input('subTotal');
            $orden->taxes->input('taxes');
            $orden->total->input('total');

            $orden->client_id->input('client_id');
            $client = Client::find(client_id);
            $orden->client()->associate($client->id);

            $orden->salesMan_id->input('salesMan_id');

            $orden->dispatchMan_id->input('dispatchMan_id');

            //Guardar encabezado
            $orden->save();
            //Instancias Detalle orden
            //La siguiente variable debe contener todos los elementos necesarios para registrar el detalle de la orden
            $detalles = $request->input('ordenDetails');
            foreach ($detalles as $item) {
                $orden->products()->attach($item['product_id'], [
                    'quantity' => $item['quantity'],
                    'price' => $item['price'],
                    'fulfilled' => $item['fulfilled']
                ]);
            }
            DB::commit();
            $response = 'Orden creada!';
            return response()->json($response, 201);
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json($e->getMessage(), 422);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
