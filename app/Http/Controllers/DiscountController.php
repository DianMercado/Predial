<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Discount;

class DiscountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $discount=Discount::all();
        return view("index",compact("discount"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("creatediscount");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile("archivo_comprobante")) {
            $file=$request->file("archivo_comprobante");
            $name=time().$file->getClientOriginalName();
            $file->move(public_path( )."/images/",$name);

            $discount = new Discount();
            $discount->clave_catastral=$request->input("clave_catastral");
            $discount->correo=$request->input("correo");
            $discount->tipo_tramite=$request->input("tipo_tramite");

            $discount->archivo_comprobante=$name;
            $discount->save();
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $discount->fill($request->except("archivo_comprobante"));
        if ($request->hasFile("archivo_comprobante")){
            $file = $request->file("archivo_comprobante");
            $name= time().$file-> getClientOriginalName();

            $discount->archivo_comprobante=$name;
            $file->move(public_path( ).'/images/',$name);
        }
        $discount->save( );
        return redirect("discounts/");
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
