<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\PayBills;

class PayBillsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pay_bills=PayBills::all();
        return view("index",compact("pay_bills"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("createpaybills");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile("comprobante_pago_cliente")) {
            $file=$request->file("comprobante_pago_cliente");
            $name=time().$file->getClientOriginalName();
            $file->move(public_path( )."/images/",$name);

            $pay_bills = new PayBills();
            $pay_bills->clave_catastral=$request->input("clave_catastral");
            $pay_bills->telefono=$request->input("telefono");
            $pay_bills->correo=$request->input("correo");

            $pay_bills->comprobante_pago_cliente=$name;
            $pay_bills->save();
            return view("confirmacionpaybills");

    }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pay_bills = PayBills::find($id);
        return view("verpaybills", compact("pay_bills"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pay_bills->fill($request->except("comprobante_pago_cliente"));
        if ($request->hasFile("comprobante_pago_cliente")){
            $file = $request->file("comprobante_pago_cliente");
            $name= time().$file-> getClientOriginalName();

            $pay_bills->comprobante_pago_cliente=$name;
            $file->move(public_path( ).'/images/',$name);
        }
        $pay_bills->save( );
        return redirect("paybills/");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
